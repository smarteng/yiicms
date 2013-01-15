-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 01 月 15 日 18:23
-- 服务器版本: 5.0.51
-- PHP 版本: 5.3.20

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `6kzz`
--

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_articles`
--

CREATE TABLE IF NOT EXISTS `zzdb_articles` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `channelid` int(10) unsigned NOT NULL default '0',
  `type` tinyint(1) NOT NULL,
  `cate` int(10) unsigned NOT NULL default '0',
  `hits` int(10) unsigned NOT NULL default '0',
  `posttime` int(10) unsigned NOT NULL default '0',
  `picid` int(10) unsigned NOT NULL default '0',
  `picpath` varchar(45) NOT NULL default '',
  `alias` varchar(255) NOT NULL default '',
  `title` varchar(255) NOT NULL default '',
  `content` mediumtext NOT NULL,
  `tag` varchar(50) NOT NULL,
  `seotitle` varchar(255) NOT NULL default '',
  `metakeywords` varchar(255) NOT NULL default '',
  `metadesc` varchar(255) NOT NULL default '',
  `langid` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `channelid` (`channelid`),
  KEY `posttime` (`posttime`),
  KEY `cate` (`cate`),
  KEY `type` (`type`),
  KEY `type_2` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `zzdb_articles`
--

INSERT INTO `zzdb_articles` (`id`, `channelid`, `type`, `cate`, `hits`, `posttime`, `picid`, `picpath`, `alias`, `title`, `content`, `tag`, `seotitle`, `metakeywords`, `metadesc`, `langid`) VALUES
(6, 5, 0, 0, 1, 1303355080, 0, '', '', '6KZZ快站更新日志，请各用户及时关注更新。', '<p>6KZZ快站更新日志：</p>\r\n<p><a target="_blank" href="http://www.6kbbs.net/view-976.html">http://www.6kbbs.net/view-976.html</a></p>', '', '', '', '', 1),
(7, 5, 0, 0, 0, 1303354954, 0, '', '', '几大步骤，教你制作6KZZ快站模板。', '对于初学者，我们推荐从修改官方的默认模板入手。<br />\r\n<br />\r\n1、打开template文件夹，可以看到6kzz文件夹，这个就是系统默认模板了。在同个目录中，复制6kzz文件夹，粘贴并重命名文件夹，这里我们举例命名为：newstyle。<br />\r\n其实完成了该步骤，系统已经可以检测到新的模板了。不过为了更加个性化自己的模板，还是继续进行下面的步骤吧。<br />\r\n<br />\r\n2、打开刚才的newstyle文件夹，编辑config.xml文件，<br />\r\n修改“&lt;name&gt;6KZZ默认&lt;/name&gt;”为“&lt;name&gt;我的模板名称&lt;/name&gt;”，<br />\r\n修改“&lt;author&gt;zym&lt;/author&gt;”为“&lt;author&gt;我的名字&lt;/author&gt;”。<br />\r\n经过这么修改，整个newstyle模板就属于您的啦。呵呵。<br />\r\n<br />\r\n3、登陆系统后台，进入“网站管理”-&gt;“网站模板”，在模板列表中可以看到您建立的模板了，选择“启用模板”，并选择相应语言的语言包，点击“提交”即可。<br />\r\n<br />\r\n4、访问网站，则可以浏览模板的效果。请注意网站的语言环境，“6KZZ快站”支持在不同语言环境下使用不同的模板。你可能发现网站的样式并没有任何改变，那些进行下面的步骤。<br />\r\n<br />\r\n5、修改global.css样式表，你需要熟悉css了。通过css可以对颜色、布局等进行修改。<br />\r\n<br />\r\n6、必要时请修改newstyle/images文件夹中的图片。<br />\r\n<br />\r\n7、如果对网站中的布局、位置等需要做较大的调整，可以修改newstyle/*.htm 文件。修改时候请注意heredoc的写法哦。每进行一点修改，都可以立即刷新网站，浏览修改之后的样式。<br />\r\n如果您对某些*.htm文件不进行修改，则可以删除。系统将会默认使用6kzz默认模板下面的*.htm文件。', '', '', '', '', 1),
(8, 5, 0, 0, 0, 1303354924, 0, '', '', '我如何在官网上面发布免费/收费模板？', '1、模板包必须带有以下文件：<br />\r\n<ul><li>config.xml&nbsp;&nbsp;（配置模板名称、作者信息）</li>\r\n<li>preview.gif&nbsp;&nbsp;（模板预览图片）</li>\r\n<li>language/*.*&nbsp;&nbsp;（语言包）</li>\r\n<li>global.css （样式表）</li>\r\n<li>css.php</li>\r\n<li>素材 （Banner源文件，以便用户修改）</li>\r\n<li>截图 （首页、产品列表、内容页三张100%比例的图片）</li>\r\n</ul>\r\n<br />\r\n2、对以上的模板文件打包后，发送至Email： <a href="mailto:webmaster@6kzz.com">webmaster@6kzz.com</a> ， 或者 在线联系QQ：70767766<br />\r\n<br />\r\n3、官方会对您的模板包进行测试和审核，通过后则可以放置于官方网站进行下载或者出售。', '', '', '', '', 1),
(9, 5, 0, 0, 1, 1303355136, 0, '', '', '如何下载并使用6KZZ快站免费模板？', '如何下载使用免费模板？<br />\r\n<br />\r\n1、从<a href="http://www.6kzz.com/" target="_blank">www.6kzz.com</a>浏览并下载适合您网站的免费模板（例如 blue.rar）。<br />\r\n<br />\r\n2、解压下载到的压缩包，把解压出来的文件夹（例如 blue）上传到6KZZ快站的template目录中。（目录结构：6kzz快站程序目录/template/blue/*.*）<br />\r\n<br />\r\n3、登陆系统后台，选择您要修改的语言环境。然后进入“网站管理”-&gt;“网站模板”，在模板列表中可以看到刚才上传的blue模板，选择“启用模\r\n板”，并选择相应语言的语言包，点击“提交”即可以。（模板语言包是由开发模板的作者提供，一般情况下在下载的模板包中已经带有语言包。）<br />\r\n<br />\r\n4、新模板可能需要您更换网站的LOGO、Banner广告，以搭配模板的风格。（LOGO、Banner广告的素材，在下载的模板包中一般都带有。该步骤可以跳过，不过会影响模板的效果。）<br />\r\n<br />\r\n5、访问网站，则可以浏览新模板的效果。请注意网站的语言环境，“6KZZ快站”支持在不同语言环境下使用不同的模板。', '', '', '6KZZ模板,6KZZ快站模板', '', 1),
(10, 5, 0, 0, 0, 1303354846, 0, '', '', '我能够免费使用6KZZ快站程序吗？', '<strong>问：我没有获得授权，能够免费使用6KZZ快站程序吗？</strong><br />\r\n答：可以的。您可以免费使用6KZZ快站程序搭建自己的网站。<br />\r\n前提是您必须遵守License的规定：<a href="http://www.6kzz.com/zz/license.php" target="_blank">http://www.6kzz.com/zz/license.php</a><br />\r\n如果您需要进行以下其中一项或者多项的行为，则需要支付企业版授权费用：<br />\r\n1、修改6KZZ版权信息；<br />\r\n2、开通全功能版本；<br />\r\n3、使用6KZZ快站程序为其他企业搭建网站并从中获利。<br />\r\n<br />\r\n是否获得授权，可以通过6KZZ官网的“授权查询”进行查询：<a href="http://www.6kzz.com/zz/copyright.php" target="_blank">http://www.6kzz.com/zz/copyright.php</a>', '', '', '6KZZ授权', '', 1),
(11, 5, 0, 0, 2, 1303355114, 0, '', '', '如何下载/安装6KZZ快站程序？', '1、“6KZZ快站”是基于PHP+MySQL开发的，所以您必须先拥有一个支持PHP+MySQL的主机。（<a href="http://www.6kzz.com/zz/service.php" target="_blank">推荐使用高度兼容“6KZZ快站”的国外免备案PHP+MySQL主机</a>）<br />\r\n<br />\r\n2、从<a href="http://www.6kzz.com/" target="_blank">www.6kzz.com</a>下载最新版本的“6KZZ快站”程序。解压后上传到您的主机。<br />\r\n<br />\r\n3、访问上传好的“6KZZ快站”程序，系统自动引导到安装界面。根据界面提示，配置并填写完整数据库参数。<br />\r\n（数据库用户名、密码、表名等，在购买主机的时候会提供）<br />\r\n<br />\r\n4、按照安装步骤进行，即可成功安装“6KZZ快站”。<br />\r\n<br />\r\n5、进入系统后台管理。修改站点名称、LOGO、栏目、内容等；也可以进行风格模板管理，打造一个个性化的企业网站。', '', '', '', '', 1),
(12, 5, 0, 0, 1, 1303355040, 0, '', '', '“6KZZ快站”是什么程序？有什么优点？', '<a target="_blank" href="http://www.6kzz.com">“6KZZ快站”是一个基于PHP + MySQL的开源企业快速建站程序(企业网站源码)。</a><br />\r\n<br />\r\n“6KZZ快站”一改过去传统的企业建站方式，不需企业编写任何程序或网页，<br />\r\n只需要登陆管理后台，即可任意编辑网站的栏目、内容，以及进行网站样式的管理，短时间内即可生成企业个性化的精美网站。<br />\r\n<br />\r\n选择“6KZZ快站”的理由：<br />\r\n<strong>一、大方美观的模板</strong><br />\r\n6KZZ快站有优秀的美工团队的支持，提供众多大方美观的模板下载。您也可以定制自己喜欢的模板。<br />\r\n<br />\r\n<strong>二、多国语言支持</strong><br />\r\n您可以通过后台启用网站的多语言功能，让您的企业形象全球化，让来自不同国家的访客都能够方便的了解您的企业。<br />\r\n<br />\r\n<strong>三、极快的访问速度</strong><br />\r\n6KZZ快站程序采用PHP+MySQL架构，并采用缓存机制、Gzip压缩等等，使程序的执行效果更高、速度极快。<br />\r\n<br />\r\n<strong>四、强大的负载能力</strong><br />\r\n6KZZ快站采用数据缓存、最少化数据库查询的设计，使得程序在繁忙的服务器环境下仍然快速稳定运行。<br />\r\n<br />\r\n<strong>五、简洁的程序代码</strong><br />\r\n6KZZ快站一直保持着代码简洁的优点。代码简洁易读，容易进行二次开发、定制属于自己的功能。<br />\r\n<br />\r\n<strong>六、实用、完善的功能</strong><br />\r\n不仅追求简洁的代码，也追求实用完善的功能。企业网站需要的新闻模块、产品模块、页面模块、留言模块等，应有尽有。', '', '', '', '', 1),
(14, 0, 0, 1, 0, 0, 0, '', '', '阿里时间段了附件', '阿萨德发链接爱死了的减肥啦加水电费阿斯蒂芬', '', '', '', '', 0),
(15, 0, 0, 1, 0, 0, 0, '', '', '垃圾撒了的房间阿斯蒂芬', '阿斯蒂芬啊撒了的房间拉丝机地方了嬶尖斯蒂芬', '', '', '', '', 0),
(16, 0, 0, 1, 0, 1357894806, 0, '', '', '在之前的代码中使用了CDbExpression', '<p></p><p class="cn" id="cn932" style="margin: 0.6em 0px 1em; padding: 0px 0px 0.1em; position: relative; font-family: Verdana, sans-serif; font-size: 11.80555534362793px; line-height: 12.499999046325684px;">在这里我们重载了CActiveRecord::beforeValidate()方法。这是CActiveRecord提供的众多可以定制其工作流的事件之一。作为一个小提示，如果在AR类save()被调用时不提供一个false参数，验证将被触发。这一过程将执行所有在AR类中rules()里定义的验证细节。一共有2个方法允许我们将适当的逻辑置放在验证开始之前和验证结束之后，这个2方法为：beforeValidate()和afterValidate()。在这个部分，我们决定在验证执行前对我们审查表后的公共字段进行直接设置。</p><div id="b932" class="comment-indicator" style="margin: 0px; padding: 0px; position: absolute; width: 20px; z-index: 999; text-align: center; left: -44px; top: 0px; height: 71px;"><span style="position: absolute; top: -10px; left: -10px; width: 25px; height: 25px;"></span></div><p></p><p class="cn" id="cn933" style="margin: 0.6em 0px 1em; padding: 0px 0px 0.1em; position: relative; font-family: Verdana, sans-serif; font-size: 11.80555534362793px; line-height: 12.499999046325684px;">你可能注意到在之前的代码中使用了CDbExpression来设置新建和更新时间的值为Unix时间戳。自1.0.2版开始，一个属性的值可以设置为CDbExpression类型，在所属记录被保存前。在保存过程中所需的值将由运行数据库表达式获得。</p><p style="text-align: right;"><strong><em>asdf asdf sdf&nbsp;</em></strong></p>', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_attachments`
--

