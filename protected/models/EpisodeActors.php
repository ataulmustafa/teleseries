<?php

/**
 * This is the model class for table "tbl_episode_actors".
 *
 * The followings are the available columns in table 'tbl_episode_actors':
 * @property integer $id
 * @property integer $episode_id
 * @property integer $actor_id
 *
 * The followings are the available model relations:
 * @property TblActors $actor
 * @property TblEpisode $episode
 */
class EpisodeActors extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_episode_actors';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('episode_id, actor_id', 'required'),
			array('episode_id, actor_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, episode_id, actor_id', 'safe', 'on'=>'search'),
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
			'actor' => array(self::BELONGS_TO, 'TblActors', 'actor_id'),
			'episode' => array(self::BELONGS_TO, 'TblEpisode', 'episode_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'episode_id' => 'Episode',
			'actor_id' => 'Actor',
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
		$criteria->compare('episode_id',$this->episode_id);
		$criteria->compare('actor_id',$this->actor_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EpisodeActors the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
