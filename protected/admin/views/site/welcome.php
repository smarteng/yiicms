<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>
<?php $this->widget('bootstrap.TbBreadcrumbs',
	array('links'=>array('后台首页'=>'#', '欢迎登陆Yiicms后台'),
		  'homeLink'=>CHtml::link('菜单',array('site/welcome'),array('target'=>'main')),
		  'htmlOptions'=>array('class'=>''),
		  'separator'=>'/'));
?>
<div class="row-fluid">

<div class="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>警告!</strong> 请使用火狐或者chrome等浏览器，IE浏览器可能会出现问题.
</div>

<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        快捷操作 <i class="icon-star-empty"></i>
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
        <a href="<?php echo $this->createUrl('articles/create'); ?>"><button class="btn btn-primary" type="button">发布文章</button></a>
        <a href="<?php echo $this->createUrl('product/create'); ?>"><button class="btn btn-info" type="button">发布产品</button></a>
        <a href="<?php echo $this->createUrl('product/create'); ?>"><button class="btn btn-success" type="button">发布产品</button></a>
        <a href="<?php echo $this->createUrl('product/create'); ?>"><button class="btn btn-warning" type="button">发布产品</button></a>
      </div>
    </div>
  </div>
</div>
<br>
<p>统计信息：有<span class="badge badge-success">2</span>篇文章 有<span class="badge badge-warning">2</span>件商品</p>

 <div class="alert alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h5>Warning!</h5>
  水温过高！！水温过高！！水温过高！！水温...<br>
  水温过高！！水温过高！！水温过高！！水温...<br>
  水温过高！！水温过高！！水温过高！！水温...<br>
</div>

</div><!--/row-->