CREATE TABLE IF NOT EXISTS `zzdb_attachments` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `folderid` int(10) unsigned NOT NULL default '1',
  `filename` varchar(255) NOT NULL default '',
  `filesize` int(10) unsigned NOT NULL default '0',
  `filepath` varchar(100) NOT NULL default '',
  `uploadtime` int(10) unsigned NOT NULL default '0',
  `type` int(10) unsigned NOT NULL default '0',
  `filetype` varchar(45) NOT NULL default '',
  `imgwidth` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `folderid` (`folderid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=36 ;

--
-- 转存表中的数据 `zzdb_attachments`
--

INSERT INTO `zzdb_attachments` (`id`, `folderid`, `filename`, `filesize`, `filepath`, `uploadtime`, `type`, `filetype`, `imgwidth`) VALUES
(1, 1, '6kzz-logo.gif', 3976, '201103/1_1301037971_3787.gif', 1301037971, 1, 'application/octet-stream', 234),
(2, 1, '6kzz-banner1.jpg', 79857, '201103/1_1301037973_4418.jpg', 1301037973, 1, 'application/octet-stream', 956),
(3, 1, '6kzz-banner2.jpg', 56141, '201103/1_1301037975_9640.jpg', 1301037975, 1, 'application/octet-stream', 956),
(6, 3, '戴尔（DELL）Inspiron 14V.jpg', 8185, '201103/1_1301039854_5610.jpg', 1301039854, 1, 'application/octet-stream', 160),
(7, 3, '宏碁（acer）AS4738G-482G32Mnkk .jpg', 6383, '201103/1_1301039854_6058.jpg', 1301039854, 1, 'application/octet-stream', 160),
(8, 3, '华硕（ASUS）A40EI46JP-SL.jpg', 9232, '201103/1_1301039854_1215.jpg', 1301039854, 1, 'application/octet-stream', 160),
(9, 3, '华硕（ASUS）N82EI48JV-SL.jpg', 7058, '201103/1_1301039854_5954.jpg', 1301039854, 1, 'application/octet-stream', 160),
(10, 3, '惠普（Compaq）CQ326.jpg', 7503, '201103/1_1301039854_7811.jpg', 1301039854, 1, 'application/octet-stream', 160),
(11, 3, '惠普（hp）2230S（WC577PA）.jpg', 8669, '201103/1_1301039854_3411.jpg', 1301039854, 1, 'application/octet-stream', 160),
(12, 3, '惠普（hp）HP G4-1014TX .jpg', 10778, '201103/1_1301039854_9222.jpg', 1301039854, 1, 'application/octet-stream', 160),
(13, 3, '联想（Lenovo） G470AH-ITH.jpg', 4437, '201103/1_1301039854_4970.jpg', 1301039854, 1, 'application/octet-stream', 160),
(14, 3, '联想（Lenovo）G460ALN.jpg', 8885, '201103/1_1301039854_7321.jpg', 1301039855, 1, 'application/octet-stream', 160),
(25, 3, 'dell_6aa32101-99a7-477c-a18d-be18ee641dc9.jpg', 92607, '201103/1_1301045310_2119.jpg', 1301045310, 1, 'application/octet-stream', 800),
(26, 3, 'dell_9ef98a68-88c7-4d86-8c79-a9e991855c74.jpg', 55702, '201103/1_1301045310_9094.jpg', 1301045310, 1, 'application/octet-stream', 800),
(27, 3, 'dell_322344a7-9fa7-429d-979c-0d31b8916208.jpg', 78111, '201103/1_1301045310_6742.jpg', 1301045310, 1, 'application/octet-stream', 800),
(28, 3, 'dell_ce69f979-5875-40cc-8fee-3f384aee1da3.jpg', 83295, '201103/1_1301045310_8388.jpg', 1301045310, 1, 'application/octet-stream', 800),
(29, 1, 'img_intro.gif', 6228, '201104/2_1302518056_2160.gif', 1302518056, 1, 'application/octet-stream', 74),
(30, 1, '48797271d.jpg', 35462, '201212/1356511993_08_6864.jpg', 1356511993, 1, 'application/octet-stream', 480),
(31, 1, '1.jpg', 45808, '201301/1358144919_61_3300.jpg', 1358144919, 1, 'application/octet-stream', 426),
(32, 1, '11.jpg', 72845, '201301/1358144920_05_9622.jpg', 1358144920, 1, 'application/octet-stream', 505),
(33, 1, '36697949d.jpg', 46722, '201301/1358144920_22_3504.jpg', 1358144920, 1, 'application/octet-stream', 428),
(34, 1, '42961323d.jpg', 57426, '201301/1358144920_35_4345.jpg', 1358144920, 1, 'application/octet-stream', 480),
(35, 3, '55250800d.jpg', 22859, '201301/1358157386_03_8037.jpg', 1358157386, 1, 'application/octet-stream', 300);

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_cate`
--

CREATE TABLE IF NOT EXISTS `zzdb_cate` (
  `sid` tinyint(3) unsigned NOT NULL auto_increment,
  `sortname` varchar(255) NOT NULL default '',
  `alias` varchar(200) NOT NULL default '',
  `taxis` smallint(4) unsigned NOT NULL default '0',
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY  (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zzdb_cate`
--

INSERT INTO `zzdb_cate` (`sid`, `sortname`, `alias`, `taxis`, `keywords`, `description`) VALUES
(1, '文章分类', '', 0, '分类1', '分类1'),
(2, '文章分类2', '', 0, '分类2', '分类2');

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_channels`
--

CREATE TABLE IF NOT EXISTS `zzdb_channels` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `channeltype` tinyint(1) unsigned NOT NULL default '0',
  `systemtype` tinyint(1) unsigned NOT NULL default '0',
  `ordernum` int(10) unsigned NOT NULL default '0',
  `ishidden` tinyint(1) unsigned NOT NULL default '0',
  `positions` varchar(45) NOT NULL default '|1|',
  `alias` varchar(45) NOT NULL default '',
  `title` varchar(45) NOT NULL default '',
  `content` mediumtext NOT NULL,
  `seotitle` varchar(255) NOT NULL default '',
  `metakeywords` varchar(255) NOT NULL default '',
  `metadesc` varchar(255) NOT NULL default '',
  `link` varchar(255) NOT NULL default '',
  `target` tinyint(3) unsigned NOT NULL default '0',
  `langid` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`),
  KEY `alias` (`alias`),
  KEY `langid` (`langid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `zzdb_channels`
--

INSERT INTO `zzdb_channels` (`id`, `pid`, `channeltype`, `systemtype`, `ordernum`, `ishidden`, `positions`, `alias`, `title`, `content`, `seotitle`, `metakeywords`, `metadesc`, `link`, `target`, `langid`) VALUES
(1, 0, 3, 1, 3, 0, '|1|2|', '', '产品展示', ' ', '', '', '', '', 0, 1),
(2, 0, 1, 2, 4, 0, '|1|2|', '', '联系我们', ' ', '', '', '', '', 0, 1),
(3, 0, 5, 3, 6, 1, '|1|2|', '', '客户留言', ' ', '', '', '', '', 0, 1),
(4, 0, 4, 0, 1, 1, '|1|', '', '网站首页', '', '', '', '', 'aasdfas.php', 1, 1),
(5, 0, 2, 0, 2, 0, '|1|2|', '', '公司动态', '', '', '', '', '', 0, 1),
(6, 0, 1, 0, 5, 0, '|1|2|', '', '关于我们', '<span style="font-weight: bold;"><img src="attachment.php?id=1"><br>“6KZZ快站”</span>是一个基于PHP + MySQL的开源企业快速建站程序。<br><br>“6KZZ快站”一改过去传统的企业建站方式，不需企业编写任何程序或网页，只需要登陆管理后台，即可任意编辑网站的栏目、内容，以及进行网站样式的管理，短时间内即可生成企业个性化的精美网站。<br><br><span style="font-weight: bold; color: rgb(255, 102, 102);">选择“6KZZ快站”的理由：</span><br><span style="font-weight: bold;">一、大方美观的模板</span><br>6KZZ快站有优秀的美工团队的支持，提供众多大方美观的模板下载。您也可以定制自己喜欢的模板。<br><br><span style="font-weight: bold;">二、多国语言支持</span><br>您可以通过后台启用网站的多语言功能，让您的企业形象全球化，让来自不同国家的访客都能够方便的了解您的企业。<br><br><span style="font-weight: bold;">三、极快的访问速度</span><br>6KZZ快站程序采用PHP+MySQL架构，并采用缓存机制、Gzip压缩等等，使程序的执行效果更高、速度极快。<br><br><span style="font-weight: bold;">四、强大的负载能力</span><br>6KZZ快站采用数据缓存、最少化数据库查询的设计，使得程序在繁忙的服务器环境下仍然快速稳定运行。<br><br><span style="font-weight: bold;">五、简洁的程序代码</span><br>6KZZ快站一直保持着代码简洁的优点。代码简洁易读，容易进行二次开发、定制属于自己的功能。<br><br><span style="font-weight: bold;">六、实用、完善的功能</span><br>不仅追求简洁的代码，也追求实用完善的功能。企业网站需要的新闻模块、产品模块、页面模块、留言模块等，应有尽有。<br><br>', '', '', '', '', 0, 1),
(7, 6, 1, 0, 7, 0, '', '', '公司文化', '请在这里添加公司文化的内容。<br><br><span style="font-weight: bold;">如何自行安装“6KZZ快站”？</span><br><br>1、“6KZZ快站”是基于PHP+MySQL开发的，所以您必须先拥有一个支持PHP+MySQL的主机。（推荐使用高度兼容“6KZZ快站”的国外免备案PHP+MySQL主机）<br><br>2、从www.6kzz.com下载最新版本的“6KZZ快站”程序。解压后上传到您的主机。<br><br>3、访问上传好的“6KZZ快站”程序，系统自动引导到安装界面。根据界面提示，配置并填写完整数据库参数。（数据库用户名、密码、表名等，在购买主机的时候会提供）<br><br>4、按照安装步骤进行，即可成功安装“6KZZ快站”。<br><br>5、进入系统后台管理。修改站点名称、LOGO、栏目、内容等；也可以进行模板管理，打造一个个性化的企业网站。<br><br>', '', '', '', '', 0, 1),
(8, 6, 1, 0, 8, 0, '', '', '公司理念', '<span style="font-weight: bold;">如何下载使用免费模板？</span><br><br>1、从www.6kzz.com浏览并下载适合您网站的免费模板（例如 blue.rar）。<br><br>2、解压下载到的压缩包，把解压出来的文件夹（例如 blue）上传到6KZZ快站的template目录中。（目录结构：6kzz快站程序目录/template/blue/*.*）<br><br>3、登陆系统后台，选择您要修改的语言环境。然后进入“网站管理”-&gt;“网站模板”，在模板列表中可以看到刚才上传的blue模板，选择“启用模板”，并选择相应语言的语言包，点击“提交”即可以。（模板语言包是由开发模板的作者提供，一般情况下在下载的模板包中已经带有语言包。）<br><br>4、新模板可能需要您更换网站的LOGO、Banner广告，以搭配模板的风格。（LOGO、Banner广告的素材，在下载的模板包中一般都带有。该步骤可以跳过，不过会影响模板的效果。）<br><br>5、访问网站，则可以浏览新模板的效果。请注意网站的语言环境，“6KZZ快站”支持在不同语言环境下使用不同的模板。<br><br><br>', '', '', '', '', 0, 1),
(12, 0, 1, 0, 12, 0, '|2|', '', 'asdfasdf', '', '', '', '', '', 0, 1),
(11, 0, 4, 0, 11, 0, '', '', '哇哈哈', '', '', '', '', 'indexc.php', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_contact`
--

CREATE TABLE IF NOT EXISTS `zzdb_contact` (
  `contact` varchar(45) NOT NULL default '',
  `department` varchar(45) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `phone` varchar(45) NOT NULL default '',
  `fax` varchar(45) NOT NULL default '',
  `qq` varchar(45) NOT NULL default '',
  `aliww` varchar(100) NOT NULL default '',
  `msn` varchar(100) NOT NULL default '',
  `skype` varchar(100) NOT NULL default '',
  `yahoo` varchar(100) NOT NULL default '',
  `address` varchar(255) NOT NULL default '',
  `zipcode` varchar(20) NOT NULL default '',
  `company` varchar(100) NOT NULL default '',
  `extradesc` varchar(1000) NOT NULL default '',
  `langid` int(10) unsigned NOT NULL default '0',
  KEY `langid` (`langid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzdb_contact`
--

INSERT INTO `zzdb_contact` (`contact`, `department`, `email`, `phone`, `fax`, `qq`, `aliww`, `msn`, `skype`, `yahoo`, `address`, `zipcode`, `company`, `extradesc`, `langid`) VALUES
('曾勇民', '', 'zymzeng@qq.com', '13538288822', '', '70767766', 'zymzeng@163.com', 'msn@6kzz.com', '', '', '广东省深圳市福田区', '518000', 'www.6kzz.com', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_favs`
--

CREATE TABLE IF NOT EXISTS `zzdb_favs` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `proid` int(10) unsigned NOT NULL default '0',
  `memberid` int(10) unsigned NOT NULL default '0',
  `addtime` int(10) unsigned NOT NULL default '0',
  `langid` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `memberid` (`memberid`),
  KEY `langid` (`langid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_folders`
--

CREATE TABLE IF NOT EXISTS `zzdb_folders` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `coverid` int(10) unsigned NOT NULL default '0',
  `updatetime` int(10) unsigned NOT NULL default '0',
  `filenum` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `zzdb_folders`
--

INSERT INTO `zzdb_folders` (`id`, `title`, `coverid`, `updatetime`, `filenum`) VALUES
(1, '默认文件夹', 0, 0, 0),
(3, '产品图片', 0, 1301089763, 0);

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_goodshops`
--

CREATE TABLE IF NOT EXISTS `zzdb_goodshops` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `tags` text NOT NULL,
  `nick` varchar(250) NOT NULL COMMENT '卖家昵称',
  `url` varchar(250) NOT NULL,
  `description` text NOT NULL COMMENT '店铺描述',
  `share_count` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `share_count` (`share_count`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `zzdb_goodshops`
--

INSERT INTO `zzdb_goodshops` (`id`, `name`, `logo`, `tags`, `nick`, `url`, `description`, `share_count`, `created`, `updated`) VALUES
(1, '膜膜皇后', '阿萨德法师法', '阿萨德了附件拉丝机地方了是', '膜膜皇后', '阿萨德发生大幅', '阿斯蒂芬阿斯蒂芬阿斯蒂芬', 275, '2013-01-10 00:00:00', '2013-01-10 00:00:00'),
(2, '膜膜皇后', '阿萨德法师法', '阿萨德了附件拉丝机地方了是', '膜膜皇后', '阿萨德发生大幅', '阿斯蒂芬阿斯蒂芬阿斯蒂芬', 25698, '2013-01-10 00:00:00', '2013-01-10 00:00:00'),
(3, '膜膜皇后', '阿萨德法师法', '阿萨德了附件拉丝机地方了是', '膜膜皇后', '阿萨德发生大幅', '阿斯蒂芬阿斯蒂芬阿斯蒂芬', 23828, '2013-01-10 00:00:00', '2013-01-10 00:00:00'),
(4, '膜膜皇后', '阿萨德法师法', '阿萨德了附件拉丝机地方了是', '膜膜皇后', '阿萨德发生大幅', '阿斯蒂芬阿斯蒂芬阿斯蒂芬', 222, '2013-01-10 00:00:00', '2013-01-10 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_langs`
--

CREATE TABLE IF NOT EXISTS `zzdb_langs` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(32) NOT NULL default '',
  `directory` varchar(32) NOT NULL default '',
  `ordernum` int(10) unsigned NOT NULL default '0',
  `isdefault` tinyint(1) unsigned NOT NULL default '0',
  `ishidden` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  USING BTREE (`id`),
  KEY `ordernum` (`ordernum`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `zzdb_langs`
--

INSERT INTO `zzdb_langs` (`id`, `name`, `directory`, `ordernum`, `isdefault`, `ishidden`) VALUES
(1, '简体中文', 'cn', 1, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_links`
--

CREATE TABLE IF NOT EXISTS `zzdb_links` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `url` varchar(255) NOT NULL default '',
  `content` varchar(255) NOT NULL default '',
  `logo` varchar(255) NOT NULL default '',
  `ordernum` int(10) unsigned NOT NULL default '0',
  `langid` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `ordernum` (`ordernum`),
  KEY `langid` (`langid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_memberfield`
--

CREATE TABLE IF NOT EXISTS `zzdb_memberfield` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `memberid` int(10) unsigned NOT NULL default '0',
  `code` varchar(64) NOT NULL default '',
  `createtime` int(10) unsigned NOT NULL default '0',
  `type` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `memberid` USING BTREE (`memberid`),
  KEY `code` USING BTREE (`code`),
  KEY `type` USING BTREE (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_members`
--

CREATE TABLE IF NOT EXISTS `zzdb_members` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `groupid` int(10) unsigned NOT NULL default '1',
  `membername` varchar(45) NOT NULL default '',
  `memberpass` varchar(45) NOT NULL default '',
  `email` varchar(80) NOT NULL default '',
  `signuptime` int(10) unsigned NOT NULL default '0',
  `signupip` varchar(45) NOT NULL default '',
  `logintime` int(10) unsigned NOT NULL default '0',
  `lastlogintime` int(10) unsigned NOT NULL default '0',
  `realname` varchar(20) NOT NULL default '',
  `sex` tinyint(1) unsigned NOT NULL default '0',
  `birthday` date NOT NULL default '0000-00-00',
  `qq` varchar(45) NOT NULL default '',
  `msn` varchar(45) NOT NULL default '',
  `phone` varchar(45) NOT NULL default '',
  `state` tinyint(1) unsigned NOT NULL default '0',
  `address` varchar(255) NOT NULL default '',
  `zipcode` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `membername` USING BTREE (`membername`),
  KEY `email` USING BTREE (`email`),
  KEY `signupip` USING BTREE (`signupip`,`signuptime`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `zzdb_members`
--

INSERT INTO `zzdb_members` (`id`, `groupid`, `membername`, `memberpass`, `email`, `signuptime`, `signupip`, `logintime`, `lastlogintime`, `realname`, `sex`, `birthday`, `qq`, `msn`, `phone`, `state`, `address`, `zipcode`) VALUES
(1, 1, 'admin', '789852', 'admin@qq.com', 1346293252, '127.0.0.1', 0, 0, '', 0, '0000-00-00', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_msgs`
--

CREATE TABLE IF NOT EXISTS `zzdb_msgs` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `contact1` varchar(255) NOT NULL default '',
  `contact2` varchar(255) NOT NULL default '',
  `contact3` varchar(255) NOT NULL default '',
  `contact4` varchar(255) NOT NULL default '',
  `email` varchar(255) NOT NULL default '',
  `title` varchar(255) NOT NULL default '',
  `remark` varchar(5000) NOT NULL default '',
  `replier` varchar(100) NOT NULL default '',
  `reply` varchar(5000) NOT NULL default '',
  `posttime` int(10) unsigned NOT NULL default '0',
  `replytime` int(10) unsigned NOT NULL default '0',
  `ip` varchar(15) NOT NULL default '',
  `state` tinyint(3) unsigned NOT NULL default '0',
  `langid` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `posttime` (`posttime`),
  KEY `state` (`state`),
  KEY `langid` (`langid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `zzdb_msgs`
--

INSERT INTO `zzdb_msgs` (`id`, `name`, `contact1`, `contact2`, `contact3`, `contact4`, `email`, `title`, `remark`, `replier`, `reply`, `posttime`, `replytime`, `ip`, `state`, `langid`) VALUES
(1, '6k粉丝', '', '', '', '', '6k@qq.com', '我能够免费使用6KZZ快站程序吗？...', '你好，我能够免费使用6KZZ快站程序吗？', 'zym', '你好，个人是可以免费使用，请保留版权信息。<br>详细的协定，请见<a target="" title="" href="http://www.6kzz.com/zz/license.php">License</a><br>', 1301043719, 1301043866, '127.0.0.1', 1, 1),
(2, '疑问者', '', '', '', '', 'y@q.com', '如何下载使用免费模板？', '免费模板下载完成之后如何使用啊？', 'zym', '1、从www.6kzz.com浏览并下载适合您网站的免费模板（例如 blue.rar）。<br>2、解压下载到的压缩包，把解压出来的文件夹（例如 blue）上传到6KZZ快站的template目录中。（目录结构：6kzz快站程序目录/template/blue/*.*）<br>3、登陆系统后台，选择您要修改的语言环境。然后进入“网站管理”-&gt;“网站模板”，在模板列表中可以看到刚才上传的blue模板，选择“启用模板”，并选择相应语言的语言包，点击“提交”即可以。（模板语言包是由开发模板的作者提供，一般情况下在下载的模板包中已经带有语言包。）<br>4、新模板可能需要您更换网站的LOGO、Banner广告，以搭配模板的风格。（LOGO、Banner广告的素材，在下载的模板包中一般都带有。该步骤可以跳过，不过会影响模板的效果。）<br>5、访问网站，则可以浏览新模板的效果。请注意网站的语言环境，“6KZZ快站”支持在不同语言环境下使用不同的模板。<br>', 1301043758, 1301043975, '127.0.0.1', 1, 1),
(3, '美工', '', '', '', '', 'zym@qq.com', '我如何在官网上面发布免费/收费模...', '我自己制作的模板，能不能放到官网上面？', 'zym', '可以的！模板文件打包后，发送至Email： webmaster@6kzz.com ， 或者 在线联系QQ：70767766<br>官方会对您的模板包进行测试和审核，通过后则可以放置于官方网站进行下载或者出售。<br>', 1301043790, 1301043932, '127.0.0.1', 1, 1),
(4, 'asdfasdf', 'asdfasfd', '', '', '', 'asdf@qq.com', 'asdf', 'asdfasdfsafd', '', '', 1346292455, 0, '127.0.0.1', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_orderdetails`
--

CREATE TABLE IF NOT EXISTS `zzdb_orderdetails` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `cartid` int(10) unsigned NOT NULL default '0',
  `orderid` int(10) unsigned NOT NULL default '0',
  `proid` int(10) unsigned NOT NULL default '0',
  `proname` varchar(255) NOT NULL default '',
  `pronum` int(10) unsigned NOT NULL default '0',
  `price` float NOT NULL default '0',
  `picid` int(10) unsigned NOT NULL default '0',
  `picpath` varchar(45) NOT NULL default '',
  `addtime` int(10) unsigned NOT NULL default '0',
  `langid` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `proid` (`proid`),
  KEY `orderid` (`orderid`),
  KEY `cartid` (`cartid`),
  KEY `langid` (`langid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zzdb_orderdetails`
--

INSERT INTO `zzdb_orderdetails` (`id`, `cartid`, `orderid`, `proid`, `proname`, `pronum`, `price`, `picid`, `picpath`, `addtime`, `langid`) VALUES
(2, 2, 0, 9, '惠普（hp）HP G4-1014TX', 1, 4500, 12, '201103/1_1301039854_9222.jpg', 1356682326, 1);

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_orders`
--

CREATE TABLE IF NOT EXISTS `zzdb_orders` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `memberid` int(10) unsigned NOT NULL default '0',
  `ordernum` varchar(45) NOT NULL default '',
  `name` varchar(45) NOT NULL default '',
  `phonenum` varchar(45) NOT NULL default '',
  `email` varchar(45) NOT NULL default '',
  `address` varchar(255) NOT NULL default '',
  `zipcode` varchar(45) NOT NULL default '',
  `remark` varchar(1000) NOT NULL,
  `createtime` int(10) unsigned NOT NULL default '0',
  `state` tinyint(3) unsigned NOT NULL default '0',
  `remark2` varchar(1000) NOT NULL default '',
  `total` float NOT NULL default '0',
  `expresscharges` float NOT NULL default '0',
  `langid` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `state` (`state`),
  KEY `memberid` (`memberid`),
  KEY `langid` (`langid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_procates`
--

CREATE TABLE IF NOT EXISTS `zzdb_procates` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `ordernum` int(10) unsigned NOT NULL default '0',
  `ishidden` tinyint(1) unsigned NOT NULL default '0',
  `alias` varchar(45) NOT NULL default '',
  `title` varchar(45) NOT NULL default '',
  `seotitle` varchar(255) NOT NULL default '',
  `metakeywords` varchar(255) NOT NULL default '',
  `metadesc` varchar(255) NOT NULL default '',
  `langid` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`),
  KEY `alias` (`alias`),
  KEY `ordernum` (`ordernum`),
  KEY `langid` (`langid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `zzdb_procates`
--

INSERT INTO `zzdb_procates` (`id`, `pid`, `ordernum`, `ishidden`, `alias`, `title`, `seotitle`, `metakeywords`, `metadesc`, `langid`) VALUES
(1, 0, 1, 0, '', '系列分类', '', '', '', 1),
(2, 0, 2, 0, '', '面部保养', '', '', '', 1),
(3, 0, 3, 0, '', '身体保养', '', '', '', 1),
(4, 0, 4, 0, '', '功效分类', '', '', '', 1),
(12, 1, 12, 0, '', '玫瑰系列', '', '', '', 1),
(8, 1, 8, 0, '', '洋甘菊系列', '', '', '', 1),
(9, 1, 9, 0, '', '向日葵系列', '', '', '', 1),
(10, 1, 10, 0, '', '金盏花系列', '', '', '', 1),
(11, 1, 11, 0, '', '复方精油', '', '', '', 1),
(13, 1, 13, 0, '', '绿茶系列', '', '', '', 1),
(14, 1, 14, 0, '', '人参系列', '', '', '', 1),
(15, 1, 15, 0, '', '荷荷巴系列', '', '', '', 1),
(16, 1, 16, 0, '', '薰衣草系列', '', '', '', 1),
(17, 1, 17, 0, '', '杏仁系列', '', '', '', 1),
(18, 1, 18, 0, '', '乳木果系列', '', '', '', 1),
(19, 1, 19, 0, '', '洋甘菊系列', '', '', '', 1),
(20, 2, 20, 0, '', '洁面', '', '', '', 1),
(21, 2, 21, 0, '', '去角质', '', '', '', 1),
(22, 2, 22, 0, '', '爽肤', '', '', '', 1),
(23, 3, 23, 0, '', '发丝', '', '', '', 1),
(24, 3, 24, 0, '', '颈部', '', '', '', 1),
(25, 3, 25, 0, '', '手部', '', '', '', 1),
(26, 4, 26, 0, '', '美白滋润', '', '', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_products`
--

CREATE TABLE IF NOT EXISTS `zzdb_products` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `cid` int(10) unsigned NOT NULL default '0',
  `type` tinyint(3) unsigned NOT NULL default '0',
  `hits` int(10) unsigned NOT NULL default '0',
  `posttime` int(10) unsigned NOT NULL default '0',
  `alias` varchar(255) NOT NULL default '',
  `name` varchar(100) NOT NULL default '',
  `serialnum` varchar(45) NOT NULL default '',
  `seotitle` varchar(255) NOT NULL default '',
  `metakeywords` varchar(255) NOT NULL default '',
  `metadesc` varchar(255) NOT NULL default '',
  `content` mediumtext NOT NULL,
  `picids` varchar(100) NOT NULL default '',
  `picpaths` varchar(255) NOT NULL default '',
  `price1` float NOT NULL default '0',
  `price2` float NOT NULL default '0',
  `store` int(10) unsigned NOT NULL default '100',
  `sold` int(10) unsigned NOT NULL default '10',
  `level` tinyint(3) unsigned NOT NULL default '3',
  `ordernum` int(10) unsigned NOT NULL default '0',
  `langid` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `alias` (`alias`),
  KEY `cid` (`cid`),
  KEY `posttime` (`posttime`),
  KEY `langid` (`langid`),
  KEY `ordernum` (`ordernum`),
  KEY `serialnum` (`serialnum`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `zzdb_products`
--

INSERT INTO `zzdb_products` (`id`, `cid`, `type`, `hits`, `posttime`, `alias`, `name`, `serialnum`, `seotitle`, `metakeywords`, `metadesc`, `content`, `picids`, `picpaths`, `price1`, `price2`, `store`, `sold`, `level`, `ordernum`, `langid`) VALUES
(11, 1, 0, 13, 1301045990, '', '惠普Compaq CQ326 13.3英寸笔记本电脑', 'Z1301045990', '', '', '', '<ul id="i-detail"><li title="惠普CQ326">商品名称：惠普CQ326</li><li>商品产地：中国大陆</li><li>商品毛重：2.66</li><li>上架时间：2010-7-6 19:47:03</li></ul>', '10	0	0	0	0', '201103/1_1301039854_7811.jpg				', 3999.99, 0, 100, 10, 3, 100, 1),
(12, 4, 1, 5, 1301409672, '', '华硕N82EI48JV-SL 14.0英寸笔记本电脑', 'Z1301409672', '', '', '', '<ul id="i-detail"><li title="华硕N82EI48JV-SL">商品名称：华硕N82EI48JV-SL</li><li>商品产地：中国大陆</li><li>商品毛重：3.72</li><li>上架时间：2011-2-23 16:46:49</li></ul>', '9	0	0	0	0', '201103/1_1301039854_5954.jpg				', 4300, 0, 100, 10, 3, 100, 1),
(13, 4, 0, 10, 1301045971, '', '华硕A40EI46JP-SL 14.0 英寸笔记本电脑', 'Z1301045971', '', '', '', '<ul id="i-detail"><li title="华硕A40EI46JP-SL">商品名称：华硕A40EI46JP-SL</li><li>商品产地：中国大陆</li><li>商品毛重：3.64</li><li>上架时间：2011-1-5 10:17:22</li></ul>', '8	0	0	0	0', '201103/1_1301039854_1215.jpg				', 3999.99, 0, 100, 10, 3, 100, 1),
(14, 3, 2, 28, 1301409665, '', '宏碁（acer）AS4738G-482G32Mnkk ', 'Z1301409665', '', '', '', '<ul id="i-detail"><li title="宏碁AS4738G-482G32Mnkk">商品名称：宏碁AS4738G-482G32Mnkk</li><li>商品产地：中国大陆</li><li>商品毛重：3.6</li><li>上架时间：2011-1-13 10:32:03</li></ul>', '7	0	0	0	0', '201103/1_1301039854_6058.jpg				', 4400, 0, 100, 10, 3, 100, 1),
(15, 2, 1, 254, 1303355488, '', '戴尔（DELL）Inspiron 14V 14英寸笔记本电脑', 'Z1301811114', '', '', '', '<ul id="i-detail"><li title="戴尔Inspiron 14V">商品名称：戴尔Inspiron 14V</li>\r\n<li>商品产地：中国大陆</li>\r\n<li>商品毛重：2.44</li>\r\n<li>上架时间：2010-12-9 10:18:24</li>\r\n</ul>\r\n<br />', '6	25	26	27	28', '201103/1_1301039854_5610.jpg	201103/1_1301045310_2119.jpg	201103/1_1301045310_9094.jpg	201103/1_1301045310_6742.jpg	201103/1_1301045310_8388.jpg', 4200, 0, 1000, 100, 4, 99, 1);

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_settings`
--

CREATE TABLE IF NOT EXISTS `zzdb_settings` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'id',
  `categoryid` tinyint(3) unsigned NOT NULL COMMENT '分类id',
  `property` varchar(30) NOT NULL default '',
  `setvalue` varchar(1000) NOT NULL default '',
  `name` varchar(50) NOT NULL COMMENT '配置名称',
  `description` varchar(100) NOT NULL COMMENT '描述',
  `set_order` tinyint(3) unsigned NOT NULL,
  `set_type` tinyint(3) unsigned NOT NULL,
  `langid` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `property` (`property`),
  KEY `langid` (`langid`),
  KEY `categoryid` (`categoryid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=93 ;

--
-- 转存表中的数据 `zzdb_settings`
--

INSERT INTO `zzdb_settings` (`id`, `categoryid`, `property`, `setvalue`, `name`, `description`, `set_order`, `set_type`, `langid`) VALUES
(1, 0, 'mailsendtype', '1', '', '', 0, 0, 0),
(2, 0, 'mailsender', 'Sender@6kzz.com', '', '', 0, 0, 0),
(3, 0, 'smtpserver', '', '', '', 0, 0, 0),
(4, 0, 'smtpport', '', '', '', 0, 0, 0),
(5, 0, 'smtpauth', '1', '', '', 0, 0, 0),
(6, 0, 'smtpsender', '', '', '', 0, 0, 0),
(7, 0, 'smtpusername', '', '', '', 0, 0, 0),
(8, 0, 'smtppassword', '', '', '', 0, 0, 0),
(9, 0, 'testreceiver', 'Receiver@6kzz.com', '', '', 0, 0, 0),
(10, 0, 'copyrightheader', ' -阿萨德', '', '', 0, 0, 0),
(11, 0, 'funmember', '1', '', '', 0, 0, 0),
(12, 0, 'funshop', '1', '', '', 0, 0, 0),
(13, 0, 'issignup', '1', '', '', 0, 0, 0),
(14, 0, 'signupfilename', 'signup.php', '', '', 0, 0, 0),
(15, 5, 'signupsecuritycode', '0', '启用注册验证码:', '注册时需要填写验证码', 0, 0, 0),
(16, 0, 'issignupverify', '0', '', '', 0, 0, 0),
(17, 0, 'signupitime', '0.01', '', '', 0, 0, 0),
(92, 0, 'templatelang', 'en.php', '', '', 0, 0, 1),
(91, 0, 'template', '6kzz', '', '', 0, 0, 1),
(21, 4, 'seotitle', '6KZZ快站，企业建站首选！', '浏览器标题(Title):', '浏览器标题(Title)，有利于SEO', 0, 0, 1),
(85, 1, 'icp', '12356', '网站备案信息代码:', '页面底部可以显示 ICP 备案信息，如果网站已备案，在此输入您的授权码，它将显示在页面底部，如果没有请留空', 0, 0, 1),
(86, 1, 'cur', '￥', '网站货币符号:', '￥、＄、€、￡等等', 0, 0, 1),
(87, 1, 'isoff', '0', '网站关闭:', '', 0, 0, 1),
(88, 1, 'offdetails', '暗示的发生', '网站关闭原因:', '网站关闭时出现的提示信息', 0, 0, 1),
(89, 1, 'counter', '阿斯蒂芬阿斯蒂芬', '网站第三方统计代码:', '页面底部可以显示第三方统计', 0, 0, 1),
(27, 2, 'timeformat', 'yyyy-mm-dd', '网站时间格式:', '使用 yyyy(yy) 表示年，mm 表示月，dd 表示天。如 yyyy-mm-dd 表示 2012-01-01', 0, 0, 1),
(28, 2, 'timeoffset', '8', '系统时差:', '当地时间与 GMT 的时差', 0, 0, 1),
(29, 2, 'humantime', '0', '人性化时间格式:', '选择“是”，网站中的时间将以“n秒前”、“n分钟前”等形式显示', 0, 0, 1),
(30, 3, 'isgzip', '0', '开启页面 Gzip 压缩:', '系统检测到服务器支持Gzip压缩', 0, 0, 1),
(31, 4, 'urlrewrite', '2', '开启伪静态:', '程序实现：一般虚拟主机则可支持\r\n服务器配置：需要服务器支持与配置Url Rewrite规则', 0, 0, 1),
(32, 4, 'metakeywords', '6KZZ快站,快速建站程序,智能建站程序,PHP建站程序', '关键字(Meta Keywords):', 'Keywords 项出现在页面头部的 Meta 标签中，有利于SEO，多个关键字间请用半角逗号 "," 隔开', 0, 0, 1),
(33, 4, 'metadescription', '6KZZ快站是一个采用 PHP+MySQL 构建的高效能的快速建站、智能建站程序。', '描述(Meta Description):', 'Description 出现在页面头部的 Meta 标签中，有利于SEO', 0, 0, 1),
(34, 4, 'headcontent', '', '其他头部信息:', '如需在 <head></head> 中添加其他的 HTML 代码，可以使用本设置，否则请留空', 0, 0, 1),
(35, 0, 'signupsecuritycode', '0', '', '', 0, 0, 1),
(36, 5, 'loginsecuritycode', '0', '启用登录验证码:', '登录时需要填写验证码', 0, 0, 1),
(37, 5, 'msgsecuritycode', '0', '启用留言验证码:', '发表留言时需要填写验证码', 0, 0, 1),
(38, 6, 'perpagepro', '12', '产品列表每页显示数量:', '请填写正确的数字', 0, 0, 1),
(39, 6, 'perpageart', '15', '文章列表每页显示数量:', '请填写正确的数字', 0, 0, 1),
(40, 6, 'perpagemsg', '10', '留言板每页显示数量:', '请填写正确的数字', 0, 0, 1),
(41, 0, 'banner1', '2', '', '', 0, 0, 1),
(42, 0, 'bannerlink1', 'http://www.6kzz.com', '', '', 0, 0, 1),
(43, 0, 'banner2', '3', '', '', 0, 0, 1),
(44, 0, 'bannerlink2', 'http://www.6kzz.com', '', '', 0, 0, 1),
(45, 0, 'banner3', '', '', '', 0, 0, 1),
(46, 0, 'bannerlink3', '#Banner链接', '', '', 0, 0, 1),
(47, 0, 'banner4', '', '', '', 0, 0, 1),
(48, 0, 'bannerlink4', '#Banner链接', '', '', 0, 0, 1),
(49, 0, 'banner5', '', '', '', 0, 0, 1),
(50, 0, 'bannerlink5', '#Banner链接', '', '', 0, 0, 1),
(51, 0, 'copyrightfooter', 'Powered by <a href="http://www.6kzz.com" target="_blank">6KZZ v1.4</a> © 2011 6kzz.com', '', '', 0, 0, 0),
(52, 0, 'isthumb', '1', '', '', 0, 0, 0),
(53, 0, 'thumbwidth', '160', '', '', 0, 0, 0),
(54, 0, 'thumbheight', '160', '', '', 0, 0, 0),
(90, 0, 'logopath', '201103/1_1301037971_3787.gif', '', '', 0, 0, 1),
(56, 0, 'bannerpath1', '201103/1_1301037973_4418.jpg', '', '', 0, 0, 1),
(57, 0, 'bannerpath2', '201103/1_1301037975_9640.jpg', '', '', 0, 0, 1),
(58, 0, 'bannerpath3', '', '', '', 0, 0, 1),
(59, 0, 'bannerpath4', '', '', '', 0, 0, 1),
(60, 0, 'bannerpath5', '', '', '', 0, 0, 1),
(61, 0, 'salt', '5f34b58768b44fbd91895cb9c343ec63', '', '', 0, 0, 0),
(82, 1, 'logo', '1', '网站LOGO:(建议234 * 60像素)', '', 0, 0, 1),
(83, 1, 'webname', 'yiicms', '网站名称:', '网站名称，将显示在导航条和标题中', 0, 0, 1),
(84, 1, 'url', 'http://a.com/6kzz', '网站 URL:', '网站 URL，将作为链接显示在页面底部', 0, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_settingsb`
--

CREATE TABLE IF NOT EXISTS `zzdb_settingsb` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'id',
  `categoryid` tinyint(3) unsigned NOT NULL COMMENT '分类id',
  `property` varchar(30) NOT NULL default '',
  `setvalue` varchar(1000) NOT NULL default '',
  `name` varchar(50) NOT NULL COMMENT '配置名称',
  `description` varchar(100) NOT NULL COMMENT '描述',
  `set_order` tinyint(3) unsigned NOT NULL,
  `set_type` tinyint(3) unsigned NOT NULL,
  `langid` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `property` (`property`),
  KEY `langid` (`langid`),
  KEY `categoryid` (`categoryid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=91 ;

--
-- 转存表中的数据 `zzdb_settingsb`
--

INSERT INTO `zzdb_settingsb` (`id`, `categoryid`, `property`, `setvalue`, `name`, `description`, `set_order`, `set_type`, `langid`) VALUES
(1, 0, 'mailsendtype', '1', '', '', 0, 0, 0),
(2, 0, 'mailsender', 'Sender@6kzz.com', '', '', 0, 0, 0),
(3, 0, 'smtpserver', '', '', '', 0, 0, 0),
(4, 0, 'smtpport', '', '', '', 0, 0, 0),
(5, 0, 'smtpauth', '1', '', '', 0, 0, 0),
(6, 0, 'smtpsender', '', '', '', 0, 0, 0),
(7, 0, 'smtpusername', '', '', '', 0, 0, 0),
(8, 0, 'smtppassword', '', '', '', 0, 0, 0),
(9, 0, 'testreceiver', 'Receiver@6kzz.com', '', '', 0, 0, 0),
(10, 0, 'copyrightheader', ' -阿萨德', '', '', 0, 0, 0),
(11, 0, 'funmember', '1', '', '', 0, 0, 0),
(12, 0, 'funshop', '1', '', '', 0, 0, 0),
(13, 0, 'issignup', '1', '', '', 0, 0, 0),
(14, 0, 'signupfilename', 'signup.php', '', '', 0, 0, 0),
(15, 5, 'signupsecuritycode', '0', '启用注册验证码:', '注册时需要填写验证码', 0, 0, 0),
(16, 0, 'issignupverify', '0', '', '', 0, 0, 0),
(17, 0, 'signupitime', '0.01', '', '', 0, 0, 0),
(18, 0, 'templatelang', 'en.php', '', '', 0, 0, 1),
(19, 0, 'template', 'gray_blue', '', '', 0, 0, 1),
(21, 4, 'seotitle', '6KZZ快站，企业建站首选！', '浏览器标题(Title):', '浏览器标题(Title)，有利于SEO', 0, 0, 1),
(85, 1, 'icp', '12356', '网站备案信息代码:', '页面底部可以显示 ICP 备案信息，如果网站已备案，在此输入您的授权码，它将显示在页面底部，如果没有请留空', 0, 0, 1),
(86, 1, 'cur', '￥', '网站货币符号:', '￥、＄、€、￡等等', 0, 0, 1),
(87, 1, 'isoff', '0', '网站关闭:', '', 0, 0, 1),
(88, 1, 'offdetails', '暗示的发生', '网站关闭原因:', '网站关闭时出现的提示信息', 0, 0, 1),
(89, 1, 'counter', '阿斯蒂芬阿斯蒂芬', '网站第三方统计代码:', '页面底部可以显示第三方统计', 0, 0, 1),
(27, 2, 'timeformat', 'yyyy-mm-dd', '网站时间格式:', '使用 yyyy(yy) 表示年，mm 表示月，dd 表示天。如 yyyy-mm-dd 表示 2012-01-01', 0, 0, 1),
(28, 2, 'timeoffset', '8', '系统时差:', '当地时间与 GMT 的时差', 0, 0, 1),
(29, 2, 'humantime', '0', '人性化时间格式:', '选择“是”，网站中的时间将以“n秒前”、“n分钟前”等形式显示', 0, 0, 1),
(30, 3, 'isgzip', '0', '开启页面 Gzip 压缩:', '系统检测到服务器支持Gzip压缩', 0, 0, 1),
(31, 4, 'urlrewrite', '2', '开启伪静态:', '程序实现：一般虚拟主机则可支持\r\n服务器配置：需要服务器支持与配置Url Rewrite规则', 0, 0, 1),
(32, 4, 'metakeywords', '6KZZ快站,快速建站程序,智能建站程序,PHP建站程序', '关键字(Meta Keywords):', 'Keywords 项出现在页面头部的 Meta 标签中，有利于SEO，多个关键字间请用半角逗号 "," 隔开', 0, 0, 1),
(33, 4, 'metadescription', '6KZZ快站是一个采用 PHP+MySQL 构建的高效能的快速建站、智能建站程序。', '描述(Meta Description):', 'Description 出现在页面头部的 Meta 标签中，有利于SEO', 0, 0, 1),
(34, 4, 'headcontent', '', '其他头部信息:', '如需在 <head></head> 中添加其他的 HTML 代码，可以使用本设置，否则请留空', 0, 0, 1),
(35, 0, 'signupsecuritycode', '0', '', '', 0, 0, 1),
(36, 5, 'loginsecuritycode', '0', '启用登录验证码:', '登录时需要填写验证码', 0, 0, 1),
(37, 5, 'msgsecuritycode', '0', '启用留言验证码:', '发表留言时需要填写验证码', 0, 0, 1),
(38, 6, 'perpagepro', '12', '产品列表每页显示数量:', '请填写正确的数字', 0, 0, 1),
(39, 6, 'perpageart', '15', '文章列表每页显示数量:', '请填写正确的数字', 0, 0, 1),
(40, 6, 'perpagemsg', '10', '留言板每页显示数量:', '请填写正确的数字', 0, 0, 1),
(41, 0, 'banner1', '2', '', '', 0, 0, 1),
(42, 0, 'bannerlink1', 'http://www.6kzz.com', '', '', 0, 0, 1),
(43, 0, 'banner2', '3', '', '', 0, 0, 1),
(44, 0, 'bannerlink2', 'http://www.6kzz.com', '', '', 0, 0, 1),
(45, 0, 'banner3', '', '', '', 0, 0, 1),
(46, 0, 'bannerlink3', '#Banner链接', '', '', 0, 0, 1),
(47, 0, 'banner4', '', '', '', 0, 0, 1),
(48, 0, 'bannerlink4', '#Banner链接', '', '', 0, 0, 1),
(49, 0, 'banner5', '', '', '', 0, 0, 1),
(50, 0, 'bannerlink5', '#Banner链接', '', '', 0, 0, 1),
(51, 0, 'copyrightfooter', 'Powered by <a href="http://www.6kzz.com" target="_blank">6KZZ v1.4</a> © 2011 6kzz.com', '', '', 0, 0, 0),
(52, 0, 'isthumb', '1', '', '', 0, 0, 0),
(53, 0, 'thumbwidth', '160', '', '', 0, 0, 0),
(54, 0, 'thumbheight', '160', '', '', 0, 0, 0),
(90, 0, 'logopath', '201103/1_1301037971_3787.gif', '', '', 0, 0, 1),
(56, 0, 'bannerpath1', '201103/1_1301037973_4418.jpg', '', '', 0, 0, 1),
(57, 0, 'bannerpath2', '201103/1_1301037975_9640.jpg', '', '', 0, 0, 1),
(58, 0, 'bannerpath3', '', '', '', 0, 0, 1),
(59, 0, 'bannerpath4', '', '', '', 0, 0, 1),
(60, 0, 'bannerpath5', '', '', '', 0, 0, 1),
(61, 0, 'salt', '5f34b58768b44fbd91895cb9c343ec63', '', '', 0, 0, 0),
(82, 1, 'logo', '1', '网站LOGO:(建议234 * 60像素)', '', 0, 0, 1),
(83, 1, 'webname', 'yiicms', '网站名称:', '网站名称，将显示在导航条和标题中', 0, 0, 1),
(84, 1, 'url', 'http://a.com/6kzz', '网站 URL:', '网站 URL，将作为链接显示在页面底部', 0, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_slideshow`
--

CREATE TABLE IF NOT EXISTS `zzdb_slideshow` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(90) NOT NULL,
  `url` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `token` tinyint(3) unsigned NOT NULL,
  `sortnum` int(11) NOT NULL default '0',
  `created` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `zzdb_slideshow`
--

INSERT INTO `zzdb_slideshow` (`id`, `title`, `url`, `image`, `token`, `sortnum`, `created`) VALUES
(1, '阿芙的诞生', 'http://www.yiicms.com', '/uploads/slideshow/50f503afae19f.jpg', 1, 0, 1358234543),
(2, '阿芙荷荷巴系列', 'http://www.yiicms.com', '/uploads/slideshow/50f503c5099e1.jpg', 1, 0, 1358234565),
(3, '阿芙刘野限定版', 'http://www.yiicms.com', '/uploads/slideshow/50f503e0b62b1.jpg', 1, 0, 1358234592),
(4, '阿芙人参系列', 'http://www.yiicms.com', '/uploads/slideshow/50f503f554262.jpg', 1, 0, 1358234613),
(5, '阿芙玫瑰系列', 'http://www.yiicms.com', '/uploads/slideshow/50f50407b82b9.jpg', 1, 0, 1358234631),
(6, '阿斯蒂芬', 'http://www.yiicms.com', '/uploads/slideshow/50f50995a8e0e.jpg', 2, 0, 1358236053);

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_templatevars`
--

CREATE TABLE IF NOT EXISTS `zzdb_templatevars` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tkey` varchar(50) NOT NULL default '',
  `tdesc` varchar(100) NOT NULL default '',
  `tvalue` mediumtext NOT NULL,
  `langid` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `zzdb_templatevars`
--

INSERT INTO `zzdb_templatevars` (`id`, `tkey`, `tdesc`, `tvalue`, `langid`) VALUES
(6, 'index_intro', '网站简介内容', '<img src="attachment.php?id=29" alt="" style="margin:2px 8px;" width="58" align="left" border="0" height="58" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n 6KZZ快站是一个基于PHP + \r\nMySQL的开源企业快速建站程序。6KZZ快站一改过去传统的企业建站方式，不需企业编写任何程序或网页，只需要登陆管理后台，即可任意编辑网站的栏\r\n目、内容，以及进行网站样式的管理，短时间内即可生成企业个性化的精美网站。', 1),
(7, 'aaa', 'bbadsfsa', '<p>asdfasdfasdfasf</p>\r\n<p>asdfasdfasdf</p>\r\n<p>asdfasdfasdf</p>', 1);

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_users`
--

CREATE TABLE IF NOT EXISTS `zzdb_users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(32) NOT NULL default '',
  `userpass` varchar(32) NOT NULL default '',
  `email` varchar(80) NOT NULL default '',
  `realname` varchar(45) NOT NULL default '',
  `phone` varchar(45) NOT NULL default '',
  `lastip` varchar(15) NOT NULL default '',
  `addtime` int(10) unsigned NOT NULL default '0',
  `lasttime` int(10) unsigned NOT NULL default '0',
  `popedom` varchar(1000) NOT NULL default '',
  `ishidden` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `ishidden` (`ishidden`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zzdb_users`
--

INSERT INTO `zzdb_users` (`id`, `username`, `userpass`, `email`, `realname`, `phone`, `lastip`, `addtime`, `lasttime`, `popedom`, `ishidden`) VALUES
(1, 'zym', '10027794a5c77b28984e5ce110cef597', 'zymzeng@qq.com', '曾勇民', '13538288822', '127.0.0.1', 1298332800, 1301034299, '|channel|page|article|procate|products|order|member|main|lang|template|link|msg|vote|user|database|', 1),
(2, 'admin', '362864ed70a8b0c71d144b7a556f1797', 'smarteng@qq.com', '', '', '127.0.0.1', 1346203000, 1358237624, '|channel|page|article|procate|products|order|member|main|lang|template|link|msg|vote|user|database|', 0);

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_voteitems`
--

CREATE TABLE IF NOT EXISTS `zzdb_voteitems` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `voteid` int(10) unsigned NOT NULL default '0',
  `title` varchar(100) NOT NULL default '',
  `votednum` int(10) unsigned NOT NULL default '0',
  `voteips` mediumtext NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `voteid` (`voteid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `zzdb_voteitems`
--

INSERT INTO `zzdb_voteitems` (`id`, `voteid`, `title`, `votednum`, `voteips`) VALUES
(1, 1, 'asdfasdf', 0, ''),
(2, 1, 'asdfasdf', 0, ''),
(3, 1, 'asdfasdf', 0, ''),
(4, 1, 'asdf', 0, ''),
(5, 1, 'ass', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `zzdb_votes`
--

CREATE TABLE IF NOT EXISTS `zzdb_votes` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(100) NOT NULL default '',
  `content` varchar(1000) NOT NULL default '',
  `votednum` int(10) unsigned NOT NULL default '0',
  `maxvotes` tinyint(3) unsigned NOT NULL default '1',
  `starttime` int(10) unsigned NOT NULL default '0',
  `stoptime` int(10) unsigned NOT NULL default '0',
  `level` tinyint(3) unsigned NOT NULL default '0',
  `ordernum` int(10) unsigned NOT NULL default '0',
  `langid` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `timerange` USING BTREE (`starttime`,`stoptime`),
  KEY `langid` (`langid`),
  KEY `ordernum` (`ordernum`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `zzdb_votes`
--

INSERT INTO `zzdb_votes` (`id`, `title`, `content`, `votednum`, `maxvotes`, `starttime`, `stoptime`, `level`, `ordernum`, `langid`) VALUES
(1, 'sdfasdfsadf', '', 0, 1, 1356595200, 1356767999, 1, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
