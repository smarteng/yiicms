<?php

/**
 * This is the model class for table "{{attachments}}".
 *
 * The followings are the available columns in table '{{attachments}}':
 * @property string $id
 * @property string $folderid
 * @property string $filename
 * @property string $filesize
 * @property string $filepath
 * @property string $uploadtime
 * @property string $type
 * @property string $filetype
 * @property string $imgwidth
 */
class Attachments extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Attachments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{attachments}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('folderid, filesize, uploadtime, type, imgwidth', 'length', 'max'=>10),
			array('filename', 'length', 'max'=>255),
			array('filepath', 'length', 'max'=>100),
			array('filetype', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, folderid, filename, filesize, filepath, uploadtime, type, filetype, imgwidth', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'folderid' => 'Folderid',
			'filename' => 'Filename',
			'filesize' => 'Filesize',
			'filepath' => 'Filepath',
			'uploadtime' => 'Uploadtime',
			'type' => 'Type',
			'filetype' => 'Filetype',
			'imgwidth' => 'Imgwidth',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('folderid',$this->folderid,true);
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('filesize',$this->filesize,true);
		$criteria->compare('filepath',$this->filepath,true);
		$criteria->compare('uploadtime',$this->uploadtime,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('filetype',$this->filetype,true);
		$criteria->compare('imgwidth',$this->imgwidth,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}