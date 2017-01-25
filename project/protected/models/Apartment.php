<?php

/**
 * This is the model class for table "apartment".
 *
 * The followings are the available columns in table 'apartment':
 * @property integer $id
 * @property string $area
 * @property string $units_available
 * @property string $description
 * @property string $image
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property DetailsPlano[] $detailsPlanos
 */
class Apartment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'apartment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('area, image', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('area, units_available, image', 'length', 'max'=>100),
			array('description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, area, units_available, description, image, status', 'safe', 'on'=>'search'),
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
			'detailsPlanos' => array(self::HAS_MANY, 'DetailsPlano', 'apartment_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'area' => 'Area',
			'units_available' => 'Units Available',
			'description' => 'Description',
			'image' => 'Image',
			'status' => 'Status',
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
		$criteria->compare('area',$this->area,true);
		$criteria->compare('units_available',$this->units_available,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Apartment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
