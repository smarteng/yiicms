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
		$html = "";
		$html2 = '<div id="myjQuery">
  <div id="myjQueryContent">
        <div style="z-index: 1; opacity: 1;" class="smask">
	        <a href="http://www.afuvip.com/Article/ArticleList?type=about" target="_top">
	        	<img src="./uploads/slider/01.jpg" alt="阿芙的诞生">
	        </a>
  		</div>
        <div class="smask">
        	<a href="http://www.afuvip.com/goods/130" target="_top">
        		<img src="./uploads/slider/02.jpg" alt="阿芙荷荷巴系列">
        	</a>
        </div>
        <div class="smask">
          <a href="http://www.afuvip.com/liuye.htm" target="_top">
            <img src="./uploads/slider/05.jpg" alt="阿芙×刘野限定版 ">
          </a>
        </div>
        <div class="smask">
          <a href="http://www.afuvip.com/goods/132" target="_top">
            <img src="./uploads/slider/04.jpg" alt="阿芙人参系列">
          </a>
        </div>
        <div class="smask">
          <a href="http://www.afuvip.com/goods/136" target="_top">
            <img src="./uploads/slider/05.jpg" alt="阿芙玫瑰系列">
          </a>
        </div>
  </div>
  <ul id="myjQueryNav">
        <li class="current"><a href="http://www.afuvip.com/Article/ArticleList?type=about" target="_top">阿芙的诞生</a> </li>
        <li><a href="http://www.afuvip.com/goods/130" target="_top">阿芙荷荷巴系列</a> </li>
        <li><a href="http://www.afuvip.com/liuye.htm" target="_top">阿芙×刘野限定版 </a> </li>
        <li><a href="http://www.afuvip.com/goods/132" target="_top">阿芙人参系列</a> </li>
        <li><a href="http://www.afuvip.com/goods/136" target="_top">阿芙玫瑰系列</a> </li>
  </ul>';
  echo $html2;
	}
  protected function regFiles(){
    $this->cs->registerScriptFile($this->assetUrl.'/js/player.js',CClientScript::POS_END );
  }

}

?>
