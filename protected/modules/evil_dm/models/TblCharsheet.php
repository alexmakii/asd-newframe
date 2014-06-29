<?php

/**
 * This is the model class for table "tbl_charsheet".
 *
 * The followings are the available columns in table 'tbl_charsheet':
 * @property string $id
 * @property string $name
 * @property string $pass
 * @property string $privx_pass
 * @property string $mail
 * @property string $icq
 * @property string $www
 * @property string $faculty
 * @property string $dreamfaculty
 * @property integer $kurs
 * @property string $ip_address
 * @property string $face
 * @property integer $balls
 * @property string $blvl
 * @property integer $brpg
 * @property string $rasa
 * @property string $dation
 * @property string $anim
 * @property string $bio
 * @property string $phis
 * @property string $mag
 * @property string $char_skills
 * @property string $item
 * @property string $inventory
 * @property string $look
 * @property string $ch
 * @property string $other
 * @property string $avatar
 * @property string $status
 * @property string $privx_status
 * @property integer $viewcont
 * @property integer $rass
 * @property string $marks
 * @property integer $today
 * @property string $dataf
 * @property integer $last_visit
 * @property integer $bank
 * @property string $stud
 * @property string $oldworks
 * @property string $discuss
 * @property integer $state
 */
class TblCharsheet extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_charsheet';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pass, privx_pass, faculty, face, rasa, dation, bio, phis, mag, look, ch, state', 'required'), //char_skills,
			array('kurs, balls, brpg, viewcont, rass, today, last_visit, bank, state', 'numerical', 'integerOnly'=>true),
			array('name, mail, dreamfaculty, avatar, status, stud', 'length', 'max'=>200),
			array('pass, face', 'length', 'max'=>50),
			array('privx_pass', 'length', 'max'=>32),
			array('icq, www', 'length', 'max'=>20),
			array('faculty', 'length', 'max'=>1),
			array('ip_address', 'length', 'max'=>30),
			array('blvl, dataf', 'length', 'max'=>10),
			array('rasa, anim', 'length', 'max'=>100),
			array('dation', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, pass, privx_pass, mail, icq, www, faculty, dreamfaculty, kurs, ip_address, face, balls, blvl, brpg, rasa, dation, anim, bio, phis, mag, char_skills, item, inventory, look, ch, other, avatar, status, privx_status, viewcont, rass, marks, today, dataf, last_visit, bank, stud, oldworks, discuss, state', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Name',
			'pass' => 'Pass',
			'privx_pass' => 'Privx Pass',
			'mail' => 'Mail',
			'icq' => 'Icq',
			'www' => 'Www',
			'faculty' => 'Faculty',
			'dreamfaculty' => 'Dreamfaculty',
			'kurs' => 'Kurs',
			'ip_address' => 'Ip Address',
			'face' => 'Face',
			'balls' => 'Balls',
			'blvl' => 'Blvl',
			'brpg' => 'Brpg',
			'rasa' => 'Rasa',
			'dation' => 'Dation',
			'anim' => 'Anim',
			'bio' => 'Bio',
			'phis' => 'Phis',
			'mag' => 'Mag',
			'char_skills' => 'Char Skills',
			'item' => 'Item',
			'inventory' => 'Inventory',
			'look' => 'Look',
			'ch' => 'Ch',
			'other' => 'Other',
			'avatar' => 'Avatar',
			'status' => 'Status',
			'privx_status' => 'Privx Status',
			'viewcont' => 'Viewcont',
			'rass' => 'Rass',
			'marks' => 'Marks',
			'today' => 'Today',
			'dataf' => 'Dataf',
			'last_visit' => 'Last Visit',
			'bank' => 'Bank',
			'stud' => 'Stud',
			'oldworks' => 'Oldworks',
			'discuss' => 'Discuss',
			'state' => 'State',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('pass',$this->pass,true);
		$criteria->compare('privx_pass',$this->privx_pass,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('icq',$this->icq,true);
		$criteria->compare('www',$this->www,true);
		$criteria->compare('faculty',$this->faculty,true);
		$criteria->compare('dreamfaculty',$this->dreamfaculty,true);
		$criteria->compare('kurs',$this->kurs);
		$criteria->compare('ip_address',$this->ip_address,true);
		$criteria->compare('face',$this->face,true);
		$criteria->compare('balls',$this->balls);
		$criteria->compare('blvl',$this->blvl,true);
		$criteria->compare('brpg',$this->brpg);
		$criteria->compare('rasa',$this->rasa,true);
		$criteria->compare('dation',$this->dation,true);
		$criteria->compare('anim',$this->anim,true);
		$criteria->compare('bio',$this->bio,true);
		$criteria->compare('phis',$this->phis,true);
		$criteria->compare('mag',$this->mag,true);
		$criteria->compare('char_skills',$this->char_skills,true);
		$criteria->compare('item',$this->item,true);
		$criteria->compare('inventory',$this->inventory,true);
		$criteria->compare('look',$this->look,true);
		$criteria->compare('ch',$this->ch,true);
		$criteria->compare('other',$this->other,true);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('privx_status',$this->privx_status,true);
		$criteria->compare('viewcont',$this->viewcont);
		$criteria->compare('rass',$this->rass);
		$criteria->compare('marks',$this->marks,true);
		$criteria->compare('today',$this->today);
		$criteria->compare('dataf',$this->dataf,true);
		$criteria->compare('last_visit',$this->last_visit);
		$criteria->compare('bank',$this->bank);
		$criteria->compare('stud',$this->stud,true);
		$criteria->compare('oldworks',$this->oldworks,true);
		$criteria->compare('discuss',$this->discuss,true);
		$criteria->compare('state',$this->state);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblCharsheet the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
