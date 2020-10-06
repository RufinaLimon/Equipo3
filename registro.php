
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registro de usuario</title>
    <meta charset="UTF-8" name="viewport" content="initial-scale=1">   
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>

<body class="display">    
    <p></p>
    
    <div class="d-flex justify-content-center bg-dark">
    <div class="btn-group btn-group-lg row" role="group">

    	<a href="#" class="btn btn-primary px-5" role="button">Inicio</a>  
      
        <a href="#" class="btn btn-primary px-5" role="button">Movimientos</a>

        <a href="#" class="btn btn-primary px-5" role="button">Transferencias</a>

        <a href="#" class="btn btn-primary px-5" role="button">Precios de criptomonedas</a>              
       
        <a href="#" class="btn btn-primary px-5">Salir</a>
       
    </div>
    </div>

    <p></p>
    
    <h1>Registro de nuevo usuario</h1>

<form method="POST" action="registroex.php">
	Id Usuario: <input type="text" name="idusuario"> <br>
	Nombre: <input type="text" name="nombre"> <br>
	Apellido Paterno: <input type="text" name="apellidop"> <br>
	Apellido Materno: <input type="text" name="apellidom"> <br>
	Email: <input type="text" name="email"> <br>
	Contraseña: <input type="text" name="password"> <br>
	<p></p>
	<input type="submit" name="registrar" value="Registrar usuario">
</form>

</body>

<script type="text/javascript" src="light.js"></script>
<script type="text/javascript" src="jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="popper.min.js"></script>
<script type="text/javascript" src="bootstrap.min.js"></script>

</html>