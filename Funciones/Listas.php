<?php
    function generar($nombre,$presidente,$vicepresidente,$secretario,$vocal){
        
        $bool=true;
        $archivo=fopen("../Archivos/Listas/Listado.csv","r");{
            while(!feof($archivo)){
                $linea=fgets($archivo);
                $datos=explode("|",$linea);
                $nom=$datos[0];
                $pre=$datos[1];
                $vic=$datos[2];
                $sec=$datos[3];
                $voc=$datos[4];
                
                if($nom==$nombre){
                    echo "esta lista ya se encuentra registrada";
                    $bool=false;
                    header("Location:../Errores/Adminlistas/Error3.php");
                    break;
                }
                if($pre==$presidente){
                    echo "Esta lista no puede estar conformada por integrantes de otras listas";
                    $bool=false;
                    header("Location:../Errores/Adminlistas/Error4.php");
                    break;
                }
                elseif($vic==$presidente){
                    echo "Esta lista no puede estar conformada por integrantes de otras listas";
                    $bool=false;
                    header("Location:../Errores/Adminlistas/Error4.php");
                    break;
                }
                elseif($sec==$presidente){
                    echo "Esta lista no puede estar conformada por integrantes de otras listas";
                    $bool=false;
                    header("Location:../Errores/Adminlistas/Error4.php");
                    break;
                }
                elseif($voc==$presidente){
                    echo "Esta lista no puede estar conformada por integrantes de otras listas";
                    $bool=false;
                    header("Location:../Errores/Adminlistas/Error4.php");
                    break;
                }
                elseif($pre==$vicepresidente){
                    echo "Esta lista no puede estar conformada por integrantes de otras listas";
                    $bool=false;
                    header("Location:../Errores/Adminlistas/Error4.php");
                    break;
                }
                elseif($sec==$vicepresidente){
                    echo "Esta lista no puede estar conformada por integrantes de otras listas";
                    $bool=false;
                    header("Location:../Errores/Adminlistas/Error4.php");
                    break;
                }
                elseif($voc==$vicepresidente){
                    echo "Esta lista no puede estar conformada por integrantes de otras listas";
                    $bool=false;
                    header("Location:../Errores/Adminlistas/Error4.php");
                    break;
                }
                elseif($pre==$secretario){
                    echo "Esta lista no puede estar conformada por integrantes de otras listas";
                    $bool=false;
                    header("Location:../Errores/Adminlistas/Error4.php");
                    break;
                }
                elseif($vic==$secretario){
                    echo "Esta lista no puede estar conformada por integrantes de otras listas";
                    $bool=false;
                    header("Location:../Errores/Adminlistas/Error4.php");
                    break;
                }
                elseif($sec==$secretario){
                    echo "Esta lista no puede estar conformada por integrantes de otras listas";
                    $bool=false;
                    header("Location:../Errores/Adminlistas/Error4.php");
                    break;
                }
                elseif($voc==$secretario){
                    echo "Esta lista no puede estar conformada por integrantes de otras listas";
                    $bool=false;
                    header("Location:../Errores/Adminlistas/Error4.php");
                    break;
                }
                elseif($pre==$vocal){
                    echo "Esta lista no puede estar conformada por integrantes de otras listas";
                    $bool=false;
                    header("Location:../Errores/Adminlistas/Error4.php");
                    break;
                }
                elseif($vic==$vocal){
                    echo "Esta lista no puede estar conformada por integrantes de otras listas";
                    $bool=false;
                    header("Location:../Errores/Adminlistas/Error4.php");
                    break;
                }
                elseif($sec==$vocal){
                    echo "Esta lista no puede estar conformada por integrantes de otras listas";
                    $bool=false;
                    header("Location:../Errores/Adminlistas/Error4.php");
                    break;
                }
                elseif($voc==$vocal){
                    echo "Esta lista no puede estar conformada por integrantes de otras listas";
                    $bool=false;
                    header("Location:../Errores/Adminlistas/Error4.php");
                    break;
                }
            }

        }
        fclose($archivo);
        if($bool){
            insertar($nombre,$presidente,$vicepresidente,$secretario,$vocal);
        }
        
       
    }
    function insertar($nombre,$presidente,$vicepresidente,$secretario,$vocal){
        $res=verificar();
        if($res==1){
            header("Location:../Errores/Adminlistas/Error5.php");
            exit;
        }
        $archivo=fopen("../Archivos/Listas/Listado.csv","a+");
        while(!feof($archivo)){
            $linea=fgets($archivo);
            $datos=explode("|",$linea);
            $nom=$datos[0];
            $pre=$datos[1];
            $vic=$datos[2];
            $sec=$datos[3];
            $voc=$datos[4];

           $array=$nombre.'|'.$presidente.'|'.$vicepresidente.'|'.$secretario.'|'.$vocal."\n";
           fputs($archivo,$array);
        break;
        }
        fclose($archivo);
        $archivo=fopen("../Archivos/Listas/Listadovista.csv","a");
        while(!feof($archivo)){
            $linea=fgets($archivo);
            $datos=explode("\t\t",$linea);
            $nom=$datos[0];
            $pre=$datos[1];
            $vic=$datos[2];
            $sec=$datos[3];
            $voc=$datos[4];
           $array=$nombre."\t\t".$presidente."\t\t".$vicepresidente."\t\t".$secretario."\t\t".$vocal."\n";
           fputs($archivo,$array);
        break;
        }
        fclose($archivo);
        header("Location:../Alertas/Alerta3.php");
        
    }
    function verificar(){
            $cont=0;
            $ruta="../Archivos/Listas/Listado.csv";    
            $archivo1=fopen($ruta,'r') or die("errror");
            while($campos=fgetcsv($archivo1,999)){
                $cont++;
                echo $cont;
            }
            if($cont==4){
                echo "Las listas ya estan llena";
                return 1;
                
            }
            

        
    }
?>