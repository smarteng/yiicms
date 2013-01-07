<?php

class ProductCateWidget extends CWidget
{

	public function run( )
	{
		$data = $this->getAllcate();
    $html = '';
   // var_dump($data);
    foreach ($data as $key => $cates) {
       $html .= '<div class="new_list">
                    <div class="new_title">'.$cates['label'].'</div>
                    <div class="new_text">
                        <ul>';
          if (is_array($cates['items'])) {
            foreach ($cates['items'] as $k => $cate) {
               $html .= '<li><a href="'.$cate['url'].'">'.$cate['label'].'</a></li>';
            }
          }
            
       $html .=  '</ul></div></div>';
    }
    echo $html;
	}

  protected function getAllcate()
  {
    $allcates = Yii::app()->db->createCommand()
            ->select('*')
            ->from('{{procates}}')
            ->order('pid asc,ordernum asc')
            ->queryAll();
    $cates = array();
    foreach ($allcates as $key => $value) {
      $cate = array();
      $cate['label'] = $value['title'];
      $cate['id'] = $value['id'];
      $cate['pid'] = $value['pid'];
      if($value['pid'] !=0) {
          $cate['url'] = Yii::app()->createUrl('goods/cate',array('cid'=>$value['id']));
          $cates[$value['pid']]['items'][] =$cate;
      }else{
          $cates[$value['id']] =$cate;
      }
    }
    return $cates;
  }
}

?>
