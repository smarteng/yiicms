<?php
/**
 * Description of taobaoApi
 *
 * @author eclanp
 */
class TaobaoApi {
	protected $_appSign	 = null;
	protected $_strParam = '';
	protected $_config	 = null;
	protected $_url		 = 'http://gw.api.taobao.com/router/rest?';
	protected $_dataPath = null;

	/**
	 * 构造函数，初始化参数
	 * @param <array> $params
	 */
	public function __construct($params){
		$this->_dataPath = Yii::app()->basePath.DS.'data';
		$this->_config = Yii::app()->params['taoapp']['tbapicfg'];
		$this->_config = array_merge($this->_config,$params);
		$this->_appSign= Yii::app()->params['taoapp']['appSecret'];
	}

	/**
	 * 创建一个 sign
	 */
	protected function _createSign(){
		ksort($this->_config);
		foreach($this->_config as $key => $val){
			if($key != '' && $val != ''){
				$this->_appSign .= $key.$val;
			}
		}
		$this->_appSign = strtoupper(md5($this->_appSign));
	}

	/**
	 * 创建API调用链接的字符串参数
	 */
	protected function _createStrParam(){
		foreach($this->_config as $key => $val){
			if($key!='' && $val!=''){
				$this->_strParam .= $key.'='.urlencode($val).'&';
			}
		}
		$this->_strParam .= 'sign='.$this->_appSign;
	}

	/**
	 * 获取数据的开放接口，自动判断是从缓存还是从API获取
	 * @param integer $exp 缓存时间，单位为秒，默认10个小时，当小于1秒时，即不缓存，直接从API获取
	 * @param string $dirname 缓存目录名，默认为 items
	 * @param string $filename 缓存文件名
	 * @return array
	 */
	public function getData($exp=36000,$dirname='items',$filename=null){
		if($exp<1)
			return CJSON::decode($this->getFromApi());
		//$memkey = $dirname.$filename;
		// $cacheDir = Yii::app()->basePath.DS.'data'.DS.$dirname;
		// if(!file_exists($cacheDir)) mkdir($cacheDir);
		/*
		if($filename == null){
			$cacheFile = $cacheDir.DS.$this->_config['cid'].'_'.$this->_config['sort'].'_'.$this->_config['page_no'].'.js';
		}else{
			$cacheFile = $cacheDir.DS.$filename;
		}*/
		if($filename == null){
			$memkey = $dirname.$this->_config['cid'].'_'.$this->_config['sort'].'_'.$this->_config['page_no'];
		}else{
			$memkey = $dirname.$filename;
			$memkey = rtrim($memkey, ".js");
		}
		//var_dump($memkey);
		/*
		if(file_exists($cacheFile)){
			$cacheTime = filemtime($cacheFile);
			if($cacheTime+$exp > time()){
				return CJSON::decode($this->getFromCache($cacheFile));
			}
		}*/
		$cachedata = Yii::app()->cache->get($memkey);
		if($cachedata){
			//echo 'cachedddd';
			return CJSON::decode($cachedata);
		}
		$json_cache = $this->getFromApi();
		
		$result = CJSON::decode($json_cache);
		
		if(count($result['error_response'])){ //判断获取数据时是否出错
			return $result['taobaoke_items_get_response']['taobaoke_items']['taobaoke_item'] = array();
		}
		if(count($result['taobaoke_items_get_response']['taobaoke_items']['taobaoke_item'])){
			//echo 'setttttt';
			Yii::app()->cache->set($memkey, $json_cache, $exp);
		}
		return $result;

	}
    /**
	 * 获取数据的开放接口，从API获取单个商品
	 * @return array
	 */
	public function getSingleData($iid=0){
		if($iid == 0){
			$result = $this->getItemsFromApi();
			//Yii::app()->cache->set($iid, $result, $exp);
		}else{
			$result = Yii::app()->cache->get($iid);
			if(!$result){
				$result = $this->getItemsFromApi();
				$exp = 2592000;
				Yii::app()->cache->set($iid, $result, $exp);
			}
		}
		return $result;
	}

	/**
	 * 通过API获取数据
	 * @return json|xml|string
	 */
	protected function getFromApi(){
		$this->_createSign();
		$this->_createStrParam();
		$this->_url .= $this->_strParam;
		$data = $this->curl_file_get_contents($this->_url);
		//处理缩略图
		$data = CJSON::decode($data);
		foreach($data['taobaoke_items_get_response']['taobaoke_items']['taobaoke_item'] as $k => $val){
			$pic_ext = explode('.',$val['pic_url']);
			$data['taobaoke_items_get_response']['taobaoke_items']['taobaoke_item'][$k]['pic_url'] .= '_b.'.$pic_ext[count($pic_ext)-1]; //原路径上加 _b.jpg 这样的形式可以得到缩略图
		}
		$data = CJSON::encode($data);
		return $data;
	}
    /**
	 * 通过API获取单品数据
	 * @return json|xml|string
	 */
	protected function getItemsFromApi(){
        $this->_createSign();
		$this->_createStrParam();
		$this->_url .= $this->_strParam;
		$data = $this->curl_file_get_contents($this->_url);
		$data = strip_tags($data,'<br>');
		$data = CJSON::decode($data);
		return $data;
	}
	/**
	*curl 获得数据
	*/
	public function curl_file_get_contents($durl){
		if(extension_loaded('curl')) {
		    $ch = curl_init();
		    curl_setopt($ch, CURLOPT_URL, $durl);
		    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		    curl_setopt($ch, CURLOPT_USERAGENT, _USERAGENT_);
		    curl_setopt($ch, CURLOPT_REFERER,_REFERER_);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		    $r = curl_exec($ch);
		    curl_close($ch);
		}else{
			$r = file_get_contents($durl);   
		}
	   return $r;
	}
	
	/**
	 * 通过缓存获取数据
	 * @return json|xml|string
	 */
	protected function getFromCache($cacheFileName){
		return file_get_contents($cacheFileName);
	}
}
?>
