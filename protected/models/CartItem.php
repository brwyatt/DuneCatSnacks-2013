<?php

/**
 * This is the model class for table "cart_item".
 *
 * The followings are the available columns in table 'cart_item':
 * @property integer $idcart_item
 * @property integer $idcart
 * @property integer $iditem
 * @property integer $quantity
 *
 * The followings are the available model relations:
 * @property Cart $idcart0
 * @property Item $iditem0
 */
class CartItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CartItem the static model class
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
		return 'cart_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcart, iditem, quantity', 'required'),
			array('idcart, iditem, quantity', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idcart_item, idcart, iditem, quantity', 'safe', 'on'=>'search'),
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
			'iditem0' => array(self::BELONGS_TO, 'Item', 'iditem'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcart_item' => 'Idcart Item',
			'idcart' => 'Idcart',
			'iditem' => 'Iditem',
			'quantity' => 'Quantity',
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

		$criteria->compare('idcart_item',$this->idcart_item);
		$criteria->compare('idcart',$this->idcart);
		$criteria->compare('iditem',$this->iditem);
		$criteria->compare('quantity',$this->quantity);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}