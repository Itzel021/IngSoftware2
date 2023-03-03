<?php

include("conexion.php");

if(isset($_POST['btn_rg'])){
$cafeteria = trim($_POST['cafeteria']);
$dueño = trim($_POST['dueño']);
$tel = trim($_POST['tel']);
$ubic = trim($_POST['ubic']);
$pass = trim($_POST['pass']);
$agregar = "INSERT INTO cafeteria(ID,Cafeteria, Dueño, Contraseña, Telefono, Ubicacion) VALUES ('','$cafeteria','$dueño','$pass','$tel','$ubic')";
$resultado = mysqli_query($conex,$agregar);    
   if($resultado){
   //header('Location: /ReyChori_usuario.html');
     }
}
?>