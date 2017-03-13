<?php

/**
 * This is the model class for table "tbl_episode".
 *
 * The followings are the available columns in table 'tbl_episode':
 * @property integer $id
 * @property string $episode_name
 * @property string $thumbnail
 * @property string $poster
 * @property string $director
 * @property string $description
 * @property integer $season_id
 *
 * The followings are the available model relations:
 * @property TblSeasons $season
 * @property TblEpisodeActors[] $tblEpisodeActors
 */
class Episode extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_episode';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('episode_name', 'required'),
			array('season_id', 'numerical', 'integerOnly'=>true),
			array('episode_name, thumbnail, poster, director, description', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, episode_name, thumbnail, poster, director, description, season_id', 'safe', 'on'=>'search'),
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
			'season' => array(self::BELONGS_TO,'Seasons', 'season_id'),
			'EpisodeActors' => array(self::HAS_MANY, 'EpisodeActors', 'episode_id'),
			'actors' => array(self::MANY_MANY, 'Actors', 'tbl_episode_actors(episode_id, actor_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'episode_name' => 'Episode Name',
			'thumbnail' => 'Thumbnail',
			'poster' => 'Poster',
			'director' => 'Director',
			'description' => 'Description',
			'season_id' => 'Season',
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
		$criteria->compare('episode_name',$this->episode_name,true);
		$criteria->compare('thumbnail',$this->thumbnail,true);
		$criteria->compare('poster',$this->poster,true);
		$criteria->compare('director',$this->director,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('season_id',$this->season_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Episode the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getEpisodesBySeasons($seasonId)
	{
		// Fetch actors
//		$episode=Episode::model()->with('actors')->findAll();

//		$episode = Episode::model()->findByPk($seasonId);
//		$b = $episode->actors;

//		print_r($episode);exit;
		$criteria = new CDbCriteria();
		$criteria->compare('season_id', '='. $seasonId);
		$episode = Episode::model()->findAll($criteria);
		return $episode;
	}

	public function getEpisodesBySeasonsCurl($seasonId,$offset=0,$limit=10)
	{
		$seasonsIdDb = Seasons::model()->findByPk($seasonId);
		$ar = array();
		if (!$seasonsIdDb) {
			$ar['status'] = 'error';
			$ar['msg'] = 'Invalid Request: Season doesn\'t exist';
			$ar['data'] = array();
		} else {
			$criteria = new CDbCriteria();
			$criteria->compare('season_id', '='. $seasonId);
			$criteria->offset = $offset;
			$criteria->limit = $limit;
			$episode = Episode::model()->findAll($criteria);

			$ar['status'] = 'success';
			$ar['msg'] = 'Success';
			$ar['data'] = array();
			foreach ($episode as $data) {
				$ar['data'][] = array(
					'id' => $data->id,
					'episode_name' => $data->episode_name,
					'thumbnail' => $data->thumbnail,
					'poster' => $data->poster,
					'director' => $data->director,
					'description' => $data->description,
				);
			}
		}



		// For curl
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


	public function getEpisodeDetail($episodeId){
		// Many to Many Relationship: Fetch data from Episode, EpisodeActors(link table), Actors
		$episode=Episode::model()->with('EpisodeActors','actors')->find(array(
			'condition'=>"EpisodeActors.episode_id=$episodeId AND EpisodeActors.actor_id=actors.id"
		));
		return $episode;
	}

}