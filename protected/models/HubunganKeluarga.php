<?php

/**
 * This is the model class for table "hubungan_keluarga".
 *
 * The followings are the available columns in table 'hubungan_keluarga':
 * @property string $id
 * @property string $warga1_id
 * @property string $warga2_id
 * @property string $tipe_hubungan_id
 *
 * The followings are the available model relations:
 * @property Warga $warga1
 * @property Warga $warga2
 * @property TipeHubungan $tipeHubungan
 */
class HubunganKeluarga extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return HubunganKeluarga the static model class
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
		return 'hubungan_keluarga';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('warga1_id, warga2_id, tipe_hubungan_id', 'required'),
			array('warga1_id, warga2_id, tipe_hubungan_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, warga1_id, warga2_id, tipe_hubungan_id', 'safe', 'on'=>'search'),
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
			'warga1' => array(self::BELONGS_TO, 'Warga', 'warga1_id'),
			'warga2' => array(self::BELONGS_TO, 'Warga', 'warga2_id'),
			'tipeHubungan' => array(self::BELONGS_TO, 'TipeHubungan', 'tipe_hubungan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'warga1_id' => 'Warga1',
			'warga2_id' => 'Warga2',
			'tipe_hubungan_id' => 'Tipe Hubungan',
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
		$criteria->compare('warga1_id',$this->warga1_id,true);
		$criteria->compare('warga2_id',$this->warga2_id,true);
		$criteria->compare('tipe_hubungan_id',$this->tipe_hubungan_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}