<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>
<!--加载首页轮播图-->
<?php $this->widget('ext.SliderWidget', array('asbg'=>false, 'width'=>'640px', 'height'=>'240px', 'token'=>'首页640*240'));?>
<!--slide end -->