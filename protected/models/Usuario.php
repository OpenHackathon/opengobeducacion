<?php

/**
 * This is the model class for table "Usuario".
 *
 * The followings are the available columns in table 'Usuario':
 * @property integer $id
 * @property string $nya
 * @property string $username
 * @property integer $area_id
 * @property string $password
 * @property string $email
 * @property string $lastlogin
 * @property integer $usuariotipo_id
 * @property integer $liquidacion_id
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('area_id, usuariotipo_id', 'required'),
			array('area_id, usuariotipo_id, liquidacion_id', 'numerical', 'integerOnly'=>true),
			array('nya, username', 'length', 'max'=>150),
			array('password, email', 'length', 'max'=>45),
			array('lastlogin', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nya, username, area_id, password, email, lastlogin, usuariotipo_id, liquidacion_id', 'safe', 'on'=>'search'),
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
			'actualizacions' => array(self::HAS_MANY, 'Actualizacion', 'usuario_id'),
			'capacitacions' => array(self::HAS_MANY, 'Capacitacion', 'usuario_id'),
			'contactos' => array(self::HAS_MANY, 'Contacto', 'usuario_id'),
			'expedientes' => array(self::HAS_MANY, 'Expediente', 'usuario_id'),
			'fichas' => array(self::HAS_MANY, 'Ficha', 'usuario_id'),
			'incidencias' => array(self::HAS_MANY, 'Incidencia', 'usuario_id'),
			'medicas' => array(self::HAS_MANY, 'Medica', 'responsable_id'),
			'movimientos' => array(self::HAS_MANY, 'Movimiento', 'usuario_id'),
			'area' => array(self::BELONGS_TO, 'Area', 'area_id'),
			'usuariotipo' => array(self::BELONGS_TO, 'Usuariotipo', 'usuariotipo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'nya' => 'Nombre y appellido',
			'username' => 'Nombre de Usuario',
			'area_id' => 'Area',
			'password' => 'Password',
			'email' => 'Email',
			'lastlogin' => 'Lastlogin',
			'usuariotipo_id' => 'Usuariotipo',
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

		$criteria->compare('nya',$this->nya,true);

		$criteria->compare('username',$this->username,true);

		$criteria->compare('area_id',$this->area_id);

		$criteria->compare('password',$this->password,true);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('lastlogin',$this->lastlogin,true);

		$criteria->compare('usuariotipo_id',$this->usuariotipo_id);

		$criteria->compare('liquidacion_id',$this->usuariotipo_id);

		return new CActiveDataProvider('Usuario', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	public function validatePassword($password){
		return $this->hashPassword($password)===$this->password;
	}

	public function hashPassword($password){
		return md5($password);
	}

	public function isAdmin(){

		if(!Yii::app()->user->isGuest && (Yii::app()->user->role == Tools::USUARIO_ADMIN)){
			return true;
		}else{
			return false;
		}

	}


	public function isRegistrado(){

		if(!Yii::app()->user->isGuest && (Yii::app()->user->role == Tools::USUARIO_REGISTRADO)){
			return true;
		}else{
			return false;
		}
		
	}

	public function isEfector(){

		if(!Yii::app()->user->isGuest && (Yii::app()->user->role == Tools::USUARIO_EFECTOR)){
			return true;
		}else{
			return false;
		}
		
	}


}