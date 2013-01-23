<?php

// application parameters
return array(
	// this for taobao open api
    'taoapp'=>array(
        'appSecret' => 'd6db526928e40be4e5f88e9ac281b366',
        'tbapicfg'	=> array(
            'v'				=> '2.0',
            'app_key'		=> '12201876',
            'format'		=> 'json',
            'sign_method'	=> 'HmacMD5',
            'page_size'		=> 39,
            'nick'			=> 'miyifun',
            'timestamp'		=> time(),
        ),
     ),
	'defaultkw' => '减肥',
	'salt' => 'miyifun',
	'fuzhuangkw' =>$fuzhuangkeyword,
	'tmallurl' =>'http://s.click.taobao.com/t_9?p=mm_16992741_0_0&l=http%3A%2F%2Fwww.tmall.com%2F',
	// this is used in contact page
	'adminEmail' => 'smarteng@qq.com',
);