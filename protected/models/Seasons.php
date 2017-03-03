<?php

/**
 * This is the model class for table "tbl_seasons".
 *
 * The followings are the available columns in table 'tbl_seasons':
 * @property integer $id
 * @property string $season_name
 * @property integer $season_number
 * @property integer $season_series_number
 *
 * The followings are the available model relations:
 * @property TblSeries $seasonSeriesNumber
 */
class Seasons extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_seasons';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('season_number, season_series_number', 'numerical', 'integerOnly'=>true),
			array('season_name', 'length', 'max'=>180),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, season_name, season_number, season_series_number', 'safe', 'on'=>'search'),
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
			'seasonSeriesNumber' => array(self::BELONGS_TO, 'TblSeries', 'season_series_number'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'season_name' => 'Season Name',
			'season_number' => 'Season Number',
			'season_series_number' => 'Season Series Number',
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
		$criteria->compare('season_name',$this->season_name,true);
		$criteria->compare('season_number',$this->season_number);
		$criteria->compare('season_series_number',$this->season_series_number);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Seasons the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function checkAccess($seriesId)
	{
		echo 'id: '.$seriesId.' ...';
		echo 'check access model called...';
	}
}
