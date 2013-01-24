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
<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        快捷操作 <i class="icon-star-empty"></i>
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
        <button class="btn btn-primary" type="button">发布文章</button>
        <button class="btn btn-info" type="button">发布产品</button>
        <button class="btn btn-warning" type="button">审核用户</button>
      </div>
    </div>
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

<?php $this->widget('bootstrap.TbButton', array(
    'buttonType'=>'button',
    'type'=>'primary',
    'label'=>'提交',
    'loadingText'=>'提交中...',
    'htmlOptions'=>array('id'=>'buttonStateful'),
)); ?>

<script>
  $(function () {
    $('#yiitab a:first').tab('show');
    $('#yiitab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });
  $('#buttonStateful').click(function() {
      var btn = $(this);
      btn.button('loading'); // call the loading function
      setTimeout(function() {
          btn.button('reset'); // call the reset function
      }, 500);
  });
  $('body').tooltip({
            selector: '[rel=tooltip]'
  });
  });
</script>
</div><!--/row-->
<script type="text/javascript">
    //init change display
        //$('#collapse0').addClass('in');
        //$('var').first().removeClass('icon-chevron-right').addClass('icon-chevron-down');
        /*
        $('body').tooltip({
            selector: '[rel=tooltip]'
        });
        */
</script>