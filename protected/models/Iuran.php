<?php

/**
 * This is the model class for table "iuran".
 *
 * The followings are the available columns in table 'iuran':
 * @property string $id
 * @property string $periode_id
 * @property string $rumah_id
 * @property string $nominal
 * @property string $pembayar_id
 * @property string $penerima_id
 *
 * The followings are the available model relations:
 * @property Periode $periode
 * @property Rumah $rumah
 * @property Warga $pembayar
 * @property Warga $penerima
 */
class Iuran extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Iuran the static model class
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
		return 'iuran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('periode_id, rumah_id, nominal, pembayar_id, penerima_id', 'required'),
			array('periode_id, rumah_id, nominal, pembayar_id, penerima_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, periode_id, rumah_id, nominal, pembayar_id, penerima_id', 'safe', 'on'=>'search'),
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
			'periode' => array(self::BELONGS_TO, 'Periode', 'periode_id'),
			'rumah' => array(self::BELONGS_TO, 'Rumah', 'rumah_id'),
			'pembayar' => array(self::BELONGS_TO, 'Warga', 'pembayar_id'),
			'penerima' => array(self::BELONGS_TO, 'Warga', 'penerima_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'periode_id' => 'Periode',
			'rumah_id' => 'Rumah',
			'nominal' => 'Nominal',
			'pembayar_id' => 'Pembayar',
			'penerima_id' => 'Penerima',
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
		$criteria->compare('periode_id',$this->periode_id,true);
		$criteria->compare('rumah_id',$this->rumah_id,true);
		$criteria->compare('nominal',$this->nominal,true);
		$criteria->compare('pembayar_id',$this->pembayar_id,true);
		$criteria->compare('penerima_id',$this->penerima_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}