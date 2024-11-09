<?php
    $dieta=$_POST['txt_dieta'];   
    $recomendaciones=$_POST['txt_recomendaciones']; 
    require('conexion1.php');
    if( $cn->connect_errno==0 ) {
        echo("Conexión exitosa");
        $insertar=$cn->query("insert into plan_salud values(0,'".$dieta."','".$recomendaciones."')"); 
       
        if($insertar==1){          
           echo("El registro se guardo correctamente=".!$cn->connect_errno. "Insertar =". $insertar); 
        }
        else{
           echo("No se guardo el registro".$cn->error."insertar=".$insertar); //$insertar no devulve ningun valor cuando falla la consulta
        }
        $cn->close();  
    }
    else {
      echo("Fallo la Conexión".$cn->connect_errno); 
    }
?>