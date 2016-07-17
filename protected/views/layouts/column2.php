<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php
/*
        $this->widget('zii.widgets.CMenu', array(
        'htmlOptions'=>array('class'=>'ulBox'),
        'activeCssClass'=>'current',
        'items'=>array(
            array('label'=>'首页', 'url'=>'http://www.cniska.net/yii-bootstrap','active'=>true),
            array('label'=>'新闻', 'url'=>'#', 
            'items'=>array(
                array('label'=>'新闻分类', 'url'=>array('product/new', 'tag'=>'new')),
                array('label'=>'新闻分类', 'url'=>array('product/index', 'tag'=>'popular')),
            )),
            array('label'=>'精油产品', 'url'=>'#', 
            'items'=>array(
                array('label'=>'单方精油', 'url'=>array('product/new', 'tag'=>'new')),
                array('label'=>'复方精油', 'url'=>array('product/index', 'tag'=>'popular')),
            )),
            array('label'=>'膜膜皇后', 'url'=>array('site/login')),
            array('label'=>'香草园精油', 'url'=>array('site/login')),
            array('label'=>'膜膜皇后', 'url'=>array('site/login')),
            array('label'=>'香草园精油', 'url'=>array('site/login')),
        ),
    ));
    */
   ?>
<?php $this->endContent(); ?>