<?php

/**
 * This is the model class for table "tipe_iuran".
 *
 * The followings are the available columns in table 'tipe_iuran':
 * @property string $id
 * @property string $rt_id
 * @property string $nama
 * @property string $tipe_periode_id
 * @property string $nominal
 * @property integer $status_berlaku
 *
 * The followings are the available model relations:
 * @property Periode[] $periodes
 * @property Rt $rt
 * @property TipePeriode $tipePeriode
 */
class TipeIuran extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TipeIuran the static model class
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
		return 'tipe_iuran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rt_id, nama, tipe_periode_id, nominal, status_berlaku', 'required'),
			array('status_berlaku', 'numerical', 'integerOnly'=>true),
			array('rt_id, tipe_periode_id, nominal', 'length', 'max'=>10),
			array('nama', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, rt_id, nama, tipe_periode_id, nominal, status_berlaku', 'safe', 'on'=>'search'),
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
			'periodes' => array(self::HAS_MANY, 'Periode', 'tipe_iuran_id'),
			'rt' => array(self::BELONGS_TO, 'Rt', 'rt_id'),
			'tipePeriode' => array(self::BELONGS_TO, 'TipePeriode', 'tipe_periode_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'rt_id' => 'Rt',
			'nama' => 'Nama',
			'tipe_periode_id' => 'Tipe Periode',
			'nominal' => 'Nominal',
			'status_berlaku' => 'Status Berlaku',
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
		$criteria->compare('rt_id',$this->rt_id,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('tipe_periode_id',$this->tipe_periode_id,true);
		$criteria->compare('nominal',$this->nominal,true);
		$criteria->compare('status_berlaku',$this->status_berlaku);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}