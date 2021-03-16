<?php 
	if(isset($_GET['boton'])){
		echo '<div class="alert alert-success">
    <strong>Correcto!</strong> La accion se ha realizado por '.$_GET['name'].' con la contraseña '.$_GET['pwd'].'.
  </div>';
	}?> 	

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Stacked form</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <div class="form-group">
      <label for="name">Nombre:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary" name="boton">Submit</button>
  </form>
</div>

</body>
</html>
