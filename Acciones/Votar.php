<?php

//Revisar como sigue
include("../Funciones/Resultados.php");

    if(isset($_POST['Lista_A'])){
        session_start();
        $nombre=$_SESSION['usuario']['nombre'];
        $dni=$_SESSION['usuario']['dni'];
        $correo=$_SESSION['usuario']['email'];
        lista_A($nombre,$dni,$correo);
        $valor=$_POST['Lista_A'];
        $_SESSION['usuario']['voto']=$valor;    
        $_SESSION['usuario']['estado']=1;
        header("Location:../Alertas/Alerta2.php");
        //unset($_SESSION['usuario']);
        echo $valor;
        exit;
    }
elseif(isset($_POST['Lista_B'])){
    session_start();
    $nombre=$_SESSION['usuario']['nombre'];
    $dni=$_SESSION['usuario']['dni'];
    $correo=$_SESSION['usuario']['email'];
    lista_B($nombre,$dni,$correo);
    $valor=$_POST['Lista_B'];
    $_SESSION['usuario']['estado']=1;
    $_SESSION['usuario']['voto']=$valor;
    header("Location:../Alertas/Alerta2.php");
    //unset($_SESSION['usuario']);
    echo $valor;
    exit;
}
elseif(isset($_POST['Lista_C'])){
    session_start();
    $nombre=$_SESSION['usuario']['nombre'];
    $dni=$_SESSION['usuario']['dni'];
    $correo=$_SESSION['usuario']['email'];
    lista_C($nombre,$dni,$correo);
    $valor=$_POST['Lista_C'];
    $_SESSION['usuario']['estado']=1;
    $_SESSION['usuario']['voto']=$valor;
    header("Location:../Alertas/Alerta2.php");
    //unset($_SESSION['usuario']);
    echo $valor;
    exit;
}    
elseif(isset($_POST['Lista_D'])){
    session_start();
    $nombre=$_SESSION['usuario']['nombre'];
    $dni=$_SESSION['usuario']['dni'];
    $correo=$_SESSION['usuario']['email'];
    lista_D($nombre,$dni,$correo);
    $valor=$_POST['Lista_D'];
    $_SESSION['usuario']['estado']=1;
    $_SESSION['usuario']['voto']=$valor;

    header("Location:../Alertas/Alerta2.php");
    //unset($_SESSION['usuario']);
    echo $valor;
    exit;
}
?>