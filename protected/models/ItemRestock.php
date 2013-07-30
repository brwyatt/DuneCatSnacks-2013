<?php

/**
 * This is the model class for table "item_restock".
 *
 * The followings are the available columns in table 'item_restock':
 * @property integer $iditem_restock
 * @property integer $iditem
 * @property integer $quantity
 * @property double $cost
 *
 * The followings are the available model relations:
 * @property Item $iditem0
 */
class ItemRestock extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ItemRestock the static model class
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
		return 'item_restock';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('iditem', 'required'),
			array('iditem, quantity', 'numerical', 'integerOnly'=>true),
			array('cost', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('iditem_restock, iditem, quantity, cost', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iditem_restock' => 'Iditem Restock',
			'iditem' => 'Iditem',
			'quantity' => 'Quantity',
			'cost' => 'Cost',
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

		$criteria->compare('iditem_restock',$this->iditem_restock);
		$criteria->compare('iditem',$this->iditem);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('cost',$this->cost);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}