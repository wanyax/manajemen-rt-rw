<?php

/**
 * This is the model class for table "pengurus_rt".
 *
 * The followings are the available columns in table 'pengurus_rt':
 * @property string $id
 * @property string $rt_id
 * @property string $warga_id
 * @property string $jabatan_rt_id
 * @property string $tanggal_mulai
 * @property string $tanggal_berakhir
 *
 * The followings are the available model relations:
 * @property Rt $rt
 * @property Warga $warga
 * @property JabatanRt $jabatanRt
 */
class PengurusRt extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PengurusRt the static model class
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
		return 'pengurus_rt';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rt_id, warga_id, jabatan_rt_id, tanggal_mulai', 'required'),
			array('rt_id, warga_id, jabatan_rt_id', 'length', 'max'=>10),
			array('tanggal_berakhir', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, rt_id, warga_id, jabatan_rt_id, tanggal_mulai, tanggal_berakhir', 'safe', 'on'=>'search'),
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
			'rt' => array(self::BELONGS_TO, 'Rt', 'rt_id'),
			'warga' => array(self::BELONGS_TO, 'Warga', 'warga_id'),
			'jabatanRt' => array(self::BELONGS_TO, 'JabatanRt', 'jabatan_rt_id'),
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
			'warga_id' => 'Warga',
			'jabatan_rt_id' => 'Jabatan Rt',
			'tanggal_mulai' => 'Tanggal Mulai',
			'tanggal_berakhir' => 'Tanggal Berakhir',
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
		$criteria->compare('warga_id',$this->warga_id,true);
		$criteria->compare('jabatan_rt_id',$this->jabatan_rt_id,true);
		$criteria->compare('tanggal_mulai',$this->tanggal_mulai,true);
		$criteria->compare('tanggal_berakhir',$this->tanggal_berakhir,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}