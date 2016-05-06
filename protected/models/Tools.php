<?php

class Tools {

    // Método estático para no tener que crear una instancia
	public static function fechaParaBase($fecha){
                
		if(!empty($fecha)){
	     	$fecha = str_replace("/", "-", $fecha);
			$fecha = Yii::app()->dateFormatter->format("yyyy-MM-dd", $fecha);
		}

	    return $fecha;

    }


    // Método estático para no tener que crear una instancia
	public static function fechaParaMostrar($fecha){
        
		if(!empty($fecha)){

			if($fecha == '1900-12-31'){
				$fecha = '31/12/1900';
			}else{
				($fecha != '0000-00-00') ? $fecha = Yii::app()->dateFormatter->format("dd/MM/yyyy", $fecha) : $fecha='';
			}
	     	
		}

	    return $fecha;

    }

    // Método estático para no tener que crear una instancia
	public static function fechaHoraParaMostrar($fecha){
        
		if(!empty($fecha)){

			if($fecha == '1900-12-31'){
				$fecha = '31/12/1900';
			}else{
				($fecha != '0000-00-00') ? $fecha = Yii::app()->dateFormatter->format("dd/MM/yyyy hh:mm:ss", $fecha) : $fecha='';
			}
	     	
		}

	    return $fecha;

    }
     

	public static function obtenerMes($mes){

		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		$mesdetalle = $meses[$mes - 1] ;

		return $mesdetalle;
	}

	public static function obtenerMeses(){

		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");		

		return $meses;
	}

	


	public static function formatPrecio($precio){
		$parte = explode('.', $precio);
		if($parte['1'] == 00){
			$precio = number_format($precio,0,'.','');	
		}else{
			$precio = number_format($precio,2,'.','');	
		}

		return $precio;
		
	}

	public static function formatPrecioOut($precio){
		//$parte = explode('.', $precio);		
		if(is_numeric($precio)){
			$precio = number_format($precio,2,',','');	
		}
		return $precio;		
	}

	public static function formatPrecioRound($precio){
		//$parte = explode('.', $precio);		
		$precio = number_format($precio,0,',','');	
		$precio = number_format($precio,2,',','');
		return $precio;		
	}


	public static function obtenerFamilia($efector_id){
		
		//Variable para buscar efector
		$efector_id = $efector_id;

		//Busco si es efector tercer osino busco los hijos.
		$efector_inicio = Efector::model()->findbyPk($efector_id);	

		if($efector_inicio->administrado == 0){
			$efector = $efector_inicio;
		}else{
			$efectores_hijos = Efectoradmin::model()->findByAttributes(array('efectordelegado_id'=>$efector_inicio->id));
			$efector = Efector::model()->findbyPk($efectores_hijos->efectoradmin_id);				
		}

		$efectores = Efectoradmin::model()->findAllByAttributes(array('efectoradmin_id'=>$efector->id));

		
		//Obtengo todos los efectores juntos
		$efectoresjuntos = array();
		//array_push($efectoresjuntos, $efector);
		if(count($efectores)>0){
			foreach ($efectores as $key => $efe) {					
				$efec = Efector::model()->findbyPk($efe->efectordelegado_id);
				array_push($efectoresjuntos, $efec);
				$aux[$key] = $efec->cuie;
			}			
		}

		if(count($aux)>1){
			array_multisort($aux, SORT_ASC, $efectoresjuntos);
		}
		array_unshift($efectoresjuntos,$efector);

		return $efectoresjuntos;		
	}



	public static function expedienteFamiliar($expeanterior, $expeactual){
		
		$efectores = Tools::obtenerFamilia($expeactual->efector_id);

		$mismogrupo = false;

		foreach ($efectores as $efector) {
			$arraycompa[] = $efector->id;
		}

		if (in_array($expeanterior->efector_id, $arraycompa)) {
			if($expeactual->periodo_id == $expeanterior->periodo_id){
				$mismogrupo = true;
			}
		}
		
		return $mismogrupo;
	}


