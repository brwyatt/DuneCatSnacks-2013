<?php

/**
 * This is the model class for table "order".
 *
 * The followings are the available columns in table 'order':
 * @property integer $idorder
 * @property integer $idcart
 * @property string $cust_name
 * @property string $cust_loc
 * @property string $cust_desc
 * @property string $createtime
 *
 * The followings are the available model relations:
 * @property Cart $idcart0
 * @property Payment[] $payments
 */
class Order extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Order the static model class
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
		return 'order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcart, cust_name, createtime', 'required'),
			array('idcart', 'numerical', 'integerOnly'=>true),
			array('cust_name', 'length', 'max'=>100),
			array('cust_loc', 'length', 'max'=>45),
			array('cust_desc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idorder, idcart, cust_name, cust_loc, cust_desc, createtime', 'safe', 'on'=>'search'),
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
			'idcart0' => array(self::BELONGS_TO, 'Cart', 'idcart'),
			'payments' => array(self::HAS_MANY, 'Payment', 'idorder'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idorder' => 'Idorder',
			'idcart' => 'Idcart',
			'cust_name' => 'Cust Name',
			'cust_loc' => 'Cust Loc',
			'cust_desc' => 'Cust Desc',
			'createtime' => 'Createtime',
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

		$criteria->compare('idorder',$this->idorder);
		$criteria->compare('idcart',$this->idcart);
		$criteria->compare('cust_name',$this->cust_name,true);
		$criteria->compare('cust_loc',$this->cust_loc,true);
		$criteria->compare('cust_desc',$this->cust_desc,true);
		$criteria->compare('createtime',$this->createtime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}