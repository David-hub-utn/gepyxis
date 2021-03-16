	<?php
	if(isset($_GET['email'])&&$_GET['email']!=""&&$_GET['status']==1){
		include("conexion.php");
		$email=$_GET['email'];
		$sql = "UPDATE `datos` SET `STATUS` = 'ACTIVO' WHERE `datos`.`correo` = \"".$email."\";";

		if (mysqli_query($conn, $sql)) {
		  $registro="SU01";
		} else {
		  $registro="SU02";
		}
		?>
			<!DOCTYPE HTML>
	<html lang="es">
	  <head>
	    <!-- Required meta tags -->
		<meta charset="UTF-8">
	    <meta name="robots" content="index"/>
		<meta name="robots" content="follow"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="descripcion" content="Ofertas, Descuentos y Promociones Portal Ge Pyxis">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	    <link rel="icon" href="img/icono.png">
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
	    <title>Promociones</title>


	  </head>

	  <body>

	  	<?php
	  	if (isset($registro)&&$registro=="SU01") {
	  		echo '<div class="alert alert-success">
	  <strong>Correcto!</strong> Se ha activado tu correo.
	</div>';
	  	}else if (isset($registro)&&$registro=="SU02"){
	echo '<div class="alert alert-danger">
	  <strong>Error!</strong> No se ha activado tu correo.
	</div>';
	  	}
	  	?>


	  	<div class="container-fluid">
		   <br>
	  	<img src="img/imagen2.png" class="logo" >
	  <br><br><br><br>
	  	
		<div class="row uno">
		  	<div class="container animate__animated animate__fadeInLeft"style="align-content: center;" >

		      	<h1>Gracias!!! </h1>
		      	<h2>Tu cuenta de correo es tu ticket de descuento, por favor
				proporcionalo al momento de contrartar el servicio</h2>
				<h3>Tu correo es: <?=$email?></h3>
		  	</div>
	      </div>
	   
	  <div class="row " style="background-color: #29ABE2;
    height: 115px;
    align-content: center;">
		<div class="col-lg-6 " hidden></div>
		<h6><?php
				echo "La  fecha y la hora son: " .  date("Y/m/d  , h:i a");				
				?></h6>

	</div>

			<div class="logo1F" ><img class="imagen2" src="img/imagen1.png"></div>



		
			
		 <!-- imagenes finales -->	
			<div class="row" style="background-color: white; padding-top: 80px; ">
				  		<div class="col" ><img src="img/imagen12.png">
	              Asequible </div>
				  		<div class="col" ><img src="img/imagen22.png">
	              Alto Valor </div>
				  		<div class="col" ><img src="img/imagen3.png">
	              Pymes & Corporativos</div>
	              		<div class="col" ><img src="img/imagen4.png">
	              Global </div>
			</div>
			
			<div class="row" style="background-color: white; padding-top: 15px; padding-bottom: 20px;">
				<div class="col" style="text-align-last: center;">
				<img src="img/soporte-en-linea.png">
	              <p><a href="https://www.gepyxis.mx" >Ver más detalles</a></p>
				</div>
	        </div>

			 <!-- Footer -->
			<div class="row " style="background-color: #f7931e; padding-top: 35px;">
				<div class="col-lg-4" style="text-align-last: center;">
					<a  href="https://twitter.com/gepyxis"><img src="img/twit.svg" style="height: 41px;">
			        </a>

			        <a href="https://www.instagram.com/gepyxis/"><img src="img/insta.svg" style="height: 41px;">
			        </a>

			        <a href="https://mx.linkedin.com/company/gpy22012208"><img src="img/linke.svg" style="height: 41px;">
			        </a>

			        <a href="https://www.facebook.com/gepyxis.fortalecimientoempresarial"><img src="img/fb.svg" style="height: 41px;">
			        </a>
			    </div>
				<div class="col-lg-4 centrar">
					<a href="https://www.gepyxis.mx" ><p class="portal">www.gepyxis.mx</p>
			        </a>
			        
			          <a href="mailto:informacion@gepyxis.mx" >
			          <p class="mail"><img src="img/correo.png">informacion@gepyxis.mx</p></a>
			    </div>
			    <div class="col-lg-4">
					<div>
			         
			         <a id="what1" href="https://wa.me/525522793490" >
			        <p><img  id="img" src="img/whats.png"><span >+52 (55) 2279 3490</span></p></a>
			        </div>
			        <div >
			         
			         <a id="what1" class="col-md-6 " id="numeros" href="tel:525551127794" >
			        <p><img  id="img2" src="img/fon.png"><span >+52 (55) 5112 7794</span></p></a>
			        </div>
			    </div>
			</div>
	</div>
	    <!-- JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	  </body>
	</html>

	<?php
		
		mysqli_close($conn);
	}else{
	?>

	<!DOCTYPE HTML>
	<html lang="es">
	  <head>
	    <!-- Required meta tags -->
	<meta charset="UTF-8">
	    <meta name="robots" content="index"/>
		  <meta name="robots" content="follow"/>
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="descripcion" content="Ofertas, Descuentos y Promociones Portal Ge Pyxis">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	    <link rel="icon" href="img/icono.png">
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
	    <title>Promociones</title>
	  </head>

	  <body>
	  	
	  	<div class="container-fluid">
		   <br>
	  	<img src="img/imagen2.png" class="logo" >
	  	<br><br><br><br>
		<div class="row uno">
		  	<div class="col-lg-6 anuncio1 animate__animated animate__fadeInLeft" >

		      	<h1> Suscríbete Ahora!</h1>
		      	<p>No dejes pasar esta oportunidad</p>
		  	</div>
		  	<div class="col-lg-6 formulario1">
		            <form method="POST" action="enviar_msj.php" >
		              <div class="form-group">
		              	<br>
		                <label for="nombre">Nombre:</label>
		                <input type="text" class="form-control" placeholder="Introduce tu nombre" name="nombre" required="">
		              </div>
		               <div class="form-group">
		                <label for="email">Correo electrónico:</label>
		                <input type="email" class="form-control" placeholder="Introduce tu correo electrónico" name="correo" required="" >
		              </div>
		               <div class="form-group">
		                <label for="empresa">Nombre de tu empresa:</label>
		                <input type="text" class="form-control" placeholder="Introduce el nombre de tu empresa" name="empresa" required="" >
		              </div>
		               <div class="form-group">
		                <label for="telefono">Celular:</label>
		                <input type="tel" maxlength="10" class="form-control" placeholder="Introduce tu número celular " name="telefono" required=""  >
		              </div>
		              <div class="form-group">
		              	<label form="mensaje">Comentarios</label>
		              	<textarea type="tex" class="form-control" placeholder="ingresa tu mensaje" name="msj" ></textarea>               
		              </div>

		              <button class="form-group"  class="btn btn-primary" name="enviar" >Enviar</button>
		              <br><br>
		            </form>
		        </div>
	      </div>

		  <div class="row dos">
		    <div class="col-lg-6">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%">

			  <!-- Indicators -->
			  <ul class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active" hidden="true"></li>
			    <li data-target="#myCarousel" data-slide-to="1" hidden="true"></li>
			  </ul>
			  
			  <!-- The slideshow -->
			  <div class="carousel-inner">
			    <div class="carousel-item active promo">
			    	<h3>Usted puede obtener el</h3>
			        <br>
			        <p class="tam">5%</p>
			        <br>
			        <h3>de descuento en el servicio </h3>
			    </div>
			    <div class="carousel-item promo">
			      <h3>Obtén el cupón</h3>
			        <br>
			        <p class="tam"></p>
			        <br>
			        <h3>ahora mismo. </h3>
			    </div>
			    
			  </div>
			  
			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev" hidden="true">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#myCarousel" data-slide="next" hidden="true">
			    <span class="carousel-control-next-icon"></span>
			  </a>
			</div>

	    </div>
	    <div class="col-lg-6 " hidden></div>
	</div>

			<div class="logo1F" ><img class="imagen2" src="img/imagen1.png"><p>Solución para la gestión de personal</p></div>

			<div class="row" style="background-color: white; padding-top: 80px; ">
				  		<div class="col" ><img src="img/imagen12.png">
	              Asequible </div>
				  		<div class="col" ><img src="img/imagen22.png">
	              Alto Valor </div>
				  		<div class="col" ><img src="img/imagen3.png">
	              Pymes & Corporativos</div>
	              		<div class="col" ><img src="img/imagen4.png">
	              Global </div>
				</div>
				<div class="row" style="background-color: white; padding-top: 15px; padding-bottom: 20px;">
					<div class="col" style="text-align-last: center;">
					<img src="img/soporte-en-linea.png">
	              	<p><a href="https://www.gepyxis.mx" >Ver más detalles</a></p>
					</div>
	              </div>

			
			<div class="row " style="background-color: #f7931e; padding-top: 35px;">
				<div class="col-lg-4" style="text-align-last: center;">
					<a  href="https://twitter.com/gepyxis"><img src="img/twit.svg" style="height: 41px;">
			        </a>

			        <a href="https://www.instagram.com/gepyxis/"><img src="img/insta.svg" style="height: 41px;">
			        </a>

			        <a href="https://mx.linkedin.com/company/gpy22012208"><img src="img/linke.svg" style="height: 41px;">
			        </a>

			        <a href="https://www.facebook.com/gepyxis.fortalecimientoempresarial"><img src="img/fb.svg" style="height: 41px;">
			        </a>
			    </div>
				<div class="col-lg-4 centrar">
					<a href="https://www.gepyxis.mx" ><p class="portal">www.gepyxis.mx</p>
			        </a>
			        
			          <a href="mailto:informacion@gepyxis.mx" >
			          <p class="mail"><img src="img/correo.png">informacion@gepyxis.mx</p></a>
			    </div>
			    <div class="col-lg-4">
					<div>
			         
			         <a id="what1" href="https://wa.me/525522793490" >
			        <p><img  id="img" src="img/whats.png"><span >+52 (55) 2279 3490</span></p></a>
			        </div>
			        <div >
			         
			         <a id="what1" class="col-md-6 " id="numeros" href="tel:525551127794" >
			        <p><img  id="img2" src="img/fon.png"><span >+52 (55) 5112 7794</span></p></a>
			        </div>
			    </div>
			</div>
	</div>
	    <!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	    <script type="text/javascript"> $( document ).ready(function() {
   		 $('#exampleModal').modal('toggle')
			 }); </script>
	  </body>
	</html>
	<?php 
	}
	?>