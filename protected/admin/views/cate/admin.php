<?php $this->widget('bootstrap.TbBreadcrumbs',
    array('links'=>array('内容管理'=>'#','分类管理'),
          'homeLink'=>CHtml::link('菜单',Yii::app()->homeUrl),
          'htmlOptions'=>array('class'=>''),
          'separator'=>'/'));
?>


<h3>分类管理</h3>
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
        array('name'=>'sid', 'header'=>'#'),
        array('name'=>'sortname', 'header'=>'分类名称'),
        array('name'=>'keywords', 'header'=>'分类标签'),
        array(
            'class'=>'bootstrap.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); 
?>
