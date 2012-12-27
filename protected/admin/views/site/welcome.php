<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>
<?php $this->widget('bootstrap.TbBreadcrumbs',
	array('links'=>array('后台首页'=>'#', '欢迎登陆Yiicms后台'),
		  'homeLink'=>CHtml::link('菜单',Yii::app()->homeUrl),
		  'htmlOptions'=>array('class'=>''),
		  'separator'=>'/'));
?>
<div class="row-fluid">

<div class="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>警告!</strong> 请使用火狐或者chrome等浏览器，IE浏览器可能会出现问题.
</div>
<?php $this->widget('bootstrap.TbMenu', array(
    'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    'id'=>'yiitab',
    'items'=>array(
        array('label'=>'网站基本信息', 'url'=>'#home'),
        array('label'=>'profile', 'url'=>'#profile'),
        array('label'=>'messages', 'url'=>'#messages'),
        array('label'=>'settings', 'url'=>'#settings'),
    ),
)); ?>
<div class="tab-content">
  <div class="tab-pane" id="home">
<?php 
$gridDataProvider = new CArrayDataProvider(array(
    array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS'),
    array('id'=>2, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript'),
    array('id'=>3, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML'),
));
$this->widget('bootstrap.TbGridView', array(
    'type'=>'striped bordered condensed',//default striped bordered condensed
    'dataProvider'=>$gridDataProvider,
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'id', 'header'=>'#'),
        array('name'=>'firstName', 'header'=>'First name'),
        array('name'=>'lastName', 'header'=>'Last name'),
        array('name'=>'language', 'header'=>'Language'),
        array(
            'class'=>'bootstrap.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); 
?>
</div>
  <div class="tab-pane" id="profile">...profile</div>
  <div class="tab-pane" id="messages">..messages.</div>
  <div class="tab-pane" id="settings">...settings</div>
</div>

<button type="button" class="btn btn-primary" data-loading-text="提交中...">提交</button>


<script>
  $(function () {
    $('#yiitab a:first').tab('show');
    $('#yiitab a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});
  });
</script>
</div><!--/row-->