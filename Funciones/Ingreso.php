<?php

//Validar el ingreso del usuario

function validar($ingreso){

    $archivo=fopen('../Archivos/Padrones/Registro.csv','r');
    while(!feof($archivo)){
            $linea=fgets($archivo);
            $datos=explode("|",$linea);
            $dni=$datos[0];
            if($dni==$ingreso){
                return 1;
            }
    }
}

function validar2($ingreso){
    $state="voto";
    $archivo=fopen('../Archivos/Padrones/Padron.csv','r')or die("error");

                while(!feof($archivo))
                {
                    $linea=fgets($archivo);
                    $datos=explode("|",$linea);
                    $nombre=$datos[0];
                    $dni=$datos[1];
                    $mail=$datos[2];
                   if($ingreso==$dni){
                    date_default_timezone_set("America/Argentina/Buenos_Aires");
                    $fecha=date("d-m-y");
                    $hora=date("h:a");
                        $archivo=fopen('../Archivos/Padrones/Registro.csv','a');
                        fputs($archivo,$ingreso.'|'.$state."|".$fecha."|".$hora."\n");
                        $archivo2=fopen('../Archivos/Padrones/Registrovista.csv','a');
                        fputs($archivo2,$ingreso."\t\t\t\t\t\t\t".$state."\t\t\t\t\t".$fecha."\t\t\t\t\t".$hora."\n");
                            session_start();
                            $_SESSION['usuario']=array();
                            $_SESSION['usuario']['nombre']=$nombre;
                            $_SESSION['usuario']['dni']=$dni;
                            $_SESSION['usuario']['email']=$mail;
                            $_SESSION['usuario']['estado']=0;
                            header("Location:../Interfaces/Usuario.php");
                            return 0;
                        }
                        header("Location:../Errores/User/Error4.php");
                   }
                fclose($archivo);
                
                
    
}


?>