	public static function obtenerExpedienteFamiliar($efector, $periodo){
		
		$efectores = Tools::obtenerFamilia($efector);

		$encontro = false;

		foreach ($efectores as $efector) {
			//$arraycompa[] = $efector->id;
			$expediente = Expediente::model()->findByAttributes(array('efector_id'=>$efector->id, 'periodo_id'=>$periodo));
			if(count($expediente)>0 && $expediente->montofactura != 0){
				$expedientedevolver = $expediente;
				$encontro = true;
				break;
			}
		}
		
		if($encontro == true){
			return $expedientedevolver;
		}else{
			return false;
		}
			
	}

	public static function obtenerPeriodoConsulta(){

		
		if(isset($_GET['Periodo']['id'])){
			//si realizo una seleccion de periodo muestra el periodo seleccionado
			$periodo_id = $_GET['Periodo']['id'];
			$periodo = Periodo::model()->findbyPk($periodo_id);			
		}
		else if(isset($_GET['periodo_id'])){
			//si realizo una seleccion de periodo muestra el periodo seleccionado
			$periodo_id = $_GET['periodo_id'];
			$periodo = Periodo::model()->findbyPk($periodo_id);			
		}
		else if(isset($_GET['Expediente']['periodo_id'])){
			//si realizo una seleccion de periodo muestra el periodo seleccionado
			$periodo_id = $_GET['Expediente']['periodo_id'];
			$periodo = Periodo::model()->findbyPk($periodo_id);			
		}
		else if(isset($_GET['Beneficiario']['periodo_id'])){
			//si realizo una seleccion de periodo muestra el periodo seleccionado
			$periodo_id = $_GET['Beneficiario']['periodo_id'];
			$periodo = Periodo::model()->findbyPk($periodo_id);			
		}
		else{		
			//Obtiene el mes de trabajo - Del mes actual siempre es -2
			$mes = date('m', strtotime("-1 month"));
			$ano = date('Y', strtotime("-1 month"));
			$periodo = Periodo::model()->findByAttributes(array('ano'=>$ano, 'mes'=>$mes,'activoconsulta'=>1));			

			if(!count($periodo)>0){

				//Obtiene el mes de trabajo - Del mes actual siempre es -2
				$mes = date('m', strtotime("-2 month"));
				$ano = date('Y', strtotime("-2 month"));
				$periodo = Periodo::model()->findByAttributes(array('ano'=>$ano, 'mes'=>$mes,'activoconsulta'=>1));

				if(!count($periodo)>0){
					//Obtiene el mes de trabajo - Del mes actual siempre es -2
					$mes = date('m', strtotime("-3 month"));
					$ano = date('Y', strtotime("-3 month"));
					$periodo = Periodo::model()->findByAttributes(array('ano'=>$ano, 'mes'=>$mes,'activoconsulta'=>1));

					if(!count($periodo)>0){
					//Obtiene el mes de trabajo - Del mes actual siempre es -2
					$mes = date('m', strtotime("-4 month"));
					$ano = date('Y', strtotime("-4 month"));
					$periodo = Periodo::model()->findByAttributes(array('ano'=>$ano, 'mes'=>$mes,'activoconsulta'=>1));
					}
				}
				
			}
		}

		//print_r($periodo);
		
		return $periodo;

	}


	public static function obtenerTablaConsulta($periodo_id){


		$periodo = Periodo::model()->findbyPk($periodo_id);

		$ano = substr($periodo->ano,2,2);
		$mes = $periodo->mes;

		$table = 'Beneficiario'.$mes.$ano;

		return $table;
	}


	public static function mostrarFechaVisita($fecha){

		if($fecha == '0000-00-00' || $fecha == '1900-12-31'){

			$fechahoy = date('Y-m-j');
			$fechamostrar = date('Y-m-d',strtotime($fechahoy . "+7 days"));
		}else if($fecha <= date('Y-m-j')){
			$fechahoy = date('Y-m-j');
			$fechamostrar = date('Y-m-d',strtotime($fechahoy . "+7 days"));
		}
		else{
			$fechamostrar = $fecha;
		}

		return $fechamostrar;
	}


