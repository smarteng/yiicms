<?php $this->widget('bootstrap.TbBreadcrumbs',
    array('links'=>array('内容管理'=>'#','频道管理'),
          'homeLink'=>CHtml::link('菜单',Yii::app()->homeUrl),
          'htmlOptions'=>array('class'=>''),
          'separator'=>'/'));
?>
<h3>频道管理</h3>
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
        array('name'=>'title', 'header'=>'频道名称'),
        array('name'=>'ishidden', 'header'=>'是否隐藏','type'=>'boolean'),
        //array('name'=>'channeltype', 'header'=>'类型'),
        array('name'=>'link', 'header'=>'链接URL'),
        array(
            'class'=>'bootstrap.TbButtonColumn',
            'template'=>'{add}{view}{update}{delete}',
            'buttons' => array(
                'delete' => array('visible' =>'$data->systemtype == 0'),
                'add' => array('label' =>'添加子分类',
                                'icon'=>'plus',
                                'options'=>array('style'=>'padding:0 5px;'),
                                'url'=>'Yii::app()->createUrl("channel/add", array("id"=>$data->id))',
                                'visible' =>'$data->pid == 0'
                ),
            ),
            'htmlOptions'=>array('style'=>'width: 70px'),
        ),
    ),
)); 
?>