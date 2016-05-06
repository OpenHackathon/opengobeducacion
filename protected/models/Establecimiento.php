<?php

/**
 * This is the model class for table "Establecimiento".
 *
 * The followings are the available columns in table 'Establecimiento':
 * @property string $id
 * @property string $nombre
 * @property string $regimen
 * @property string $longitud
 * @property string $latitud
 * @property string $localidad
 * @property string $departamento
 * @property string $jurisdiccion
 * @property string $f9
 * @property integer $departamento_id
 */
class Establecimiento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Establecimiento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id, nombre, regimen, longitud, latitud, localidad, departamento, jurisdiccion, f9', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, regimen, longitud, latitud, localidad, departamento, jurisdiccion, f9,departamento_id', 'safe', 'on'=>'search'),
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
			'nombre' => 'Nombre',
			'regimen' => 'Regimen',
			'longitud' => 'Longitud',
			'latitud' => 'Latitud',
			'localidad' => 'Localidad',
			'departamento' => 'Departamento',
			'jurisdiccion' => 'Jurisdiccion',
			'f9' => 'F9',
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

		$criteria->compare('id',$this->id,true);

		$criteria->compare('nombre',$this->nombre,true);

		$criteria->compare('regimen',$this->regimen,true);

		$criteria->compare('longitud',$this->longitud,true);

		$criteria->compare('latitud',$this->latitud,true);

		$criteria->compare('localidad',$this->localidad,true);

		$criteria->compare('departamento',$this->departamento,true);

		$criteria->compare('jurisdiccion',$this->jurisdiccion,true);

		$criteria->compare('departamento_id',$this->departamento_id);
		

		$criteria->compare('f9',$this->f9,true);

		return new CActiveDataProvider('Establecimiento', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return Establecimiento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}