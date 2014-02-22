<?php

/**
 * This is the model class for table "inquiry".
 *
 * The followings are the available columns in table 'inquiry':
 * @property integer $id
 * @property string $in_date
 * @property string $msg
 * @property string $num_of_player
 * @property string $date
 * @property string $status
 * @property integer $member_id
 * @property integer $activity_id
 *
 * The followings are the available model relations:
 * @property Member $member
 * @property Activity $activity
 */
class Inquiry extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inquiry';
	}
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, in_date, msg, num_of_player, date, activity_id', 'required'),
			array('id, member_id, activity_id', 'numerical', 'integerOnly'=>true),
			array('num_of_player', 'length', 'max'=>45),
			array('status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, in_date, msg, num_of_player, date, status, member_id, activity_id', 'safe', 'on'=>'search'),
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
			'member' => array(self::BELONGS_TO, 'Member', 'member_id'),
			'activity' => array(self::BELONGS_TO, 'Activity', 'activity_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'in_date' => 'In Date',
			'msg' => 'Msg',
			'num_of_player' => 'Num Of Player',
			'date' => 'Date',
			'status' => 'Status',
			'member_id' => 'Member',
			'activity_id' => 'Activity',
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
		$criteria->compare('in_date',$this->in_date,true);
		$criteria->compare('msg',$this->msg,true);
		$criteria->compare('num_of_player',$this->num_of_player,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('member_id',$this->member_id);
		$criteria->compare('activity_id',$this->activity_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inquiry the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
