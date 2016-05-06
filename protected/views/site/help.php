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
<div id="novedades" class="seleccion-periodo">

<h4>Novedades en el Sistema de Gestión</h4>

<div class="noticia">

	<span class="fecha-reciente">
		04/01/2016
	</span>
	<span class="noticia-descripcion">
		Se agrego el botón de <b>"Informe"</b> en las bandejas de Entrada, Área, y Salida.
		La misma permite exportar a excel los expedientes ubicados en dichas bandejas.
	</span>
	
</div>


<div class="noticia">

	<span class="fecha">
		16/12/2015
	</span>
	<span class="noticia-descripcion">
		Se realizaron mejoras en los nombres de las opciones del menú para una mejor comprensión de las mismas.
	</span>
	
</div>


<div class="noticia">

	<span class="fecha">
		16/12/2015
	</span>
	<span class="noticia-descripcion">
		Se agrego en el menu <b>"Config" => "Ayuda"</b>, una descripción de los principales informes del sistema.

	</span>
	
</div>
	

</div>

<br>
<div style="margin-left:20px;">
	<h4>Índice de Ayuda</h4>

	<ul id="menu-ayuda">
		<li><a href="#efectores">1 - Efectores</a></li>
		<li><a href="#beneficiarios">2 - Beneficiarios</a></li>
		<li><a href="#contactos">3 - Contactos</a></li>
		<li><a href="#actividades">4 - Actividades</a></li>
		<li><a href="#expedientes">5 - Expedientes</a></li>
	</ul>
</div>

