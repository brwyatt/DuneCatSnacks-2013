<?php

/**
 * This is the model class for table "cart".
 *
 * The followings are the available columns in table 'cart':
 * @property integer $idcart
 * @property string $cookie
 *
 * The followings are the available model relations:
 * @property CartItem[] $cartItems
 * @property Order[] $orders
 */
class Cart extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cart the static model class
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
		return 'cart';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cookie', 'required'),
			array('cookie', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idcart, cookie', 'safe', 'on'=>'search'),
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
			'cartItems' => array(self::HAS_MANY, 'CartItem', 'idcart'),
			'orders' => array(self::HAS_MANY, 'Order', 'idcart'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcart' => 'Idcart',
			'cookie' => 'Cookie',
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

		$criteria->compare('idcart',$this->idcart);
		$criteria->compare('cookie',$this->cookie,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}