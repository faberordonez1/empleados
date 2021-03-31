<?php 
include("../conexion.php");

    if(isset($_POST['editarEmpleado'])){
        $id = $_POST['id'];
        echo $id;
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        $area = $_POST['area'];
        
        $boletin=0;
         if(!empty($_POST['boletin'])){
            $boletin = $_POST['boletin'];
         };

         $descripcion = $_POST['descripcion'];

         $consultaSql = "UPDATE empleados SET nombre='$nombre',email='$email',sexo='$sexo',area_id='$area',boletin='$boletin',descripcion='$descripcion' WHERE id='$id'";
         $query =mysqli_query($conn,$consultaSql);
          
         if(!empty($_POST['rol'])){

                foreach($_POST['rol'] as $rol_id){
                    echo "<p>".$rol_id."</p>";
                }          
        }

        if($query){
            Header("Location:../index.php");

        }else{
            echo "Error al Actualizar";
        }

    }
   
  
?>