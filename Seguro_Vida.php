<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Seguro de Vida</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="Mostrar_Vida.php" method="post" >


				<div class="form-left">

					<h2>DATOS NECESARIOS PARA EL SEGURO DE VIDA</h2>
					
					<div class="form-group">
						<div class="form-row form-row-1">
							<label><b>Ingrese Nombre</b></label>
							<input type="text" name="nombre" >
						</div>
						<div class="form-row form-row-2">
						<label><b>Ingrese Apellidos</b></label>
							<input type="text" name="apellido"  >
						</div>
						<div class="form-row form-row-3">
						<label><b>Ingrese # de Documento</b></label>
							<input type="text" name="cedula" >
						</div>
					</div>

					<div class="form-row">
					<label><b>Seleccione Genero</b></label>
						<select name="genero">
						<option ></option>
						    <option value="Masculino">Masculino</option>
						    <option value="Femenino">Femenino</option>
						    <option value="Prefiero no Decirlo">Prefiero no Decirlo</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>



					<div class="form-row">
					<label><b>Seleccione la aseguradora</b></label>
						<select name="aseguradora">
						<option ></option>
						    <option value="Mappre">Mapfre</option>
						    <option value="Sura">Sura</option>
						    <option value="BBVA">BBVA</option>
						    <option value="Colmena">Colmena</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>

				


					<div class="form-row">
					<label><b> Ingrese Direccion de Residencia </b></label>
						<input type="text" name="residencia" >
					</div>

					<div class="form-row">
					<label><b>Seleccione Ciudad de Residencia</b></label>
						<select name="ciudad">
						<option ></option>
						    <option value="Monteria">Monteria</option>
						    <option value="Medellin">Medellin</option>
						    <option value="Bogota">Bogota</option>
						    <option value="Cartagena">Cartagena</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>

					<button class="btn btn-primary  justify-content-center" name="Enviar"type="submit">Enviar</button>


					</div>



