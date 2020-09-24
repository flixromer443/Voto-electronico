<?php
    echo $nom=$_POST['nombre'];
    $archivo=fopen("../Archivos/Listas/Listado.csv",'r') or die("No se encontro");
    while(!feof($archivo)){
        $linea=fgets($archivo);
        $datos=explode('|',$linea);
        $nombre=$datos[0];
        $presidente=$datos[1];
        $vicepresidente=$datos[2];
        $secretario=$datos[3];
        $vocal=$datos[4];
        $archivo2=fopen("../Archivos/Listas/Listadotemp.csv","a+");
         if($nom!=$nombre){
                fputs($archivo2,$nombre.'|'.$presidente.'|'.$vicepresidente.'|'.$secretario.'|'.$vocal);
         }
    }
    fclose($archivo);
    unlink("../Archivos/Listas/Listado.csv");
    rename("../Archivos/Listas/Listadotemp.csv","../Archivos/Listas/Listado.csv");
    $archivo=fopen("../Archivos/Listas/Listadovista.csv",'r') or die("No se encontro");
    while(!feof($archivo)){
        $linea=fgets($archivo);
        $datos=explode("\t\t",$linea);
        $nombre=$datos[0];
        $presidente=$datos[1];
        $vicepresidente=$datos[2];
        $secretario=$datos[3];
        $vocal=$datos[4];
        $archivo2=fopen("../Archivos/Listas/Listadovistatemp.csv","a+");
         if($nom!=$nombre){
                fputs($archivo2,trim($nombre."\t\t".$presidente."\t\t".$vicepresidente."\t\t".$secretario."\t\t".$vocal)."\n");
         }
    }
    fclose($archivo);
    unlink("../Archivos/Listas/Listadovista.csv");
    rename("../Archivos/Listas/Listadovistatemp.csv","../Archivos/Listas/Listadovista.csv");  

    header("Location:../Interfaces/Adminlistas.php");












?>