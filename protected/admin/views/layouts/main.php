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
            'items'=>$this->channels,
        ),
    ),
)); ?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
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
                    'items'=>$sub['items'],
                )); ?>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div><!--/span3-->
        <div class="span9" id="maincontent">
          <?php echo $content; ?>
        </div><!--/span9-->
    </div>
  <hr>
  <!-- Footer================================================= -->
     <footer>
        <p>&copy; Company 2012</p>
      </footer>
</div><!--/.fluid-container-->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/admin/js/jquery.js" type="text/javascript"></script>
    <script src="/admin/js/bootstrap.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        //init change display
        $('#collapse0').addClass('in');
        $('var').first().removeClass('icon-chevron-right').addClass('icon-chevron-down');
        $('a[rel="tooltip"]').tooltip();
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
    });
    </script>
  </body>
</html>