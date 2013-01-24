<?php
/* @var $this LinksController */
/* @var $model Links */

$this->widget('bootstrap.TbBreadcrumbs',
    array('links'=>array('内容管理'=>'#','友情链接管理'),
          'homeLink'=>CHtml::link('菜单',array('site/welcome'),array('target'=>'main')),
          'htmlOptions'=>array('class'=>''),
          'separator'=>'/'));
?>

<h4>友情链接管理</h4>
 
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php
$this->widget('bootstrap.TbGridView', array(
    'type'=>'striped bordered condensed',//default striped bordered condensed
    'dataProvider'=>$model->search(),
    'template'=>"{items}{pager}",
    'ajaxUpdate'=>false,
    //'afterAjaxUpdate'=>'changeiframe',
    'pagerCssClass'=>'pagination pagination-right',
    //'pager' => array('class'=>'CombPager'),
    'columns'=>array(
        array('name'=>'id', 'header'=>'#'),
        array('name'=>'name', 'header'=>'网站名称'),
        array('name'=>'url', 'header'=>'网站URL'),
        array('name'=>'updated', 'header'=>'更新时间','type'=>'datetime'),
        array(
            'class'=>'bootstrap.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); 
?>