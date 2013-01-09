<?php

/**
 * This is the model class for table "warga".
 *
 * The followings are the available columns in table 'warga':
 * @property string $id
 * @property string $nama_depan
 * @property string $nama_belakang
 * @property integer $kelamin
 * @property string $tanggal_lahir
 * @property integer $status_kepala_keluarga
 * @property string $rumah_id
 * @property string $tanggal_wafat
 *
 * The followings are the available model relations:
 * @property HubunganKeluarga[] $hubunganKeluargas
 * @property HubunganKeluarga[] $hubunganKeluargas1
 * @property Iuran[] $iurans
 * @property Iuran[] $iurans1
 * @property PengurusRt[] $pengurusRts
 * @property PengurusRw[] $pengurusRws
 * @property Rumah $rumah
 */
class Warga extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Warga the static model class
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
		return 'warga';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_depan, kelamin, tanggal_lahir, status_kepala_keluarga, rumah_id', 'required'),
			array('kelamin, status_kepala_keluarga', 'numerical', 'integerOnly'=>true),
			array('nama_depan, nama_belakang', 'length', 'max'=>255),
			array('rumah_id', 'length', 'max'=>10),
			array('tanggal_wafat', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama_depan, nama_belakang, kelamin, tanggal_lahir, status_kepala_keluarga, rumah_id, tanggal_wafat', 'safe', 'on'=>'search'),
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
			'hubunganKeluargas' => array(self::HAS_MANY, 'HubunganKeluarga', 'warga1_id'),
			'hubunganKeluargas1' => array(self::HAS_MANY, 'HubunganKeluarga', 'warga2_id'),
			'iurans' => array(self::HAS_MANY, 'Iuran', 'pembayar_id'),
			'iurans1' => array(self::HAS_MANY, 'Iuran', 'penerima_id'),
			'pengurusRts' => array(self::HAS_MANY, 'PengurusRt', 'warga_id'),
			'pengurusRws' => array(self::HAS_MANY, 'PengurusRw', 'warga_id'),
			'rumah' => array(self::BELONGS_TO, 'Rumah', 'rumah_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama_depan' => 'Nama Depan',
			'nama_belakang' => 'Nama Belakang',
			'kelamin' => 'Kelamin',
			'tanggal_lahir' => 'Tanggal Lahir',
			'status_kepala_keluarga' => 'Status Kepala Keluarga',
			'rumah_id' => 'Rumah',
			'tanggal_wafat' => 'Tanggal Wafat',
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
		$criteria->compare('nama_depan',$this->nama_depan,true);
		$criteria->compare('nama_belakang',$this->nama_belakang,true);
		$criteria->compare('kelamin',$this->kelamin);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('status_kepala_keluarga',$this->status_kepala_keluarga);
		$criteria->compare('rumah_id',$this->rumah_id,true);
		$criteria->compare('tanggal_wafat',$this->tanggal_wafat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}