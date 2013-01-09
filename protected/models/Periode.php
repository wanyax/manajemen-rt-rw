<?php

/**
 * This is the model class for table "periode".
 *
 * The followings are the available columns in table 'periode':
 * @property string $id
 * @property string $tipe_iuran_id
 * @property string $nama
 * @property string $tanggal_mulai
 * @property string $tanggal_akhir
 *
 * The followings are the available model relations:
 * @property Iuran[] $iurans
 * @property TipeIuran $tipeIuran
 */
class Periode extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Periode the static model class
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
		return 'periode';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipe_iuran_id, nama, tanggal_mulai', 'required'),
			array('tipe_iuran_id', 'length', 'max'=>10),
			array('nama', 'length', 'max'=>255),
			array('tanggal_akhir', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tipe_iuran_id, nama, tanggal_mulai, tanggal_akhir', 'safe', 'on'=>'search'),
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
			'iurans' => array(self::HAS_MANY, 'Iuran', 'periode_id'),
			'tipeIuran' => array(self::BELONGS_TO, 'TipeIuran', 'tipe_iuran_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tipe_iuran_id' => 'Tipe Iuran',
			'nama' => 'Nama',
			'tanggal_mulai' => 'Tanggal Mulai',
			'tanggal_akhir' => 'Tanggal Akhir',
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
		$criteria->compare('tipe_iuran_id',$this->tipe_iuran_id,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('tanggal_mulai',$this->tanggal_mulai,true);
		$criteria->compare('tanggal_akhir',$this->tanggal_akhir,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}