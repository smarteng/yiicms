<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<title>阿芙官网-阿芙精油-阿芙，就是精油！</title>  
<meta name="keywords" content="阿芙官网,阿芙精油,阿芙香薰,香薰护理品,阿芙护肤品,玫瑰精油,茉莉精油,薰衣草精油,甜橙精油,茶树精油,人参精油,丰胸精油,瘦脸精油,瘦腿精油,减肥精油,美白祛斑,补水保湿,祛痘,去痘印,去角质,阿芙官方网站">
<meta name="description" content="阿芙官网专业介绍阿芙精油,香薰护理,精油的使用方法,精油的功效等精油知识,阿芙护肤品及各种香薰护理为您的肌肤提供最细致的呵护,阿芙,就是精油！-阿芙官网">
<meta name="author" content="阿芙精油">
<meta name="Copyright" content="阿芙精油享有版权">
<link href="/css/public.css" rel="stylesheet" type="text/css">
<link href="/css/css.css" rel="stylesheet" type="text/css">
<link href="/css/reset.css" rel="stylesheet" type="text/css">   
</head>
<body>
    <div id="container">
        <!--header start -->
        <div id="header">
			<a href="afu.htm">
				<img class="logo" src="logo.gif" width="0" height="0" alt="阿芙-就是精油！" title="阿芙-就是精油！">
			</a>
        </div>
        <!--header end -->
    </div>
    <div class="nav">
<?php
        $this->widget('zii.widgets.CMenu', array(
        'htmlOptions'=>array('class'=>'ulBox'),
        'items'=>array(
            array('label'=>'首页', 'url'=>array('site/index')),
            array('label'=>'新闻', 'url'=>'#', 
            'items'=>array(
                array('label'=>'新闻分类', 'url'=>array('product/new', 'tag'=>'new')),
                array('label'=>'新闻分类', 'url'=>array('product/index', 'tag'=>'popular')),
            )),
            array('label'=>'精油产品', 'url'=>'#', 
            'items'=>array(
                array('label'=>'单方精油', 'url'=>array('product/new', 'tag'=>'new')),
                array('label'=>'复方精油', 'url'=>array('product/index', 'tag'=>'popular')),
            )),
            array('label'=>'膜膜皇后', 'url'=>array('site/login')),
            array('label'=>'香草园精油', 'url'=>array('site/login')),
            array('label'=>'膜膜皇后', 'url'=>array('site/login')),
            array('label'=>'香草园精油', 'url'=>array('site/login')),
        ),
    ));
?>
    <div class="scrollObj"></div>
</div>

<?php echo $content; ?>
<div id="footer">
    <p class="footerText">
        北京茂思商贸有限公司&nbsp;&nbsp;&nbsp;
        全国统一客服咨询热线：010-56297999&nbsp;&nbsp;&nbsp;
        <a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备11015484号</a>
    </p>
</div>
<?php
Yii::app()->clientScript->registerCoreScript('jquery'); 
?>
<script src="/js/navScroll.js" type="text/javascript"></script>
<script src="/js/player.js" type="text/javascript"></script> 
<script>
$(function(){
    $(".nav > ul > li").ScrollNav({
        scrollObj:".nav > .scrollObj", //滑动的对象
        speed:"fast" //速度
    });
});
$('.ulBox li').first().addClass('current');
</script>
</body>
</html>