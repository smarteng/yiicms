<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>管理后台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!-- Le styles -->
    <link href="/admin/css/bootstrap.css" rel="stylesheet">
    <link href="/admin/css/bootstrap-responsive.css" rel="stylesheet">
	  <link href="/admin/css/admin.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>
  <?php $this->widget('bootstrap.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'brand'=>'后台管理',
    'brandUrl'=>'#',
    'fixed' => '',

    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.TbMenu',
            'id'=>'navbar_top',
            'firstItemCssClass'=>'active',
            'items'=>$this->channels,
        ),
        array(
            'class'=>'bootstrap.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                array('label'=>'后台首页', 'url'=>array('site/welcome'),'linkOptions'=>array('target'=>'main')),
                array('label'=>'网站首页', 'url'=>'/','linkOptions'=>array('target'=>'_blank')),
                array('label'=>'admin', 'url'=>'#', 'items'=>array(
                    array('label'=>'编辑资料', 'url'=>array('site/welcome'),'linkOptions'=>array('target'=>'main')),
                    array('label'=>'修改密码', 'url'=>array('site/welcome'),'linkOptions'=>array('target'=>'main')),
                    '---',
                    array('label'=>'退出登录', 'url'=>'#'),
                )),
              ),
        ),
    ),
)); ?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3" id="admin_sidebar">
          <div class="accordion" id="accordion2">
          <?php foreach($this->sidebarmenu as $key=>$sub){ ?>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $key;?>">
                  <?php echo $sub['name'];?><var class="icon-chevron-right floright"></var>
                </a>
              </div>
              <div id="collapse<?php echo $key;?>" class="accordion-body collapse">
                <div class="accordion-inner">
                <?php $this->widget('bootstrap.TbMenu', array(
                    'type'=>'list',
                    //'scrollspy'=>array('target'=>'main'),
                    'items'=>$sub['items'],
                )); ?>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div><!--/span3-->
        <div class="span9" id="maincontent">
          <iframe id="admin-iframe" frameBorder="0" src="<?php echo $this->createUrl('site/welcome');?>" name="main"></iframe>
        </div><!--/span9-->
    </div>
  <hr>
  <!-- Footer================================================= -->
     <footer class="footer">
        <p>&copy; Company 2012</p>
      </footer>
</div><!--/.fluid-container-->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/admin/js/jquery.js"></script>
    <script src="/admin/js/bootstrap.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        //sidebar icon
        $('.accordion-toggle').live('click',function(){
            if( $(this).hasClass('collapsed') ){
              $(this).find('var').removeClass('icon-chevron-down').addClass('icon-chevron-right');
              $('.accordion-toggle').not(this).find('var').removeClass('icon-chevron-down').addClass('icon-chevron-right');
            }else{
              $(this).find('var').removeClass('icon-chevron-right').addClass('icon-chevron-down');
              $('.accordion-toggle').not(this).find('var').removeClass('icon-chevron-down').addClass('icon-chevron-right');
            }
        });
        //调整iframe自适应
        $('#admin-iframe').load(function(){
            $(this).height($(this).contents().height()+30);
        });
        
        $('#admin_sidebar').on('click', 'li a', function(event){
          var li = $(this).parent();
          $('.accordion-inner').find('li').removeClass('active');
          li.addClass('active');
        });
        //顶部菜单
         $('#navbar_top').on('click', 'li a', function(event){
          var li = $(this).parent();
          li.siblings().removeClass('active');
          li.addClass('active');
        });
        //下拉擦得
        $('.dropdown-menu').on('click', 'li a', function(event){
          var li = $(this).parent();
          $(this).parents('.dropdown').removeClass('open');
          if (li.hasClass('active')) return true;

          $('li').removeClass('active');
          li.addClass('active');
          $(this).parents('.dropdown').addClass('active');
        });
        $(document).on('mouseenter', '#admin-iframe', function(){
          $('li.dropdown').removeClass('open');
          $(this).focus();
        });
    });
    </script>
  </body>
</html>