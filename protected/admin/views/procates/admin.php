<?php $this->widget('bootstrap.TbBreadcrumbs',
    array('links'=>array('产品管理'=>'#','产品分类管理'),
          'homeLink'=>CHtml::link('菜单',array('site/welcome'),array('target'=>'main')),
          'htmlOptions'=>array('class'=>''),
          'separator'=>'/'));
?>

<h4>产品分类管理</h4>
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
        array('name'=>'title', 'header'=>'分类名称'),
        array('name'=>'pid', 'header'=>'上级分类','value' => '$data->getPidText()','type' => 'raw'),
        //array('name'=>'metakeywords', 'header'=>'关键词'),
        array('name'=>'ishidden', 'header'=>'是否隐藏','type'=>'boolean'),
        array(
            'class'=>'bootstrap.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); 
?>