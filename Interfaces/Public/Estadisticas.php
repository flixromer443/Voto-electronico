<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../../Funciones/Porcentajes.php");
    $lista1=lista_A();
    $lista2=lista_B();
    $lista3=lista_C();
    $lista4=lista_D();
    $found=0;
    $ruta1="../../Archivos/Listas/Listado.csv";
    $ruta2="../../Archivos/Listas/Listadovista.csv";
    
        
        $cont=0;
        $archivo=fopen($ruta1,'r');
        while(!feof($archivo)){
            $linea=fgets($archivo);
            
            $cont+=strlen($linea);

        }
        fclose($archivo);
        if($cont==0){
            $found=1;
        }
        elseif($cont>1){
            $found=0;
        }
        ?>
   
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/d6fcbe9c4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../Estilos/Estilo.css">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="cabecera">
    <button><a href="../../Index.php"><i class="fas fa-arrow-left"></i> </a></button>
        <h1>Votemos</h1>
        <nav class="navegacion">
            <ul>
                <li><a href="#"id="active" >Estadisticas</a> </li>
                <li><a  href="Instructivo.php" >Como voto??</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
       <table class="tabla2" >
           <?php 
            if($found==1){
                echo "<h1>Lo sentimos pero todavia no se han cargado las listas</h1>"; 
            }
           ?>
           <tr>
               <?php 
               $i=0;
                if($found==0){
                  $archivo=fopen($ruta2,"r");
                  while($campos=fgetcsv($archivo,999,"\t")){
                      foreach($campos as $campo){
                          $i++;
                          if($i==1){
                              echo " <td id='color1'><p> $lista1%</p></td>";
                          }
                      }
                  }
                  fclose($archivo);
                }
               ?>
               <td id="vacio"></td>
               <?php 
               $i=0;
                if($found==0){
                  $archivo=fopen($ruta2,"r");
                  while($campos=fgetcsv($archivo,999,"\t")){
                      foreach($campos as $campo){
                          $i++;
                          if($i==9){
                              echo " <td id='color2'><p> $lista2%</p></td>";
                          }
                      }
                  }
                  fclose($archivo);
                }
               ?>
           </tr>
       </table>
       <br>
       <table class="tabla2">
        <tr>
        <?php 
               $i=0;
                if($found==0){
                  $archivo=fopen($ruta2,"r");
                  while($campos=fgetcsv($archivo,999,"\t")){
                      foreach($campos as $campo){
                          $i++;
                          if($i==22){
                              echo " <td id='color3'><p> $lista3%</p></td>";
                          }
                      }
                  }
                  fclose($archivo);
                }
               ?>
            <td id="vacio"></td>
            
            <?php 
               $i=0;
                if($found==0){
                  $archivo=fopen($ruta2,"r");
                  while($campos=fgetcsv($archivo,999,"\t")){
                      foreach($campos as $campo){
                          $i++;
                          if($i==30){
                              echo " <td id='color4'><p> $lista4%</p></td>";
                          }
                      }
                  }
                  fclose($archivo);
                }
               ?>
        </tr>
       </table>
    </div>
    <div class="container">
    <?php 
      
       if($found==0){

        
    ?>
    <div class="container">
    <section class="tablavotos">
            <label for="">Lista</label>
            <label for="">Presidente</label>
            <label for="">Vicepresidente</label>
            <label for="">Secretario</label>
            <label for="">Vocal</label>
        </section>
    <?php 
    $i=0;
    $archivo=fopen($ruta2,'r'); 
     while($campos=fgetcsv($archivo,999,"\t")){
        echo "<section class='tablavotos'>";
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
   
</body>
</html>