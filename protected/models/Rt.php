<?php

/**
 * This is the model class for table "rt".
 *
 * The followings are the available columns in table 'rt':
 * @property string $id
 * @property string $nama
 * @property string $rw_id
 *
 * The followings are the available model relations:
 * @property PengurusRt[] $pengurusRts
 * @property Rw $rw
 * @property Rumah[] $rumahs
 * @property TipeIuran[] $tipeIurans
 */
class Rt extends CActiveRecord
{
	
	var $nama_rw;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Rt the static model class
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
		return 'rt';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, rw_id', 'required'),
			array('nama', 'length', 'max'=>255),
			array('rw_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama, rw_id, nama_rw', 'safe', 'on'=>'search'),
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
			'pengurusRts' => array(self::HAS_MANY, 'PengurusRt', 'rt_id',),
			'rw' => array(self::BELONGS_TO, 'Rw', 'rw_id', 'select' => 'rw.nama'),
			'rumahs' => array(self::HAS_MANY, 'Rumah', 'rt_id'),
			'tipeIurans' => array(self::HAS_MANY, 'TipeIuran', 'rt_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'RT',
			'rw_id' => 'RW',
			'nama_rw' => 'RW',
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
		$criteria->compare('rt.nama', $this->nama, true);
		$criteria->compare('rw.nama', $this->nama_rw, true);
		$criteria->with = array('rw'=>array('together' => true));
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchAutoComplete($rt = "")
	{
		if ($rt != "")
		{
			$criteria = new CDbCriteria;
			$criteria->compare('nama', $rt, true);
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