<?php
class IndexAd extends CWidget
{	
	public $limit = 4;

	protected function getNewAds(){
		$criteria = new CDbCriteria();
		$criteria->order = 'share_count desc , id desc';
		$criteria->limit = $this->limit;
		$result = Goodshops::model()->findAll($criteria);
		return $result;
	}
	public function run( ){
		//$data = $this->getNewAds();
	    $html = '';
	    $html .= '<ul class="midlink" style="width:960px; overflow:hidden;">
			    <li style="margin:9px 9px 0 0;">
			        <a href=""><img src="./uploads/brand/recommend.jpg"></a>
			    </li>
			    <li style="margin:9px 9px 0 0;">
			        <a href="http://www.afuvip.com/goods/124"><img src="./uploads/brand/129972708117133882未标题-1.jpg"></a>
			    </li>
			    <li style="margin:9px 9px 0 0;">
			        <a href="http://www.afuvip.com/Article/ArticleList?type=about"><img src="./uploads/brand/brandAfu.jpg"></a>
			    </li>
			    <li style="margin:9px 9px 0 0;">
			        <a href="http://www.afuvip.com/Home/Maps"><img src="./uploads/brand/shopAfu.jpg"></a>
			    </li>
			  </ul>';
	    /*
	    foreach ($data as $key => $shop) {
	       $html .= '<div class="groupBox"> 
			        <div class="groupCon"> 
			            <a class="picBox" href="http://www.meilishuo.com/guang/attr/38219?frm=musthave" target="_blank">
			            <img src="http://d01.res.meilishuo.net/img/_o/16/4e/7f406883ab9d5c7e9bf5c281add1_200_200.c1.jpg">
			                </a> 
			            <div class="gc_title"> 
			                <h4><a target="_blank" href="http://www.meilishuo.com/guang/attr/38219?frm=musthave">宽松毛衣</a></h4> 
			                <p><span class="wlc_heart">&nbsp;</span>'.$shop->share_count.'</p> 
			            </div> 
			            <p class="detail">兼备保暖性和时尚性，好搭又百变。同时也能让身材得到完美的修饰。</p> 
			            <div class="clear_f"></div> 
			        </div> 
			    </div>';
	    }
	    */
	    echo $html;
	}
}