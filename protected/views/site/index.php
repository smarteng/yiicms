<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>
<!--加载首页轮播图-->
<?php $this->widget('ext.SliderWidget', array('asbg'=>false, 'width'=>'640px', 'height'=>'240px', 'token'=>'首页640*240'));?>
<!--slide end -->


<div id="flow"></div><div id="flow"></div></div><div id="content">
<div id="left">
    <h1 class="pro_Category"></h1>
    <div class="new_box">
              <?php $this->widget('ext.ProductCateWidget');?>
    </div>
</div>
    <!--rightTop start -->
    <div id="right">
        <h1 class="shopNews">
            最新开店消息</h1>
        <!--notice start -->
        <div id="notice" class="scrollword">
            <div id="notice1">
                <ul class="slideNotice">
                            <li> &nbsp;上海浦东商场现代城<br>开业时间:2012-08-16</li>
                            <li> &nbsp;厦门SM城市广场<br>开业时间:2012-08-14</li>
                            <li> &nbsp;上海万达广场宝山店<br>开业时间:2012-08-11</li>
                            <li> &nbsp;兰州国芳百货<br>开业时间:2012-07-20</li>
                            <li> &nbsp;贵州星力瑞金店<br>开业时间:2012-07-15</li>
                            <li> &nbsp;天津米莱欧<br>开业时间:2012-07-13</li>
                            <li> &nbsp;唐山五联百货<br>开业时间:2012-12-04</li>
                            <li> &nbsp;任县专卖店<br>开业时间:2012-12-04</li>
                            <li> &nbsp;抚顺新玛特<br>开业时间:2012-12-04</li>
                            <li> &nbsp;江阴万达<br>开业时间:2012-12-04</li>
                            <li> &nbsp;当代商城<br>开业时间:2012-12-04</li>
                            <li> &nbsp;烟台百盛购物中心<br>开业时间:2012-12-04</li>
                            <li> &nbsp;武林银泰<br>开业时间:2012-12-04</li>
                            <li> &nbsp;济南银座商城店<br>开业时间:2012-12-04</li>
                </ul>
            </div>
            <div id="notice2">
                <ul class="slideNotice">
                            <li> &nbsp;兰州国芳百货<br>开业时间:2012-07-20</li>
                            <li> &nbsp;贵州星力瑞金店<br>开业时间:2012-07-15</li>
                            <li> &nbsp;天津米莱欧<br>开业时间:2012-07-13</li>
                            <li> &nbsp;唐山五联百货<br>开业时间:2012-12-04</li>
                            <li> &nbsp;任县专卖店<br>开业时间:2012-12-04</li>
                            <li> &nbsp;抚顺新玛特<br>开业时间:2012-12-04</li>
                            <li> &nbsp;江阴万达<br>开业时间:2012-12-04</li>
                            <li> &nbsp;当代商城<br>开业时间:2012-12-04</li>
                            <li> &nbsp;烟台百盛购物中心<br>开业时间:2012-12-04</li>
                            <li> &nbsp;武林银泰<br>开业时间:2012-12-04</li>
                            <li> &nbsp;济南银座商城店<br>开业时间:2012-12-04</li>
                </ul>
            </div>
        </div>
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
