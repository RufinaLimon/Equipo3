<?php
//include 'conexion.php';

$idusuario=$_POST['idusuario'];
$nombre=$_POST['nombre'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$email=$_POST['email'];
$password=$_POST['password'];


$URL = "http://localhost:3000/Registro";

//$params = array("idusuario"=>"jr12", "nombre"=>"Julio", "apellidop"=>"Rosaldo", "apellidom"=>"Pacheco", "email"=>"julio@live.com", "password"=>"king58546",);
$params = array("idusuario"=>$idusuario, "nombre"=>$nombre, "apellidop"=>$apellidop, "apellidom"=>$apellidom, "email"=>$email, "password"=>$password,);


$ch = curl_init( $URL );
# Setup request to send json via POST.
$payload = json_encode( $params );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
# Send request.
$result = curl_exec($ch);
curl_close($ch);

echo json_encode($result);

# Print response.
//echo "<pre>$result</pre>";

?>