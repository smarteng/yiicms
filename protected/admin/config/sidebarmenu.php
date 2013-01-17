<?php
return array(
	array(
		'name' => '内容管理',
		'items' => array(
				array('label'=>'添加文章', 'icon'=>'pencil', 'url'=>$this->createUrl('articles/create'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'文章管理', 'icon'=>'list', 'url'=>$this->createUrl('articles/admin'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'添加分类', 'icon'=>'plus-sign', 'url'=>$this->createUrl('cate/create'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'分类管理', 'icon'=>'list', 'url'=>$this->createUrl('cate/admin'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'添加焦点图', 'icon'=>'picture', 'url'=>$this->createUrl('slideshow/create'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'焦点图管理', 'icon'=>'picture', 'url'=>$this->createUrl('slideshow/admin'),'linkOptions'=>array('target'=>'main'),'active'=>false),
		)
	),
	array(
		'name' => '产品管理',
		'items' => array(
				array('label'=>'添加产品', 'icon'=>'edit', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'产品管理', 'icon'=>'shopping-cart', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'添加产品分类', 'icon'=>'shopping-cart', 'url'=>$this->createUrl('procates/create'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'管理产品分类', 'icon'=>'shopping-cart', 'url'=>$this->createUrl('procates/admin'),'linkOptions'=>array('target'=>'main'),'active'=>false),
		)
	),
	array(
		'name' => '好店管理',
		'items' => array(
				array('label'=>'添加好店', 'icon'=>'check', 'url'=>$this->createUrl('goodshops/create'),'linkOptions'=>array('target'=>'main'), 'active'=>false),
				array('label'=>'管理好店', 'icon'=>'plus-sign', 'url'=>$this->createUrl('goodshops/admin'),'linkOptions'=>array('target'=>'main'), 'active'=>false),
		)
	),
	array(
		'name' => '网站栏目',
		'items' => array(
				array('label'=>'添加栏目', 'icon'=>'check', 'url'=>$this->createUrl('channels/create'),'linkOptions'=>array('target'=>'main'), 'active'=>false),
				array('label'=>'栏目管理', 'icon'=>'plus-sign', 'url'=>$this->createUrl('channels/admin'),'linkOptions'=>array('target'=>'main'), 'active'=>false),
		)
	),
	array(
		'name' => '订单管理',
		'items' => array(
				array('label'=>'待处理订单', 'icon'=>'book', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'处理中订单', 'icon'=>'book', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'已发货订单', 'icon'=>'share', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'已完成订单', 'icon'=>'ok-sign', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
		)
	),
	array(
		'name' => '会员管理',
		'items' => array(
				array('label'=>'会员注册设置', 'icon'=>'cog', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'会员注册审核', 'icon'=>'info-sign', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'添加会员', 'icon'=>'inbox', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'会员管理', 'icon'=>'user', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
		)
	),
	array(
		'name' => '网站设置',
		'items' => array(
				array('label'=>'网站全局设置', 'icon'=>'globe', 'url'=>$this->createUrl('settings/admin'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'首页横幅广告', 'icon'=>'asterisk', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'网站联系资料', 'icon'=>'certificate', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'语音设置', 'icon'=>'cog', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'管理员设置', 'icon'=>'asterisk', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
		)
	),
	array(
		'name' => '其他设置',
		'items' => array(
				array('label'=>'更新网站缓存', 'icon'=>'refresh', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'友情链接管理', 'icon'=>'random', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'在线留言管理', 'icon'=>'comment', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'网站投票管理', 'icon'=>'wrench', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'邮箱设置', 'icon'=>'envelope', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'上传图片设置', 'icon'=>'picture', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'数据库管理', 'icon'=>'hdd', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
				array('label'=>'网站功能开启', 'icon'=>'globe', 'url'=>$this->createUrl('goods/index'),'linkOptions'=>array('target'=>'main'),'active'=>false),
		)
	),
);
?>