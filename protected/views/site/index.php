<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>
<!--加载首页轮播图-->
<?php $this->widget('ext.SliderWidget', array('asbg'=>false, 'width'=>'640px', 'height'=>'240px', 'token'=>'首页640*240'));?>
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
<!--店铺广告-->

<div class="mid_banner">
  <ul class="midlink" style="width:960px; overflow:hidden;">
    <li style="margin:9px 9px 0 0;"><a href=""><img src="./uploads/brand/recommend.jpg"></a></li>
    <li style="margin:9px 9px 0 0;"><a href="http://www.afuvip.com/goods/124">
    <img src="./uploads/brand/129972708117133882未标题-1.jpg"></a></li>
    <li style="margin:9px 9px 0 0;"><a href="http://www.afuvip.com/Article/ArticleList?type=about">
    <img src="./uploads/brand/brandAfu.jpg"></a></li>
    <li style="margin:9px 9px 0 0;"><a href="http://www.afuvip.com/Home/Maps">
    <img src="./uploads/brand/shopAfu.jpg"></a></li>
  </ul>
</div>
<div id="pro_content">
    <!--featured products start -->
        <div class="feature_product">
            <a href="http://www.afuvip.com/details/10006109">
                <img src="./uploads/goods/129852513053177321p03.jpg" width="170" height="195" title="" alt="阿芙·玫瑰精油"></a>
            <div class="product_detail">
                <a href="http://www.afuvip.com/details/10006109" class="details">阿芙·玫瑰精油</a></div>
        </div>  
        <div class="feature_product">
            <a href="http://www.afuvip.com/details/10006106">
                <img src="./uploads/goods/129852507317827248p02.jpg" width="170" height="195" title="" alt="阿芙·檀香精油"></a>
            <div class="product_detail">
                <a href="http://www.afuvip.com/details/10006106" class="details">阿芙·檀香精油</a></div>
        </div>  
        <div class="feature_product">
            <a href="http://www.afuvip.com/details/10006110">
                <img src="./uploads/goods/129852513464550044p01.jpg" width="170" height="195" title="" alt="阿芙·甜橙精油"></a>
            <div class="product_detail">
                <a href="http://www.afuvip.com/details/10006110" class="details">阿芙·甜橙精油</a></div>
        </div>  
        <div class="feature_product">
            <a href="http://www.afuvip.com/details/10006102">
                <img src="./uploads/goods/129852515492241605p04.jpg" width="170" height="195" title="" alt="阿芙·茶树精油"></a>
            <div class="product_detail">
                <a href="http://www.afuvip.com/details/10006102" class="details">阿芙·茶树精油</a></div>
        </div>  
        <div class="feature_product">
            <a href="http://www.afuvip.com/details/10006115">
                <img src="./uploads/goods/129852515776630105p05.jpg" width="170" height="195" title="" alt="阿芙·薰衣草精油"></a>
            <div class="product_detail">
                <a href="http://www.afuvip.com/details/10006115" class="details">阿芙·薰衣草精油</a></div>
        </div>  
    <!--featured products end -->
</div>
