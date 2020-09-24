<?php
//por el momento se queda en index
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location:../Index.php");
}
elseif($_SESSION['usuario']['estado']==1){
    header("Location:../Alertas/Alerta2.php");
    exit;
}
    $ruta = "../Archivos/Listas/Listadovista.csv";
   
          
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="../Scripts/Votos/None.js"></script>
    <script src="../Scripts/Votos/Voto1.js"></script>
    <script src="../Scripts/Votos/Voto2.js"></script>
    <script src="../Scripts/Votos/Voto3.js"></script>
    <script src="../Scripts/Votos/Voto4.js"></script>
    <script src="https://kit.fontawesome.com/d6fcbe9c4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Estilos/Estilo.css">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  onload="none();voto1(),voto2();voto3();voto4();">
<div class="" id="contenedor">
    <div class="cabecera">
        <h1>Votemos</h1>
    </div>
    <div  id="formu1">
        <form  class="formularioadmin" action="../Acciones/Votar.php" method="POST" >
            <h1 >¿¿Est&aacute;s seguro de votar por esta lista??</h1>
            <br><br>
            <br>
            <input type="submit" name="Lista_A" value="Votar">
            <input type="button" value="Cancelar" id="cancelar1">
            
        </form>
    </div>
    <div  id="formu2">
        <form  class="formularioadmin" action="../Acciones/Votar.php" method="POST" >
            <h1 >¿¿Est&aacute;s seguro de votar por esta lista??</h1>
            <br><br>
            <br>
            <input type="submit" name="Lista_B" value="Votar">
            <input type="button" value="Cancelar" id="cancelar2">
            
        </form>
    </div>
    <div  id="formu3">
        <div class="containerformu">
        <form  class="formularioadmin" action="../Acciones/Votar.php" method="POST" >
            <h1>¿¿Est&aacute;s seguro de votar por esta lista??</h1>
            <br><br>
            <br>
            <input type="submit" name="Lista_C" value="Votar">
            <input type="button" value="Cancelar" id="cancelar3">
            
        </form>
        </div>
    </div>
    <div  id="formu4">
        <form  class="formularioadmin" action="../Acciones/Votar.php" method="POST" >
            <h1 >¿¿Est&aacute;s seguro de votar por esta lista??</h1>
            <br><br>
            <br>
            <input type="submit" name="Lista_D" value="Votar">
            <input type="button" value="Cancelar" id="cancelar4">
            
        </form>
    </div>
   
   
    <div class="container">

    
    <h1 id="mensaje"> Usted se ha acreditado como <br><?php echo $_SESSION['usuario']['nombre']; ?></h1>
    <br><br>
       <?php 
       $found=0;
         if (!file_exists($ruta)){
            $found=1;
            echo "<h1>No hay candidatos</h1>";
        }
       ?> 
        
       <table class="tabla3">
           <tr>
               <?php
               if($found==0){
                $i=0;
                $archivo=fopen($ruta,'r');
                  while($campos=fgetcsv($archivo,999,"\t")){
                     foreach($campos as $campo){
                         $i++;
                        if($i==1){
                            echo "<td id='backgound1'><input type='submit' name='Lista_A' value='$campo'></td>";
                        }
                      }     
                   }
                   fclose($archivo);
               }
               
               ?>
               <td id="vacio"></td>
               <?php
               if($found==0){
                $i=0;
                $archivo=fopen($ruta,'r');
                  while($campos=fgetcsv($archivo,999,"\t")){
                     foreach($campos as $campo){
                         $i++;
                        if($i==10){
                            echo "<td id='backgound2'><input type='submit' name='Lista_B' value='$campo'></td>";
                        }
                      }     
                   }
                   fclose($archivo);

               }
              
               ?>
           </tr>
       </table>
       <br>
       <table class="tabla3">
        <tr>
        <?php
        if($found==0){
            $i=0;
            $archivo=fopen($ruta,'r');
              while($campos=fgetcsv($archivo,999,"\t")){
                 foreach($campos as $campo){
                     $i++;
                    if($i==19){
                        echo "<td id='backgound3'><input type='submit' name='Lista_C' value='$campo'></td>";
                    }
                  }     
               }
               fclose($archivo);

        }
              
               ?>
            <td id="vacio"></td>
            <?php
            if($found==0){
                $i=0;
               $archivo=fopen($ruta,'r');
                 while($campos=fgetcsv($archivo,999,"\t")){
                    foreach($campos as $campo){
                        $i++;
                       if($i==28){
                           echo "<td id='backgound4'><input type='submit' name='Lista_D' value='$campo'></td>";
                       }
                     }     
                  }
                  fclose($archivo);

            }
               
               ?>
        </tr>
       </table>
      
    
    </div>
    <?php 
       if($found==0){

        
    ?>
    <div class="container"id="caracteristicas1" >
    <section class="tablavotos" >
            <label for="">Lista</label>
            <label for="">Presidente</label>
            <label for="">Vicepresidente</label>
            <label for="">Secretario</label>
            <label for="">Vocal</label>
        </section>
    <?php 
    $i=0;
    $archivo=fopen($ruta,'r'); 
     while($campos=fgetcsv($archivo,999,"\t")){
        echo "<section class='tablavotos' >";
        foreach($campos as $campo){
            if($i==0){
                echo "<label id='backgoundvoto1'></label>";
            }
            if($i==9){
                echo "<label id='backgoundvoto2'></label>";
            }
            if($i==18){
                echo "<label id='backgoundvoto3'></label>";
            }
            if($i==27){
                echo "<label id='backgoundvoto4'></label>";
            }
            $i++;
             echo "<label>$campo</label>";
             
         }
        echo "</section>"; 
               
      }
     fclose($archivo);
    }  ?> 
        <footer class="pie">
            <h2>Developed by Felix-2020®</h2>
        </footer>
    </div>
    </div>
</body>
</html>