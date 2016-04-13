<?php

/**
 * This is the model class for table "oitm".
 *
 * The followings are the available columns in table 'oitm':
 * @property string $MaSP
 * @property string $TenSP
 * @property string $MaNganh
 * @property string $MaLoai
 * @property string $MaNhan
 * @property string $TenNganh
 * @property string $TenLoai
 * @property string $TenNhan
 * @property string $MaNguoiTao
 * @property string $TenNguoiTao
 * @property string $NgayTao
 * @property string $TinhTrang
 * @property string $TenVietTat
 * @property string $MoTa
 * @property string $Color
 * @property string $QLTonKho
 * @property string $QLSerial
 * @property string $MaNCC
 * @property string $TenNCC
 * @property string $Link
 * @property string $HinhAnh
 * @property string $ChieuDai
 * @property string $CanNang
 * @property string $DoSau
 * @property string $Lure
 * @property string $Line
 * @property string $PE
 * @property string $Ring
 * @property string $Hook
 * @property double $Price
 */
class Oitm extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oitm';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Price', 'numerical'),
			array('MaSP, MaNganh, MaLoai, MaNhan, MaNguoiTao, QLTonKho, QLSerial, MaNCC', 'length', 'max'=>10),
			array('TenSP, TenNganh, TenLoai, TenNhan, TenNguoiTao, TenVietTat, Color, TenNCC, Link, HinhAnh', 'length', 'max'=>255),
			array('TinhTrang', 'length', 'max'=>1),
			array('ChieuDai, CanNang, DoSau, Lure, Line, PE, Ring, Hook', 'length', 'max'=>50),
			array('NgayTao, MoTa', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MaSP, TenSP, MaNganh, MaLoai, MaNhan, TenNganh, TenLoai, TenNhan, MaNguoiTao, TenNguoiTao, NgayTao, TinhTrang, TenVietTat, MoTa, Color, QLTonKho, QLSerial, MaNCC, TenNCC, Link, HinhAnh, ChieuDai, CanNang, DoSau, Lure, Line, PE, Ring, Hook, Price', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'MaSP' => 'Ma Sp',
			'TenSP' => 'Ten Sp',
			'MaNganh' => 'Ma Nganh',
			'MaLoai' => 'Ma Loai',
			'MaNhan' => 'Ma Nhan',
			'TenNganh' => 'Ten Nganh',
			'TenLoai' => 'Ten Loai',
			'TenNhan' => 'Ten Nhan',
			'MaNguoiTao' => 'Ma Nguoi Tao',
			'TenNguoiTao' => 'Ten Nguoi Tao',
			'NgayTao' => 'Ngay Tao',
			'TinhTrang' => 'Tinh Trang',
			'TenVietTat' => 'Ten Viet Tat',
			'MoTa' => 'Mo Ta',
			'Color' => 'Color',
			'QLTonKho' => 'Qlton Kho',
			'QLSerial' => 'Qlserial',
			'MaNCC' => 'Ma Ncc',
			'TenNCC' => 'Ten Ncc',
			'Link' => 'Link',
			'HinhAnh' => 'Hinh Anh',
			'ChieuDai' => 'Chieu Dai',
			'CanNang' => 'Can Nang',
			'DoSau' => 'Do Sau',
			'Lure' => 'Lure',
			'Line' => 'Line',
			'PE' => 'Pe',
			'Ring' => 'Ring',
			'Hook' => 'Hook',
			'Price' => 'Price',
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

		$criteria->compare('MaSP',$this->MaSP,true);
		$criteria->compare('TenSP',$this->TenSP,true);
		$criteria->compare('MaNganh',$this->MaNganh,true);
		$criteria->compare('MaLoai',$this->MaLoai,true);
		$criteria->compare('MaNhan',$this->MaNhan,true);
		$criteria->compare('TenNganh',$this->TenNganh,true);
		$criteria->compare('TenLoai',$this->TenLoai,true);
		$criteria->compare('TenNhan',$this->TenNhan,true);
		$criteria->compare('MaNguoiTao',$this->MaNguoiTao,true);
		$criteria->compare('TenNguoiTao',$this->TenNguoiTao,true);
		$criteria->compare('NgayTao',$this->NgayTao,true);
		$criteria->compare('TinhTrang',$this->TinhTrang,true);
		$criteria->compare('TenVietTat',$this->TenVietTat,true);
		$criteria->compare('MoTa',$this->MoTa,true);
		$criteria->compare('Color',$this->Color,true);
		$criteria->compare('QLTonKho',$this->QLTonKho,true);
		$criteria->compare('QLSerial',$this->QLSerial,true);
		$criteria->compare('MaNCC',$this->MaNCC,true);
		$criteria->compare('TenNCC',$this->TenNCC,true);
		$criteria->compare('Link',$this->Link,true);
		$criteria->compare('HinhAnh',$this->HinhAnh,true);
		$criteria->compare('ChieuDai',$this->ChieuDai,true);
		$criteria->compare('CanNang',$this->CanNang,true);
		$criteria->compare('DoSau',$this->DoSau,true);
		$criteria->compare('Lure',$this->Lure,true);
		$criteria->compare('Line',$this->Line,true);
		$criteria->compare('PE',$this->PE,true);
		$criteria->compare('Ring',$this->Ring,true);
		$criteria->compare('Hook',$this->Hook,true);
		$criteria->compare('Price',$this->Price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Oitm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
