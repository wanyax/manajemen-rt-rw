<?php

/**
 * This is the model class for table "perumahan".
 *
 * The followings are the available columns in table 'perumahan':
 * @property string $id
 * @property string $nama
 * @property string $kecamatan
 * @property string $kota_madya
 * @property string $kota
 * @property string $propinsi
 *
 * The followings are the available model relations:
 * @property Blok[] $bloks
 */
class Perumahan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Perumahan the static model class
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
		return 'perumahan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama', 'required'),
			array('nama, kecamatan, kota_madya, kota, propinsi', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama, kecamatan, kota_madya, kota, propinsi', 'safe', 'on'=>'search'),
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
			'bloks' => array(self::HAS_MANY, 'Blok', 'perumahan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama',
			'kecamatan' => 'Kecamatan',
			'kota_madya' => 'Kota Madya',
			'kota' => 'Kota',
			'propinsi' => 'Propinsi',
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
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('kecamatan',$this->kecamatan,true);
		$criteria->compare('kota_madya',$this->kota_madya,true);
		$criteria->compare('kota',$this->kota,true);
		$criteria->compare('propinsi',$this->propinsi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function searchAutoComplete($nama_perumahan = "")
	{
		if ($nama_perumahan != "")
		{
			$criteria = new CDbCriteria;
			$criteria->compare('nama', $nama_perumahan, true);
			$data_provider = new CActiveDataProvider($this, array('criteria'=>$criteria, 'pagination' => false));
			$return_array = array();
			$perumahan = $data_provider->getData();
			foreach ($perumahan as $rumah)
			{
				$return_array[] = array(
					"label" => $rumah->nama,
					"id" => $rumah->id,
					"value" => $rumah->nama,
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