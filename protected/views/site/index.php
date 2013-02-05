<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
//Yii::app()->clientScript->registerLinkTag('alternate','application/rss+xml',$this->createUrl('/feed'),NULL,array('title'=>'ddddddd')); 
//Yii::app()->clientScript->registerLinkTag('canonical',NULL,$this->createUrl('/feed'));
?>
<!--加载首页轮播图-->
<?php $this->widget('ext.slider.SliderWidget', array('asbg'=>false, 'width'=>'640px', 'height'=>'240px', 'token'=>'1'));?>
<!--slide end -->

<div id="flow"></div><div id="flow"></div></div>
<div id="content">
<div id="left">
    <h1 class="pro_Category"></h1>
    <div class="new_box">
              <?php $this->widget('ext.ProductCateWidget');?>
    </div>
</div>
    <!--rightTop start -->
    <div id="right">
         <?php $this->widget('ext.portlets.NewArticles',array('limit'=>6));?>
    </div>
    <!--rightTop end -->
</div>

<div class="wlc_auto">  
    <?php $this->widget('ext.portlets.PortletShops',array('limit'=>4));?>
</div>
<!--店铺广告-->
<div class="mid_banner">
    <?php $this->widget('ext.portlets.IndexAd',array('limit'=>4));?>
</div>

<div id="pro_content">
    <!--featured products start -->
        <?php $this->widget('ext.portlets.HotProducts',array('limit'=>5));?> 
    <!--featured products end -->
</div>
<?php
    Yii::app()->clientScript->registerScript('product_hover',"
        $('.feature_product').mouseover(function (){
            $(this).css({'background':'#F1F7FD','border-color':'#0099CC'});}).mouseout(function (){
            $(this).css({'background':'#FFF','border-color':'#FFF'});
            });
    ");
?>