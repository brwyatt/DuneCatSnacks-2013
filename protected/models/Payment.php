<?php

/**
 * This is the model class for table "payment".
 *
 * The followings are the available columns in table 'payment':
 * @property integer $idpayment
 * @property integer $idorder
 * @property double $amount
 * @property string $time
 *
 * The followings are the available model relations:
 * @property Order $idorder0
 */
class Payment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Payment the static model class
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
		return 'payment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idorder, time', 'required'),
			array('idorder', 'numerical', 'integerOnly'=>true),
			array('amount', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpayment, idorder, amount, time', 'safe', 'on'=>'search'),
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
			'idorder0' => array(self::BELONGS_TO, 'Order', 'idorder'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpayment' => 'Idpayment',
			'idorder' => 'Idorder',
			'amount' => 'Amount',
			'time' => 'Time',
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

		$criteria->compare('idpayment',$this->idpayment);
		$criteria->compare('idorder',$this->idorder);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('time',$this->time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}