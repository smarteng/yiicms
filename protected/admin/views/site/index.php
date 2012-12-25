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
)); ?>
     <h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

	<p>Congratulations! You have successfully created your Yii application.</p>

	<p>You may change the content of this page by modifying the following two files:</p>
	<ul>
		<li>View file: <code><?php echo __FILE__; ?></code></li>
		<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
	</ul>

	<p>For more details on how to further develop this application, please read
	the <a href="http://www.yiiframework.com/doc/">documentation</a>.
	Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
	should you have any questions.</p>
	       
</div><!--/row-->