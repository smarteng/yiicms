<?php

/**
 * DxhEditor class file.
 *
 * @author dufei22 <dufei22@gmail.com>
 * @version 0.1 (2010-8-6)
 * @requires xhEditor 1.1.14 final
 * <pre>
	$this->widget('ext.dxheditor.DxhEditor', array(
		'model'=>$model,
		'attribute'=>'vContent',
		'htmlOptions'=>array('style'=>'width: 95%; height: 300px;'),
		'language'=>'en',//默认'zh-cn'
		'options'=>array(
			'upMultiple'=>2,
			'upLinkUrl'=>'{editorRoot}upload.php',//请修改upload.php中相应保存目录或使用自己的upload服务端。
			'upLinkExt'=>'zip,rar.txt,doc,xls,ppt,docx,xlsx,pptx',
			'upImgUrl'=>'{editorRoot}upload.php',
			...
		),
	));
 * </pre>
 */

class DxhEditor extends CWidget
{
	/**
	 * @var string 语言id，可选项(e.g. 'en', 'zh-cn', 'zh-tw')；如果没有设置，默认使用zh-cn。
	 */
	public $language;
	/**
	 * @var array 输入框textarea的html选项。
	 */
	public $htmlOptions=array();
	/**
	 * @var array xheditor的选项。
	 */
	public $options=array();
	/**
	 * @var string 有数据模型时的模型名
	 */
	public $model;
	/**
	 * @var string 有数据模型时的模型属性名
	 */
	public $attribute;
	/**
	 * @var string 输入框textarea的名字，设置这个值就优先于model和attribute生成的名字
	 */
	public $name;
	public $value;

	public function init()
	{
		Yii::app()->clientScript->registerCoreScript('jquery');
		parent::init();
	}

	public function run()
	{
		list($name,$id)=$this->resolveNameID();

		if(isset($this->htmlOptions['id']))
			$id=$this->htmlOptions['id'];
		else
			$this->htmlOptions['id']=$id;
		if(isset($this->htmlOptions['name']))
			$name=$this->htmlOptions['name'];
		else
			$this->htmlOptions['name']=$name;

		if($this->hasModel())
			echo CHtml::activeTextArea($this->model,$this->attribute,$this->htmlOptions);
		else
			echo CHtml::textArea($name,$this->value,$this->htmlOptions);

		if(is_null($this->language))
			$this->language='zh-cn';

		$path = dirname(__FILE__).DS.'source';
		$baseUrl = Yii::app()->getAssetManager()->publish($path);

		$loadJs="
		function loadJS(url,callback,charset)
		{
			var script = document.createElement('script');
			script.onload = script.onreadystatechange = function ()
			{
				if (script && script.readyState && /^(?!(?:loaded|complete)$)/.test(script.readyState)) return;
				script.onload = script.onreadystatechange = null;
				script.src = '';
				script.parentNode.removeChild(script);
				script = null;
				if(callback)callback();
			};
			script.charset=charset || document.charset || document.characterSet;
			script.src = url;
			try {document.getElementsByTagName('head')[0].appendChild(script);} catch (e) {}
		}
		";
		$options=CJavaScript::encode($this->options);
		$jsUrl=$baseUrl.'/xheditor-'.$this->language.'.min.js';
		$js="loadJS('$jsUrl',function(){jQuery(\"#$id\").xheditor($options);});";
		$cs = Yii::app()->getClientScript();
		$cs->registerScript('loadJs', $loadJs);
		$cs->registerScript(__CLASS__.'#'.$id, $js);
	}
	/*
	 * @return array 获取输入框的名字和id号
	 */
	protected function resolveNameID()
	{
		if($this->name!==null)
			$name=$this->name;
		else if(isset($this->htmlOptions['name']))
			$name=$this->htmlOptions['name'];
		else if($this->hasModel())
			$name=CHtml::activeName($this->model,$this->attribute);
		else
			throw new CException(Yii::t('zii','{class} must specify "model" and "attribute" or "name" property values.',array('{class}'=>get_class($this))));

		if(($id=$this->getId(false))===null)
		{
			if(isset($this->htmlOptions['id']))
				$id=$this->htmlOptions['id'];
			else
				$id=CHtml::getIdByName($name);
		}

		return array($name,$id);
	}

	/**
	 * @return boolean 是否有数据模型
	 */
	protected function hasModel()
	{
		return $this->model instanceof CModel && $this->attribute!==null;
	}
}