<?php

/**
 * This is the model class for table "blok".
 *
 * The followings are the available columns in table 'blok':
 * @property string $id
 * @property string $nama
 * @property string $perumahan_id
 *
 * The followings are the available model relations:
 * @property Perumahan $perumahan
 * @property Rumah[] $rumahs
 */
class Blok extends CActiveRecord
{
	
	var $nama_perumahan;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Blok the static model class
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
		return 'blok';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, perumahan_id', 'required'),
			array('nama', 'length', 'max'=>255),
			array('perumahan_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama, perumahan_id, nama_perumahan', 'safe', 'on'=>'search'),
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
			'perumahan' => array(self::BELONGS_TO, 'Perumahan', 'perumahan_id',),
			'rumahs' => array(self::HAS_MANY, 'Rumah', 'blok_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Blok',
			'perumahan_id' => 'Perumahan',
			'nama_perumahan' => 'Perumahan',
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
		$criteria->compare('blok.nama',$this->nama,true);
		$criteria->compare('perumahan.nama', $this->nama_perumahan, true);
		$criteria->with = array('perumahan'=>array('select'=>'perumahan.nama','together'=>true));
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function searchAutoComplete($blok = "")
	{
		if ($blok != "")
		{
			$criteria = new CDbCriteria;
			$criteria->compare('nama', $blok, true);
			$data_provider = new CActiveDataProvider($this, array('criteria'=>$criteria, 'pagination' => false));
			$return_array = array();
			$data_found = $data_provider->getData();
			foreach ($data_found as $bloks)
			{
				$return_array[] = array(
					"label" => $bloks->nama,
					"id" => $bloks->id,
					"value" => $bloks->nama,
				);
			}
			return $return_array;
		}
		else
		{
			return false;
		}
	} 

}