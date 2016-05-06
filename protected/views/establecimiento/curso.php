<?php

//$meses = Tools::obtenerMeses();

$totaliteraciondpto = 26;

$departamentos = Departamento::model()->findAllByAttributes(array(),array('order'=>'orden ASC'));

$d = 0;

foreach ($departamentos as $departamento) {
    
    $d++;

    if($d == $totaliteraciondpto){
        break;
    }

    

    $establecimientos = Establecimiento::model()->findAllByAttributes(array('departamento_id'=>$departamento->id));

    if(count($establecimientos)>0){
        $i = 0;

        foreach ($establecimientos as $esta) {
            
            $i++;
            
            $sql="Select count(*) as tot from Alumno where establecimiento_id = ".$esta->id.";";    
            $connection=Yii::app()->db; 
            $command=$connection->createCommand($sql);            
            $dataReader=$command->queryScalar(); // execute a query SQL                
            

            $totalalumno[$departamento->id] += $dataReader;


            $sql="Select count(*) as tot from Alumno where establecimiento_id = ".$esta->id." and anocursoideal = 0;";    
            $connection=Yii::app()->db; 
            $command=$connection->createCommand($sql);            
            $dataReader=$command->queryScalar(); // execute a query SQL                
            

            $totalalumnorepe[$departamento->id] += $dataReader;
            
            
            //$alumnos = Alumno::model()->findAllByAttributes(array('establecimiento_id'=>$esta->id));

            //$totalalumno[$departamento->id] += count($alumnos);

            /*
            if($i == 20){
                break;
            }
            */

        }
    }

    $porcentaje[$departamento->id] = ($totalalumnorepe[$departamento->id] * 100) / $totalalumno[$departamento->id];

    $porcentaje[$departamento->id] = number_format($porcentaje[$departamento->id],2);
   

}

/*



foreach ($periodos as $periodo) {
	$expedientes = Expediente::model()->findAllByAttributes(array('efector_id'=>$efector_id, 'periodo_id'=>$periodo->id));
	if(count($expedientes)>0){
		$encontroexpedientes = 1;
		foreach ($expedientes as $expediente) {
			$facturacion[$periodo->id] += $expediente->montofactura;
			$liquidado[$periodo->id] += $expediente->montoliquidado;
			$liquidadoceb[$periodo->id] += $expediente->montopagar;
			$prestacionesfacturadas[$periodo->id] += $expediente->prestacionesfacturadas;
			$prestacionesaceptadas[$periodo->id] += $expediente->prestacionesaceptadas;
			$prestacionesdebitadas[$periodo->id] += $expediente->prestacionesdebitadas;

			$beneficiarios[$periodo->id] += $expediente->prestacionesbeneficiarios;
			$beneficiariosceb[$periodo->id] += $expediente->prestacionesbeneficiariosceb;
			$beneficiariossinceb[$periodo->id] += $expediente->prestacionesbeneficiariossinceb;
		}
	}

    $efector_cebs = Efectorceb::model()->findAllByAttributes(array('efector_id'=>$efector_id, 'periodo_id'=>$periodo->id));
    if(count($efector_cebs)>0){
        foreach ($efector_cebs as $efector_ceb) {
            $efectorceb[$periodo->id] = $efector_ceb->ceb;
            $efectorcebsh[$periodo->id] = $efector_ceb->cebsh;
        }
    }

}

}

if($encontroexpedientes == 0){
	echo 'El Efector no presenta información para el año seleccionado';
}
*/

?>


<br>
<br>
<div id="container" style="height: 400px; width: 100%;"></div>
<br>
<br>
<div id="containerCantidad" style="height: 400px; width: 100%;"></div>

<br>
<br>
<div id="containerMatriculados" style="height: 300px; width: 100%;"></div>
<!--
<br>
<br>
<div id="containerCeb" style="height: 300px; width: 100%;"></div>-->
</div>




<script type="text/javascript">

$(function () {
    
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Cantidad de Alumnos vs Alumnos Repitentes por Departamento'
        },
        /*subtitle: {
            text: 'Comparación de los montos'
        },*/
        xAxis: {
            categories: [
                <?php foreach ($departamentos as $departamento ) { ?>
                    <?php if($totalalumno[$departamento->id] != null){ ?>
                        <?php echo "'".$departamento->descripcion."',"; ?>    
                    <?php } ?>
                <?php } ?>
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Cantidad'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0,
                groupPadding: 0.05,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Cantidad Alumnos',
            color: '#0288D1',
            data: [
            <?php 
            $l = 0;
            foreach ($departamentos as $departamento ) {  
                $l++;
                if($l == $totaliteraciondpto){
                    break;
                }
                if($totalalumno[$departamento->id] == null){
                    $totalalumno[$departamento->id] = 0;
                }
                echo $totalalumno[$departamento->id].","; 
            }
            ?>            
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#333',
                align: 'right',
                format: '{point.y}', // one decimal
                y: 5, // 10 pixels down from the top
                style: {
                    fontSize: '10px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }        

        }
        , 
        {
            name: 'Cantidad Personas Repitieron',
            color: '#00B164',
            data: [
            <?php 
            $l = 0;
            foreach ($departamentos as $departamento ) {  
                $l++;
                if($l == $totaliteraciondpto){
                    break;
                }

                if($totalalumnorepe[$departamento->id] == null){
                    $totalalumnorepe[$departamento->id] = 0;
                }
                echo $totalalumnorepe[$departamento->id].","; 
            }
            ?>            
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#333',
                align: 'right',
                format: '{point.y}', // one decimal
                y: 5, // 10 pixels down from the top
                style: {
                    fontSize: '10px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }        

        }
        ]
    });



    $('#containerCantidad').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Porcentaje de Alumnos Repitentes por Departamento'
        },
        /*subtitle: {
            text: 'Comparación de los montos'
        },*/
        xAxis: {
            categories: [
                <?php foreach ($departamentos as $departamento ) { ?>
                    <?php if($porcentaje[$departamento->id] != null){ ?>
                        <?php echo "'".$departamento->descripcion."',"; ?>    
                    <?php } ?>
                <?php } ?>
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Cantidad'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>% {point.y} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0,
                groupPadding: 0.05,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Porcentaje Alumnos',
            color: '#00B164',
            data: [
            <?php 
            $l = 0;
            foreach ($departamentos as $departamento ) {  
                $l++;
                if($l == $totaliteraciondpto){
                    break;
                }
                if($porcentaje[$departamento->id] == null){
                    $porcentaje[$departamento->id] = 0;
                }
                echo $porcentaje[$departamento->id].","; 
            }
            ?>            
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#333',
                align: 'right',
                format: '{point.y}', // one decimal
                y: 5, // 10 pixels down from the top
                style: {
                    fontSize: '10px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }        

        }
        , 
       
        ]
    });


   

});

</script>