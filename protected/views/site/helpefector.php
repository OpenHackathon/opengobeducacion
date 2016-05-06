<style type="text/css">
	.box-help{
    margin: 20px 5px;
    min-height: 100px;    
    padding: 10px;
    position:relative;
    background: -webkit-gradient(linear, 0% 20%, 0% 100%, from(#fff), to(#fff), color-stop(.2, #f2f2f2));
    border: 1px solid #ccc;
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
}

.box-help:before{
    content: '';
    width: 50px;
    height: 50px;
    top:0; right:0;
    position:absolute;
    z-index: -1;
    -webkit-box-shadow: 10px -10px 8px rgba(0, 0, 0, 0.2);
    -webkit-transform: rotate(2deg)
                        translate(-14px,20px)
                        skew(-20deg);
}
.box-help:after{
    content: '';
    width: 50px;
    height: 50px;
    top:0; left:0;
    position:absolute;
    z-index:-1;
    display: inline-block;
    -webkit-box-shadow: -10px -10px 10px rgba(0, 0, 0, 0.2);
    -webkit-transform: rotate(2deg)
                        translate(12px,25px)
                           skew(20deg);
}

.box-help h4{
	font-size: 18px;
    font-weight: bold;
    margin-top: 2px; 
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    text-align: center;
}

.box-help h5{
	font-size: 14px;
    font-weight: bold;
    margin-top: 10px;     
    margin-bottom: 5px;
    
}

ul#menu-ayuda {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

ul#menu-ayuda li a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}

/* Change the link color on hover */
ul#menu-ayuda li a:hover {
    background-color: #555;
    color: white;
}



.noticia{
    background-color: #FFF;
    border: 1px dotted #F9D36F;
    padding: 8px;
    margin: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}

.fecha{
	font-weight: bold;
	margin-right: 10px;
}

.fecha-reciente{
	font-weight: bold;
	margin-right: 10px;
	padding: 5px;
    background-color: rgba(255, 127, 0, 0.84);
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}

	

</style>
<!--
<div id="novedades" class="seleccion-periodo">

<h4>Novedades en el Sistema de Consulta</h4>

<div class="noticia">

	<span class="fecha-reciente">
		04/01/2016
	</span>
	<span class="noticia-descripcion">
		Se agrego el botón de <b>"Informe"</b> en las bandejas de Entrada, Área, y Salida.
		La misma permite exportar a excel los expedientes ubicados en dichas bandejas.
	</span>
	
</div>
-->
<!--

<div class="noticia">

	<span class="fecha">
		16/12/2015
	</span>
	<span class="noticia-descripcion">
		Se agrego en el menu <b>"Config" => "Ayuda"</b>, una descripción de los principales informes del sistema.

	</span>
	
</div>
	-->
<!--
</div>

-->

<br>
<div style="margin-left:20px;">
	<h4>Índice de Ayuda</h4>

	<ul id="menu-ayuda">
		
		<li><a href="#beneficiarios">1 - Beneficiarios</a></li>
		
	</ul>
</div>

<div style="margin:0px auto">

	

	<div class="span12 box-help" >
		<h4 id="beneficiarios" style="padding-top: 40px; margin-top: -40px;" >1 - Beneficiarios</h4>
		
		<div class="item-help">
			<h5>1 - Consulta Específica</h5>
			<div class="descripcion-help">
				Permite consultar los beneficiarios de un determinado período, por sus campos como DNI, Apellido, Nombre y Fecha de Nacimiento.
			</div>
			<br>
			<div>
							<p>		
				<b>Período:</b> Se puede seleccionar el período de busqueda deseado.<br>
				<b>Beneficiario:</b> Se puede buscar por los parametros: DNI, Apellido, Nombre y Fecha de Nacimiento.<br>
				<b>Constancia de inscripción:</b> Cuando se encuentra un inscripto, en el margen izquierdo se encuentro la opcion para imprimir la constancia de inscripción.<br>
				</p>
			</div>
		</div>
		

		<div class="item-help">
			<h5>3 - Impresion de Padrones Consulta</h5>
			<div class="descripcion-help">
				Impresión de padrones y reportes por período y grupos etarios.
			</div>
		</div>

		<div class="item-help">
			<h5>4 - Impresión de Padrones Trazadoras</h5>
			<div class="descripcion-help">
				Impresión de padrones y reportes por período y trazadoras.
			</div>
		</div>
		
	</div>

	<div class="clear"></div>

	



	
</div>

