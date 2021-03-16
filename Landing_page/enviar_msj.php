<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

  $host_name = 'db607152182.db.1and1.com';
  $database = 'db607152182';
  $user_name = 'dbo607152182';
  $password = 'GePyxis#101';
  $conn = mysqli_connect($host_name, $user_name, $password, $database);

  // Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

	//include("conexion.php");

		if (isset($_POST['enviar'])) {
			if (!empty($_POST['nombre']) 
			&& !empty($_POST['correo']) 
			&& !empty($_POST['telefono']) 
			&& !empty($_POST['empresa']) 
			&& !empty($_POST['msj'])) {

				$nombre= $_POST['nombre'];
				$correo= $_POST['correo'];
			    	$empresa= $_POST['empresa'];
				$telefono= $_POST['telefono'];
				$msj= $_POST['msj'];

				$hash = md5( rand(0,1000) );

	    $sql=" INSERT INTO datos (`nom`, `correo`, `nom_emp`, `tel`,`mensaje`, `hash`)
	    								 VALUES ('$nombre',
	       									 '$correo',
	       									 '$empresa',
	       								   	 '$telefono',
	        								 '$msj',
										 '$hash')";


	       	if (mysqli_query($conn, $sql)) {
 				 echo '<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Correcto!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Revisa tu correo electronico para confirmar tu cuenta.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      
      </div>
    </div>
  </div>
</div>';

			ini_set( 'display_errors', 1 );
    			error_reporting( E_ALL );
   			 $from = "informacion@gepyxis.mx";
   			 $to = $correo;
   			 $subject = "Correo de confirmacion para activar cuenta";
   			 $message = "Gracias! '.$nombre.' Click en el siguiente enlace para activar


			 si no solicitó el enlace porfavor haga caso omiso
 
		 
			Please click this link to activate your account:
			https://www.gepyxis.mx/Landing_page/landin.php?email=".$correo."&hash=".$hash."&status=1";

   			 $headers = "From:" . $from;
   		 	mail($to,$subject,$message, $headers);

 			} 
 				else if(substr(mysqli_error($conn), 0, 9)=="Duplicate") {
 					echo '<div class="alert alert-danger">
		    			<strong>Error!</strong> Ese correo ya esta registrado
					</div>';
			}		
	         
	           }
	}


include("landing.php");

	


 ?>