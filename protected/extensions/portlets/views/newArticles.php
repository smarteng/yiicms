<ul>
	<?php foreach($data as $k =>$d){
		echo '<li>'.CHtml::link(mb_substr($d->title,0,17,'utf-8'),array('article/view','id'=>$d->id),array('target'=>'_blank')).'</li>';
	}?>
</ul>