<div style="margin:0px auto">

	<div class="span6 box-help">
		<h4  style="padding-top: 40px; margin-top: -40px;" id="efectores">1 - Efectores</h4>
		
		<div class="item-help">
			<h5>1 - Listado de Efectores</h5>
			<div class="descripcion-help">
				Permite buscar efectores y sus Contactos por CUIE, Codigo provincial, Dpto, Localidad, Nombre, etc.
				<br>Permite ver en detalle cada efector y las acciones llevadas a cabo con el mismo. (Capacitaciones, Visitas, Etc.)
			</div>
		</div>

		<div class="item-help">
			<h5>2 - Listado de Administradores</h5>
			<div class="descripcion-help">
				Permite ver las relaciones de tercer administrador.
			</div>
		</div>

		<div class="item-help">
			<h5>3 - Listado de Efectores Carga</h5>
			<div class="descripcion-help">
				Permite ver los Efectores que realizan la carga de facturación y sus relaciones de tercer administrador.
			</div>
		</div>

		<div class="item-help">
			<h5>4 - Listado de Efectores Centralizados</h5>
			<div class="descripcion-help">
				Permite ver los Efectores centralizados en la carga de facturación y sus relaciones de tercer administrador.
			</div>
		</div>

		<div class="item-help">
			<h5>5 - Listado de CEB de Efectores</h5>
			<div class="descripcion-help">
				Permite ver los porcentajes de CEB de los Efectores en todo un año.
			</div>
		</div>
		
	</div>

	<div class="span6 box-help" >
		<h4 id="beneficiarios" style="padding-top: 40px; margin-top: -40px;" >2 - Beneficiarios</h4>
		
		<div class="item-help">
			<h5>1 - Consulta Específica</h5>
			<div class="descripcion-help">
				Permite consultar los beneficiarios de un determinado período, por sus campos como DNI, Apellido, Nombre y Fecha de Nacimiento.
			</div>
		</div>

		<div class="item-help">
			<h5>2 - Consulta Avanzada</h5>
			<div class="descripcion-help">
				Permite ver todos los beneficiarios de un determinado período y realizar filtros avanzados.
			</div>
		</div>

		<div class="item-help">
			<h5>3 - Impresion de Padrones Consulta</h5>
			<div class="descripcion-help">
				Impresión de padrones por efector, período y grupos etarios.
			</div>
		</div>

		<div class="item-help">
			<h5>4 - Impresión de Padrones Trazadoras</h5>
			<div class="descripcion-help">
				Impresión de padrones por efector, período y trazadoras.
			</div>
		</div>
		
	</div>

	<div class="clear"></div>

	<div class="span6 box-help">
		<h4 style="padding-top: 40px; margin-top: -40px;"  id="contactos">3 - Contactos</h4>
		
		<div class="item-help">
			<h5>1 - Administración de Contactos</h5>
			<div class="descripcion-help">
				El listado muestra información de contacto de los efectores, como telefono, email, nombre y apellido.
				<br>Permite consultar los contactos por efector por sus campos como Apellido, Nombre.
				<br>Permite modificar y/o eliminar contactos de los efectores.
			</div>
		</div>

		<div class="item-help">
			<h5>2 - Nuevo Contacto</h5>
			<div class="descripcion-help">
				Permite agregar contactos a un efector determinado.
			</div>
		</div>		
		
	</div>

	<div class="span6 box-help">
		<h4 style="padding-top: 40px; margin-top: -40px;"  id="actividades">4 - Actividades</h4>
		
		<div class="item-help">
			<h5>1 - Administración de Actividades</h5>
			<div class="descripcion-help">
				El listado muestra información de las actividades como Área, Fecha, Hora, Estado, Tipo de Actividad y los efectores asignados.
				<br>Permite consultar y filtrar por los campos.
				<br>Permite modificar y/o eliminar las actividades como los efectores participantes.
			</div>
		</div>

		<div class="item-help">
			<h5>2 - Nueva Actividad</h5>
			<div class="descripcion-help">
				Permite agregar una nueva actividad de un determinada área y tipo de capacitación, registrando los efectores asignados a la misma.
			</div>
		</div>		

		<div class="item-help">
			<h5>3 - Calendario general</h5>
			<div class="descripcion-help">
				Permite ver todas las actividades de las diferentes áreas de la UGSP, pudiendo ver en detalle cada una de ellas.
			</div>
		</div>	

		<div class="item-help">
			<h5>4 - Calendario del Área</h5>
			<div class="descripcion-help">
				Permite ver todas las actividades de tu área asignada, pudiendo ver en detalle cada una de ellas.
			</div>
		</div>	
		
	</div>


	<div class="span12 box-help">
		<h4 style="padding-top: 40px; margin-top: -40px;"  id="expedientes">5 - Expedientes</h4>
		

		<div class="span6">
		<div class="item-help">
			<h5>1 - Administración de Expedientes</h5>
			<div class="descripcion-help">
				El listado muestra información de los expedientes.
				<br>Permite consultar y filtrar por los campos.
				<br>Permite modificar y/o eliminar los expedientes.
			</div>
		</div>

		<div class="item-help">
			<h5>2 - Seguimiento de Expedientes</h5>
			<div class="descripcion-help">
				Permite el seguimiento de expedientes, los cambios de estados y movimientos entre las diferentes áreas de la UGSP.
			</div>
		</div>		

		

		<div class="item-help">
			<h5>3 - DDJJ Expedientes Ingresados</h5>
			<div class="descripcion-help">
				Permite obtener la declaración jurada de expedientes ingresados filtrando los mismos por la fecha de inicio.
			</div>
		</div>	

		<div class="item-help">
			<h5>4 - DDJJ Expedientes Liquidados</h5>
			<div class="descripcion-help">
				Permite obtener la declaración jurada de expedientes comprometidos filtrando los mismos por la fecha de liquidación de Auditoria.
			</div>
		</div>	

		<div class="item-help">
			<h5>5 - DDJJ Expedientes Pagados</h5>
			<div class="descripcion-help">
				Permite obtener la declaración jurada de expedientes pagados filtrando los mismos por la fecha de movimiento bancario.
			</div>
		</div>

		<div class="item-help">
			<h5>6 - DDJJ Expedientes Consolidada</h5>
			<div class="descripcion-help">
				Permite obtener la declaración jurada de expedientes consolidada filtrando los mismos por la fecha de movimiento bancario, fecha de inicio, fecha de liquidación auditoria, fecha de liquidación auditoria efectiva o fecha de movimiento bancario.
			</div>
		</div>
		<div class="item-help">
					<h5>7 - Consulta de Expedientes</h5>
					<div class="descripcion-help">
						Permite consultar los expedientes de un efector determinado, ver los datos del mismo, y en que área y estado se encuentra.
						<br>Permite otros filtros, como por período, grupo prestacional, área actual Y estado actual.				
					</div>
				</div>	
		</div>

		<div class="span5">

		

		<div class="item-help">
			<h5>8 - Consulta de Facturación Anual</h5>
			<div class="descripcion-help">
				Permite obtener un listado con los períodos de facturación presentado por los efectores y sus efectores administrados para el control y seguimiento de los mismos.
				<br>En el mismo se presentan los Grupos Prestacionales presentados en la facturación y al posicionarse por encima permite ver datos generales del expediente.
				<br>Se puede realizar las consultas por años, y también ver el informe de manera estadística para realizar informes.
			</div>
		</div>	


		<div class="item-help">
			<h5>9 - Consulta de Facturación Mensual</h5>
			<div class="descripcion-help">
				Permite obtener un listado de los efectores que presentaron facturación en algun período específico.
				<br>Se visualiza la fecha de inicio y otros datos del período seleccionado.				
			</div>
		</div>	

		<div class="item-help">
			<h5>10 - Consulta de Montos de Facturación Mensual</h5>
			<div class="descripcion-help">
				Permite obtener un listado de los efectores que presentaron facturación en algun período específico.
				<br>Se visualiza los montos de facturación y otros datos del período seleccionado.				
			</div>
		</div>	


		<div class="item-help">
			<h5>11 - Consulta de Vencimientos</h5>
			<div class="descripcion-help">
				Permite obtener un listado de los expedientes con vencimientos en un rango de fecha específico.
				<br>Se visualiza los montos de facturación y otros datos del período seleccionado.
			</div>
		</div>


		<div class="item-help">
			<h5>12 - Resumen de Estado de Expedientes</h5>
			<div class="descripcion-help">
				Permite obtener un control de los estados de los expedientes en las distintas áreas de la UGSP.
				<br>Se puede filtrar por período para el control mensual.
			</div>
		</div>

		</div>
		
	</div>



	
</div>