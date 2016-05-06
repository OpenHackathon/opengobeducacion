<?php

/**
 * This is the model class for table "Cursodivision".
 *
 * The followings are the available columns in table 'Cursodivision':
 * @property integer $id
 * @property string $cue
 * @property string $anexo
 * @property string $cueanexo
 * @property string $curso
 * @property string $division
 * @property string $nivelensenanza
 * @property string $ciclo
 * @property string $orientacion
 * @property string $modalidad
 */
class Cursodivision extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Cursodivision';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cue, anexo, cueanexo, curso, division, nivelensenanza, ciclo, orientacion, modalidad', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cue, anexo, cueanexo, curso, division, nivelensenanza, ciclo, orientacion, modalidad', 'safe', 'on'=>'search'),
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
			'id' => 'Id',
			'cue' => 'Cue',
			'anexo' => 'Anexo',
			'cueanexo' => 'Cueanexo',
			'curso' => 'Curso',
			'division' => 'Division',
			'nivelensenanza' => 'Nivelensenanza',
			'ciclo' => 'Ciclo',
			'orientacion' => 'Orientacion',
			'modalidad' => 'Modalidad',
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

		$criteria->compare('id',$this->id);

		$criteria->compare('cue',$this->cue,true);

		$criteria->compare('anexo',$this->anexo,true);

		$criteria->compare('cueanexo',$this->cueanexo,true);

		$criteria->compare('curso',$this->curso,true);

		$criteria->compare('division',$this->division,true);

		$criteria->compare('nivelensenanza',$this->nivelensenanza,true);

		$criteria->compare('ciclo',$this->ciclo,true);

		$criteria->compare('orientacion',$this->orientacion,true);

		$criteria->compare('modalidad',$this->modalidad,true);

		return new CActiveDataProvider('Cursodivision', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return Cursodivision the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}