<?php 
include("conexion.php");

    if(isset($_POST['crearEmpleado'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        $area = $_POST['area'];

        $descripcion = $_POST['descripcion'];
        
        $boletin="No";
         if(!empty($_POST['boletin'])){
            $boletin = $_POST['boletin'];
         };

        /*
        $roles = array();
        for($i=0; $i<3 ; $i++){
             if(!empty($_POST['rol'])){
                array_push($roles, $_POST['rol']);            
              };
        }
        print_r($roles);
        */

        $sql = " INSERT INTO empleados VALUES (null,'$nombre','$email','$sexo','$area','$boletin','$descripcion')";
        $query =mysqli_query($conn,$sql);

        if($query){
            Header("Location:index.php");

        }else{
            echo "Error de creaciòn";
        }

    }
   
  
?>