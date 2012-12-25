<?php $this->widget('bootstrap.TbBreadcrumbs',
    array('links'=>array('网站设置'=>'#','全局设置'),
          'homeLink'=>CHtml::link('菜单',Yii::app()->homeUrl),
          'htmlOptions'=>array('class'=>''),
          'separator'=>'/'));
?>

<h3>设置管理</h3>
<?php
$this->widget('bootstrap.TbGridView', array(
    'type'=>'striped bordered condensed',//default striped bordered condensed
    'dataProvider'=>$model->search(),
    //'template'=>"{items}",
    //'pager' => array('class'=>'CombPager'),
    'columns'=>array(
        array('name'=>'id', 'header'=>'#'),
        array('name'=>'categoryid', 'header'=>'categoryid'),
        array('name'=>'property', 'header'=>'property'),
        array('name'=>'setvalue', 'header'=>'setvalue'),
        array('name'=>'name', 'header'=>'name'),
        array(
            'class'=>'bootstrap.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); 
?>

