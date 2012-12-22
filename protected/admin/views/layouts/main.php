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
    <!-- Navbar================================================== -->
    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.html">萍萍店</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="./index.html">主页</a>
              </li>
              <li class="">
                <a href="./getting-started.html">公司动态</a>
              </li>
              <li class="">
                <a href="./scaffolding.html">产品展示</a>
              </li>
              <li class="">
                <a href="./base-css.html">联系我们</a>
              </li>
              <li class="">
                <a href="./components.html">关于我们</a>
              </li>
              <li class="">
                <a href="./javascript.html">留言</a>
              </li>
			  <li class="dropdown">
				  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown 
				  <span class="caret"></span></a>
				  <ul id="yw3" class="dropdown-menu">
				  <li><a tabindex="-1" href="#">Action</a></li>
				  <li><a tabindex="-1" href="#">Another action</a></li>
				  <li><a tabindex="-1" href="#">Something else here</a>
				  </li><li class="divider"></li>
				  <li class="nav-header">NAV HEADER</li>
				  <li><a tabindex="-1" href="#">Separated link</a></li>
				  <li><a tabindex="-1" href="#">One more separated link</a></li>
				  </ul>
			  </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
          <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
                  网站栏目<i class="icon-chevron-down floright"></i>
                </a>
              </div>
              <div id="collapse1" class="accordion-body collapse in">
                <div class="accordion-inner">
                  <ul class="nav nav-list">
                    <li><a href="#">添加栏目</a></li>
                    <li><a href="#">栏目管理</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                  内容管理<i class="icon-chevron-right floright"></i>
                </a>
              </div>
              <div id="collapse2" class="accordion-body collapse">
                <div class="accordion-inner">
                   <ul class="nav nav-list">
                    <li><a href="#">添加文章</a></li>
                    <li><a href="#">文章管理</a></li>
                    <li><a href="#">添加分类</a></li>
                    <li><a href="#">分类管理</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
                  产品管理<i class="icon-chevron-right floright"></i>
                </a>
              </div>
              <div id="collapse3" class="accordion-body collapse">
                <div class="accordion-inner">
                   <ul class="nav nav-list">
                    <li><a href="#">产品分类</a></li>
                    <li><a href="#">添加产品</a></li>
                    <li><a href="#">产品管理</a></li>
                  </ul>
                </div>
              </div>
            </div>
              <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
                  订单管理<i class="icon-chevron-right floright"></i>
                </a>
              </div>
              <div id="collapse4" class="accordion-body collapse">
                <div class="accordion-inner">
                  <ul class="nav nav-list">
                    <li><a href="#">待处理订单</a></li>
                    <li><a href="#">处理中订单</a></li>
                    <li><a href="#">已发货订单</a></li>
                    <li><a href="#">已完成订单</a></li>
                  </ul>
                </div>
              </div>
            </div>
              <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse5">
                  会员管理<i class="icon-chevron-right floright"></i>
                </a>
              </div>
              <div id="collapse5" class="accordion-body collapse">
                <div class="accordion-inner">
                  <ul class="nav nav-list">
                    <li><a href="#">会员注册设置</a></li>
                    <li><a href="#">会员注册审核</a></li>
                    <li><a href="#">添加会员</a></li>
                    <li><a href="#">会员管理</a></li>
                  </ul>
                </div>
              </div>
            </div>
               <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse6">
                  网站设置<i class="icon-chevron-right floright"></i>
                </a>
              </div>
              <div id="collapse6" class="accordion-body collapse">
                <div class="accordion-inner">
                  <ul class="nav nav-list">
                    <li><a href="#">网站全局设置</a></li>
                    <li><a href="#">首页横幅广告</a></li>
                    <li><a href="#">网站联系资料</a></li>
                    <li><a href="#">语音设置</a></li>
                    <li><a href="#">管理员设置</a></li>
                  </ul>
                </div>
              </div>
            </div>
               <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse7">
                  其他设置<i class="icon-chevron-right floright"></i>
                </a>
              </div>
              <div id="collapse7" class="accordion-body collapse">
                <div class="accordion-inner">
                  <ul class="nav nav-list">
                    <li><a href="#">更新网站缓存</a></li>
                    <li><a href="#">友情链接管理</a></li>
                    <li><a href="#">在线留言管理</a></li>
                    <li><a href="#">网站投票管理</a></li>
                    <li><a href="#">邮箱设置</a></li>
                    <li><a href="#">上传图片设置</a></li>
                    <li><a href="#">数据库管理</a></li>
                    <li><a href="#">网站功能开启</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div><!--/span3-->
        <div class="span9">
          <?php $this->widget('ext.TbBreadcrumbs',array('links'=>array('Library'=>'#', 'Data')));?>
          <div class="row-fluid">
              <div class="span4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn" href="#">View details &raquo;</a></p>
              </div><!--/span-->
              <div class="span4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn" href="#">View details &raquo;</a></p>
              </div><!--/span-->
              <div class="span4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn" href="#">View details &raquo;</a></p>
              </div><!--/span-->
            </div><!--/row-->
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
    <script>
    //sidebar icon
   		$('.accordion-toggle').live('click',function(){
          if( $(this).hasClass('collapsed') ){
            $(this).find('i').removeClass('icon-chevron-down').addClass('icon-chevron-right');
            $('.accordion-toggle').not(this).find('i').removeClass('icon-chevron-down').addClass('icon-chevron-right');
          }else{
            $(this).find('i').removeClass('icon-chevron-right').addClass('icon-chevron-down');
            $('.accordion-toggle').not(this).find('i').removeClass('icon-chevron-down').addClass('icon-chevron-right');
          }
      	});
    </script>
  </body>
</html>