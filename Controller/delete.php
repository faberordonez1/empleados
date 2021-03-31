<?php
 include ('../conexion.php');
 $id = $_GET['id'];

 $sql = "DELETE FROM empleados WHERE id='$id'";
 $query = mysqli_query($conn,$sql);

if($query){
    Header("Location:../index.php");
}

?>