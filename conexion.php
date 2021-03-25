<?php
 function conectar(){
     $user="root";
     $password="";
     $server="localhost";
     $db="empleados";

     $conn = mysqli_connect($server, $user,$password, $db);

     if($conn -> connect_error)
         die($conn->connect_error);

         print("conexion exitosa \n");
       exit(1);

    
 }

?>