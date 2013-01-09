<?php

/**
 * This is the model class for table "rw".
 *
 * The followings are the available columns in table 'rw':
 * @property string $id
 * @property string $nama
 * @property string $kelurahan
 * @property string $kecamatan
 * @property string $kota_madya
 * @property string $kota
 * @property string $propinsi
 *
 * The followings are the available model relations:
 * @property PengurusRw[] $pengurusRws
 * @property Rt[] $rts
 */
class Rw extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Rw the static model class
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
		return 'rw';
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
			array('nama, kelurahan, kecamatan, kota_madya, kota, propinsi', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama, kelurahan, kecamatan, kota_madya, kota, propinsi', 'safe', 'on'=>'search'),
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
			'pengurusRws' => array(self::HAS_MANY, 'PengurusRw', 'rw_id'),
			'rts' => array(self::HAS_MANY, 'Rt', 'rw_id'),
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
			'kelurahan' => 'Kelurahan',
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
		$criteria->compare('kelurahan',$this->kelurahan,true);
		$criteria->compare('kecamatan',$this->kecamatan,true);
		$criteria->compare('kota_madya',$this->kota_madya,true);
		$criteria->compare('kota',$this->kota,true);
		$criteria->compare('propinsi',$this->propinsi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchAutoComplete($rw = "")
	{
		if ($rw != "")
		{
			$criteria = new CDbCriteria;
			$criteria->compare('nama', $rw, true);
			$data_provider = new CActiveDataProvider($this, array('criteria'=>$criteria, 'pagination' => false));
			$return_array = array();
			$data_found = $data_provider->getData();
			foreach ($data_found as $rws)
			{
				$return_array[] = array(
					"label" => $rws->nama,
					"id" => $rws->id,
					"value" => $rws->nama,
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