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
    <link href="/admin/css/admincontent.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>
      <?php echo $content; ?>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/admin/js/bootstrap.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        //init change display
        $('#collapse0').addClass('in');
        $('var').first().removeClass('icon-chevron-right').addClass('icon-chevron-down');
        $('body').tooltip({
            selector: '[rel=tooltip]'
        });
        
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