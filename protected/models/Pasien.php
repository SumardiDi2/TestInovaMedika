<?php

/**
 * This is the model class for table "pasien".
 *
 * The followings are the available columns in table 'pasien':
 * @property integer $id
 * @property integer $idTindakan
 * @property integer $idObat
 * @property integer $idPegawai
 * @property integer $idWilayah
 * @property string $address
 * @property string $jenisKelamin
 * @property integer $statusPembayaran
 *
 * The followings are the available model relations:
 * @property Obat $idObat0
 * @property Pegawai $idPegawai0
 * @property Tindakan $idTindakan0
 * @property Wilayah $idWilayah0
 * @property Pembayaran[] $pembayarans
 */
class Pasien extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pasien';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('address, jenisKelamin, statusPembayaran', 'required'),
			array('idTindakan, idObat, idPegawai, idWilayah, statusPembayaran', 'numerical', 'integerOnly'=>true),
			array('address', 'length', 'max'=>255),
			array('jenisKelamin', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idTindakan, idObat, idPegawai, idWilayah, address, jenisKelamin, statusPembayaran', 'safe', 'on'=>'search'),
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
			'idObat0' => array(self::BELONGS_TO, 'Obat', 'idObat'),
			'idPegawai0' => array(self::BELONGS_TO, 'Pegawai', 'idPegawai'),
			'idTindakan0' => array(self::BELONGS_TO, 'Tindakan', 'idTindakan'),
			'idWilayah0' => array(self::BELONGS_TO, 'Wilayah', 'idWilayah'),
			'pembayarans' => array(self::HAS_MANY, 'Pembayaran', 'idPasien'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idTindakan' => 'Id Tindakan',
			'idObat' => 'Id Obat',
			'idPegawai' => 'Id Pegawai',
			'idWilayah' => 'Id Wilayah',
			'address' => 'Address',
			'jenisKelamin' => 'Jenis Kelamin',
			'statusPembayaran' => 'Status Pembayaran',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('idTindakan',$this->idTindakan);
		$criteria->compare('idObat',$this->idObat);
		$criteria->compare('idPegawai',$this->idPegawai);
		$criteria->compare('idWilayah',$this->idWilayah);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('jenisKelamin',$this->jenisKelamin,true);
		$criteria->compare('statusPembayaran',$this->statusPembayaran);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pasien the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
