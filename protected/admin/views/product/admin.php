<?php
/* @var $this ProductController */
/* @var $model Products */
$this->widget('bootstrap.TbBreadcrumbs',
    array('links'=>array('内容管理'=>'#','商品管理'),
          'homeLink'=>CHtml::link('菜单',array('site/welcome'),array('target'=>'main')),
          'htmlOptions'=>array('class'=>''),
          'separator'=>'/'));
?>

<h4>商品管理</h4>
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
        array('name'=>'name', 'header'=>'商品名称'),
        array('name'=>'pid', 'header'=>'主分类','value' => '$data->getPidText()','type' => 'raw'),
        array('name'=>'posttime', 'header'=>'发布时间','type'=>'datetime'),
        array(
            'class'=>'bootstrap.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); 
?>
