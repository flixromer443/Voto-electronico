<?php
include("../Funciones/Listas.php");
if(isset($_POST['generar'])){
    $nombre=$_POST['nombre'];
    $presidente=$_POST['presidente'];
    $vicepresidente=$_POST['vicepresidente'];
    $secretario=$_POST['secretario'];
    $vocal=$_POST['vocal'];
    if(empty($nombre)){
        header("Location:../Errores/Adminlistas/Error1.php");
        exit;
    }
    elseif(empty($presidente)){
        header("Location:../Errores/Adminlistas/Error2.php");
        exit;
    }
    elseif(empty($vicepresidente)){
        header("Location:../Errores/Adminlistas/Error2.php");
        exit;
    }
    elseif(empty($secretario)){
        header("Location:../Errores/Adminlistas/Error2.php");
        exit;
    }
    elseif(empty($vocal)){
        header("Location:../Errores/Adminlistas/Error2.php");
        exit;
    }
    
    //Continuar luego
    generar($nombre,$presidente,$vicepresidente,$secretario,$vocal);
}
    
?>