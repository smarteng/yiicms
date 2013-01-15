<?php

class SliderWidget extends CWidget
{

	public $height = "100%";
	public $width = "100%";
	public $token = NULL;
	public $asbg = TRUE;
	public $vertical = FALSE;
  protected $assetUrl;
  protected $cs;

  public function init(){
    $this->cs = Yii::app()->clientScript;
    $this->assetUrl = Yii::app()->assetManager->publish(dirname(__FILE__).'/asset');
    $this->regFiles();
    parent::init();
  }

	public function run( )
	{
		if ( !isset( $this->token ) )
		{
			throw new CHttpException( 500, "\"token\" have to be set!" );
		}
		$data = Slideshow::model( )->findAllByAttributes( array(
			"token" => $this->token
		), array( "limit" => 5, "order" => "sortnum DESC" ) );

		$html2 = '<div id="myjQuery"><div id="myjQueryContent">';
    $html3 = '<ul id="myjQueryNav">';
    $i = 1;
    foreach ($data as $key => $value) {
        if($i ==1){
          $html2 .='<div style ="z-index:1;opacity:1;" class="smask">';
          $html3 .= '<li class="current">';
        }else{
          $html2 .='<div class="smask">';
          $html3 .= '<li>';
        }
        $html2 .= '<a href="'.$value->url.'" target="_top">
                      <img src="'.$value->image.'" alt="'.$value->title.'">
                    </a>
                </div>';
        $html3 .= '<a href="'.$value->url.'" target="_top">'.$value->title.'</a> </li>';
        $i++;
    }

   $html2 .='</div>';
   $html3 .='</ul>';
 
  echo $html2.$html3;
	}
  protected function regFiles(){
    $this->cs->registerScriptFile($this->assetUrl.'/js/player.js',CClientScript::POS_END );
  }

}

?>
