<?php

/**
 * This is the model class for table "tbl_actors".
 *
 * The followings are the available columns in table 'tbl_actors':
 * @property integer $id
 * @property string $actor_name
 *
 * The followings are the available model relations:
 * @property TblEpisodeActors[] $tblEpisodeActors
 */
class Actors extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_actors';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('actor_name', 'required'),
			array('actor_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, actor_name', 'safe', 'on'=>'search'),
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
			'EpisodeActors' => array(self::HAS_MANY, 'TblEpisodeActors', 'actor_id'),
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
			'actor_name' => 'Actor Name',
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
		$criteria->compare('actor_name',$this->actor_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Actors the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
