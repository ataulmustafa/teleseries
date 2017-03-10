<?php

/**
 * This is the model class for table "tbl_seasons".
 *
 * The followings are the available columns in table 'tbl_seasons':
 * @property integer $id
 * @property string $season_name
 * @property integer $season_number
 * @property integer $season_series_number
 * @property string $season_description
 *
 * The followings are the available model relations:
 * @property TblEpisode[] $tblEpisodes
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
			array('season_description', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, season_name, season_number, season_series_number, season_description', 'safe', 'on'=>'search'),
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
			'episodes' => array(self::HAS_MANY, 'Episode', 'season_id'),
			'seasonSeriesNumber' => array(self::BELONGS_TO, 'Series', 'season_series_number'),
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
			'season_description' => 'Season Description',
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
		$criteria->compare('season_description',$this->season_description,true);

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

	public function getSeasonsBySeries($seriesId)
	{
		$criteria = new CDbCriteria();
		$criteria->compare('season_series_number', '='. $seriesId);
		$seasons = Seasons::model()->findAll($criteria);
/*
		$ar = array();
		foreach ($seasons as $data){
			$ar[] = array(
				'season_name' => $data->season_name,
				'season_number' => $data->season_number,
				'season_series_number' => $data->season_series_number,
				'season_description' => $data->season_description,
			);
		}
		$seasons = json_encode($ar, true);

		print_r($seasons);exit;
*/
		return $seasons;
	}


	public function getSeasonsBySeriesCurl($seriesId)
	{
		$seriesIdDb = Series::model()->findByPk($seriesId);
		$ar = array();
		if (!$seriesIdDb) {
			$ar['status'] = 'error';
			$ar['msg'] = 'Invalid Request: Series doesn\'t exist';
			$ar['data'] = array();
		} else {
			$criteria = new CDbCriteria();
			$criteria->compare('season_series_number', '=' . $seriesId);
			$seasons = Seasons::model()->findAll($criteria);

			$ar['status'] = 'success';
			$ar['msg'] = 'Success';
			$ar['data'] = array();
			foreach ($seasons as $data) {
				$ar['data'][] = array(
					'id' => $data->id,
					'season_name' => $data->season_name,
					'season_number' => $data->season_number,
					'season_series_number' => $data->season_series_number,
					'season_description' => $data->season_description,
				);
			}
		}
		// headers for not caching the results
		header('Cache-Control: no-cache, must-revalidate');
//		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');

		// headers to tell that result is JSON
		header('Content-type: application/json');
		$statusHeader = 'HTTP/1.1 200 OK';
		header($statusHeader);
		$seasons = json_encode($ar, true);
		echo $seasons;
		Yii::app()->end();
	}
}