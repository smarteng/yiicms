<?php
class HotProducts extends CWidget
{	
	public $limit = 5;
	
	protected function getHotProducts(){
		$criteria = new CDbCriteria();
		$criteria->order = 'hits desc , id desc';
		$criteria->limit = $this->limit;
		$result = Products::model()->findAll($criteria);
		return $result;
	}
	public function run( )
	{
		$data = $this->getHotProducts();
	    $html = '';
	    foreach ($data as $key => $product) {
	       $html .= '<div class="feature_product">
			            <a href="http://www.afuvip.com/details/10006109">
			                <img src="./uploads/goods/129852513053177321p03.jpg" width="170" height="195" title="" alt="阿芙·玫瑰精油"></a>
			            <div class="product_detail">
		                	<a href="http://www.afuvip.com/details/10006109" class="details">阿芙·玫瑰精油</a></div>
		        	</div> ';
	    }
	    echo $html;
	}
}