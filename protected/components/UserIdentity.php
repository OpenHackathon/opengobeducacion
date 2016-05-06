<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
/*
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	/*
	public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}*/

/** * UserIdentity represents the data needed to identity a user. 
* It contains the authentication method that checks if the provided 
* data can identity the user. */ 

class UserIdentity extends CUserIdentity { 
	
	private $_id;
	private $_role;
	private $_efector_id;
	public $usuariotipo;	

	


	public function authenticate(){ 
		$username=strtolower($this->username);
		$user=Usuario::model()->find('LOWER(username)=?',array($username));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			$this->_id=$user->id;
			$this->_role=$user->usuariotipo_id;
			$this->_efector_id=$user->efector_id;
			
			



			$this->setState('role', $user->usuariotipo_id);
			$this->setState('area', $user->area_id);
			$this->setState('efector_id', $user->efector_id);
			
			$this->username=$user->username;			
			$this->errorCode=self::ERROR_NONE;

			/*Consultamos los datos del usuario por el username ($user->username) */
			$info_usuario = Usuario::model()->find('LOWER(username)=?', array($user->username));
			/*En las vistas tendremos disponibles last_login y perfil pueden setear las que requieran */
			$this->setState('lastlogin',$info_usuario->lastlogin);
			//$this->setState('perfil',$info_usuario->perfil);

			/*Actualizamos el last_login del usuario que se esta autenticando ($user->username) */
			$sql = "update Usuario set lastlogin = now() where username='$user->username'";
			$connection = Yii::app() -> db;
			$command = $connection -> createCommand($sql);
			$command -> execute();


			Yii::app()->session->add('ses_nama',$this->username);

			Yii::app()->session['area_id'] = $info_usuario->area_id;
        	Yii::app()->session['id'] = $info_usuario->id;
        	Yii::app()->session['loggedin'] = true;
        	Yii::app()->session['efector_id'] = $info_usuario->efector_id;

			

		}
		return $this->errorCode==self::ERROR_NONE;
	}

	public function getId(){
		return $this->_id;
	}


	public function getRole(){
		return $this->_role;
	}


	

	

}
