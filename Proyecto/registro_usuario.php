<?php

include("conexion.php");

if(isset($_POST['btn-rgu'])){
$matricula = trim($_POST['usuario']);
$pass = trim($_POST['pass']);
$nom = trim($_POST['nom']);
$pat = trim($_POST['pat']);
$mat = trim($_POST['mat']);
$agregar = "INSERT INTO usuarios(matricula, contraseña, nombre, paterno, materno) VALUES ('$matricula','$pass','$nom','$pat','$mat')";
$resultado = mysqli_query($conex,$agregar);    
   if($resultado){
   //header('Location: /ReyChori_usuario.html');
     }
}
?>