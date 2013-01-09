<?php

/**
 * This is the model class for table "rumah".
 *
 * The followings are the available columns in table 'rumah':
 * @property string $id
 * @property string $nomor
 * @property string $nama
 * @property string $blok_id
 * @property string $rt_id
 *
 * The followings are the available model relations:
 * @property Iuran[] $iurans
 * @property Blok $blok
 * @property Rt $rt
 * @property Warga[] $wargas
 */
class Rumah extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Rumah the static model class
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
		return 'rumah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, rt_id', 'required'),
			array('nomor, nama', 'length', 'max'=>255),
			array('blok_id, rt_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nomor, nama, blok_id, rt_id, rt, blok', 'safe', 'on'=>'search'),
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
			'iurans' => array(self::HAS_MANY, 'Iuran', 'rumah_id'),
			'blok' => array(self::BELONGS_TO, 'Blok', 'blok_id'),
			'rt' => array(self::BELONGS_TO, 'Rt', 'rt_id'),
			'wargas' => array(self::HAS_MANY, 'Warga', 'rumah_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nomor' => 'Nomor',
			'nama' => 'Nama Rumah',
			'blok_id' => 'Blok',
			'rt_id' => 'RT',
			'blok' => 'Blok',
			'rt' => 'RT',
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

		$criteria = new CDbCriteria;
		$criteria->alias = $this->tableName();
		//$criteria->compare('id',$this->id,true);
		$criteria->compare('rumah.nomor',$this->nomor, true);
		$criteria->compare('rumah.nama', $this->nama, true);
		$criteria->compare('blok.nama',$this->blok, true);
		$criteria->compare('rt.nama', $this->rt, true);
		$criteria->with = array(
			'rt' => array('select'=>'rt.nama','together'=>true),
			'blok' => array('select'=>'blok.nama','together'=>true),
		);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function beforeSave() {
		if (parent::beforeSave()) {
			if (trim($this->blok_id) == "") {
				$this->blok_id = null;
			}
			return true;
		}
	}

}