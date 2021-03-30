<?php
 include ('conexion.php');
 $id = $_GET['id'];

 $sql = "DELETE FROM empleados WHERE id='$id'";
 mysqli_query($conn,$sql);

if($query){
    Header("Location:index.php");
}

?>