	public static function mostrarFechaUltimaPrestacion($fecha){

		if($fecha == '0000-00-00' || $fecha == '1900-12-31'){
			
			$fechamostrar = '';
		}else{
			$fechamostrar = $fecha;
		}

		return $fechamostrar;
	}


	public static function obtenerCuasiFacturaGeneral($ano,$mes,$codpro){

		//ano = Ej: 2015
		//mes = Ej: 08
		//codpro = Ej: 11501

		$ano = substr($ano,-2);

		$cuasi = $ano.$mes.$codpro.'000';

		return $cuasi;

	}


	public static function obtenerCuasiFacturaEfector($ano,$mes,$codpro){

		//ano = Ej: 2015
		//mes = Ej: 08
		//codpro = Ej: 11501

		$ano = substr($ano,-2);

		$cuasi = $ano.$mes.$codpro.'001';

		return $cuasi;
		
	}






	const USUARIO_AREA_MESAENTRADA = 1;
	const USUARIO_AREA_LEGALES = 2;
	const USUARIO_AREA_AUDITORIA = 3;
	const USUARIO_AREA_MEDICA = 4;
	const USUARIO_AREA_ADMINISTRACION = 5;
    const USUARIO_AREA_SISTEMAS = 6;
    const USUARIO_AREA_SISTEMAS_FICHA = 7;
    const USUARIO_AREA_CAPACITACION = 8;
    const USUARIO_AREA_COMUNICACION = 9;
    const USUARIO_AREA_PLANIFICACION = 10;
    const USUARIO_AREA_EFECTOR = 11;
    

    const USUARIO_ADMIN = 1;   
    const USUARIO_REGISTRADO = 2;
    const USUARIO_EFECTOR = 3;


    const SOPORTEREMOTO = 1;
    const SOPORTELOCAL = 2;


	const ESTADOFICHAPENDIENTE = 1;
	const ESTADOFICHACARGADO = 2;

	const TIPOFICHACAMBIO = 1;
	const TIPOFICHARECUPERAR = 2;
	const TIPOFICHABAJA = 3;

	const GRUPO_MI = 1;
	const GRUPO_NG = 2;
	const GRUPO_PC = 3;
	const GRUPO_PN = 4;
	const GRUPO_CC = 5;
	const GRUPO_CN = 6;
	const GRUPO_HA = 7;

	const MOVIMIENTO_ESTADO_USO = 1;
	const MOVIMIENTO_ESTADO_LISTO = 2;
	const MOVIMIENTO_ESTADO_ENVIADO = 3;
	const MOVIMIENTO_ESTADO_RECUPERAR = 4;
	const MOVIMIENTO_ESTADO_FINALIZADO = 5;
	const MOVIMIENTO_ESTADO_RECHAZADO = 6;


	const EXPEDIENTE_ESTADO_AUDITORIA_ARCHIVOFALTANTE = 1;
	const EXPEDIENTE_ESTADO_AUDITORIA_PENDIENTEIMPORTAR = 2;
	const EXPEDIENTE_ESTADO_AUDITORIA_PENDIENTEPROCESO = 3;
	const EXPEDIENTE_ESTADO_AUDITORIA_PROCESOAUDITORES = 4;
	const EXPEDIENTE_ESTADO_AUDITORIA_PENDIENTESISTEMA = 5;
	const EXPEDIENTE_ESTADO_AUDITORIA_CERRADOPENDIENTE = 6;
	const EXPEDIENTE_ESTADO_AUDITORIA_PENDIENTECARGAR = 7;
	const EXPEDIENTE_ESTADO_AUDITORIA_PENDIENTELIQUIDACION = 10;

	const EXPEDIENTE_ESTADO_ADMINISTRACION_PENDIENTEPAGO = 8;
	const EXPEDIENTE_ESTADO_ADMINISTRACION_PAGADO = 9;
	const EXPEDIENTE_ESTADO_ADMINISTRACION_PENDIENTEPAGOHOMBRE = 11;

	const ANO_TRABAJO = 2015;
		
	 
        
}