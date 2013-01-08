<ul>
	<?php foreach($data as $k =>$d){
		echo '<li>'.CHtml::link(str_replace('/','&',$d->name),array('item/list','cid'=>$d->cid),array('target'=>'_blank')).'</li>';
	}?>
</ul>
<p class="more"><span><?php echo CHtml::link('»更多类目',array('cate/index'));?></span></p>