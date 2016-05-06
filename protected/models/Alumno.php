<?php

/**
 * This is the model class for table "Alumno".
 *
 * The followings are the available columns in table 'Alumno':
 * @property string $cue
 * @property string $anexo
 * @property string $establecimiento_id
 * @property string $cursodivision_id
 * @property string $curso
 * @property string $division
 * @property string $sexo
 * @property string $fechanacimiento
 * @property string $fechanac
 * @property integer $id
 */
class Alumno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Alumno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cue, anexo, establecimiento_id, cursodivision_id, curso, division, sexo, fechanacimiento', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cue, anexo, establecimiento_id, cursodivision_id, curso, division, sexo, fechanacimiento, id', 'safe', 'on'=>'search'),
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
			'cue' => 'Cue',
			'anexo' => 'Anexo',
			'establecimiento_id' => 'Establecimiento',
			'cursodivision_id' => 'Cursodivision',
			'curso' => 'Curso',
			'division' => 'Division',
			'sexo' => 'Sexo',
			'fechanacimiento' => 'Fechanacimiento',
			'id' => 'Id',
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
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cue',$this->cue,true);

		$criteria->compare('anexo',$this->anexo,true);

		$criteria->compare('establecimiento_id',$this->establecimiento_id,true);

		$criteria->compare('cursodivision_id',$this->cursodivision_id,true);

		$criteria->compare('curso',$this->curso,true);

		$criteria->compare('division',$this->division,true);

		$criteria->compare('sexo',$this->sexo,true);

		$criteria->compare('fechanacimiento',$this->fechanacimiento,true);

		$criteria->compare('id',$this->id);

		return new CActiveDataProvider('Alumno', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return Alumno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}