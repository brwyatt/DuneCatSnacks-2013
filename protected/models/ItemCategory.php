<?php

/**
 * This is the model class for table "item_category".
 *
 * The followings are the available columns in table 'item_category':
 * @property integer $iditem_category
 * @property integer $iditem
 * @property integer $idcategory
 *
 * The followings are the available model relations:
 * @property Item $iditem0
 * @property Category $idcategory0
 */
class ItemCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ItemCategory the static model class
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
		return 'item_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('iditem, idcategory', 'required'),
			array('iditem, idcategory', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('iditem_category, iditem, idcategory', 'safe', 'on'=>'search'),
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
			'iditem0' => array(self::BELONGS_TO, 'Item', 'iditem'),
			'idcategory0' => array(self::BELONGS_TO, 'Category', 'idcategory'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iditem_category' => 'Iditem Category',
			'iditem' => 'Iditem',
			'idcategory' => 'Idcategory',
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

		$criteria->compare('iditem_category',$this->iditem_category);
		$criteria->compare('iditem',$this->iditem);
		$criteria->compare('idcategory',$this->idcategory);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}