<?php $this->widget('bootstrap.TbBreadcrumbs',
    array('links'=>array('内容管理'=>'#','更新幻灯片'),
          'homeLink'=>CHtml::link('菜单',Yii::app()->homeUrl),
          'htmlOptions'=>array('class'=>''),
          'separator'=>'/'));
?>


<h4>更新幻灯片：<?php echo $model->id; ?></h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>