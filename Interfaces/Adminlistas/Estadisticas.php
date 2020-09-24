<!DOCTYPE html>
<html lang="en">
<head>
   <?php
         session_start();
         if(!isset($_SESSION["adminlistas"])){
            header("Location:../../Index.php");
         }
    ?>
   <?php
    include("../../Funciones/Porcentajes.php");
    $lista1=lista_A();
    $lista2=lista_B();
    $lista3=lista_C();
    $lista4=lista_D();
    
     $ruta = "../../Archivos/Listas/Listadovista.csv";
     if (!file_exists($ruta)){
         exit("Archivo no Encontrado por favor verifique");
     }
     $archivo=fopen($ruta,'r');
   ?>
    <meta charset="UTF-8">
    <script src="../../Scripts/Contador.js"></script>
    <script src="https://kit.fontawesome.com/d6fcbe9c4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../Estilos/Estilo.css">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="cabecera">
    <button><a href="../Adminlistas.php"><i class="fas fa-arrow-left"></i> </a></button>
        <h1>Administrador de listas</h1>
        <nav class="navegacion">
            <ul>
                <li><a href="#"id="active" >Estadisticas</a> </li>
                <li><a  href="Generarlistas.php">Generar listas</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
   
       <?php 
        $i=0;
     while($campos=fgetcsv($archivo,999,"\t")){
        echo "<table class='tablaadminlistas'>";
        echo "<tr>";
        echo "<td>";
        
        foreach($campos as $campo){
            echo "<section>";
            $i++;
             echo "<h2 id='camposlistas'>$campo</h2>";
             if($i==3){
                 echo "<h3 id='cargoslistas'>Presidente</h3>"; 
                 echo "<br><br>";
             }
             if($i==5){
                echo "<h3  id='cargoslistas'>Vicepresidente</h3>"; 
                echo "<br><br>";
             }
             if($i==7){
                echo "<h3  id='cargoslistas'>Secretario</h3>"; 
                echo "<br><br>";
             }
             if($i==9){
                echo "<h3  id='cargoslistas'>Vocal</h3>"; 
                echo "<br><br>";
             }
             if($i==12){
                echo "<h3  id='cargoslistas'>Presidente</h3>"; 
                echo "<br><br>";

             }
             if($i==14){
                echo "<h3  id='cargoslistas'>Vicepresidente</h3>"; 
                echo "<br><br>";

             }
             if($i==16){
                echo "<h3  id='cargoslistas'>Secretario</h3>"; 
                echo "<br><br>";

             }
             if($i==18){
                echo "<h3  id='cargoslistas'>Vocal</h3>"; 
                echo "<br><br>";

             }
             if($i==22){
                echo "<h3  id='cargoslistas'>Presidente</h3>"; 
                echo "<br><br>";

             }
             if($i==24){
                echo "<h3  id='cargoslistas'>Vicepresidente</h3>"; 
                echo "<br><br>";

             }
             if($i==26){
                echo "<h3  id='cargoslistas'>Secretario</h3>"; 
                echo "<br><br>";

             }
             if($i==27){
                echo "<h3  id='cargoslistas'>Vocal</h3>"; 
                echo "<br><br>";

             }
             if($i==30){
                echo "<h3  id='cargoslistas'>Presidente</h3>"; 
                echo "<br><br>";

             }
             if($i==32){
                echo "<h3  id='cargoslistas'>Vicepresidente</h3>"; 
                echo "<br><br>";

             }
             if($i==34){
                echo "<h3  id='cargoslistas'>Secretario</h3>"; 
                echo "<br><br>";

             }
             if($i==36){
                echo "<h3  id='cargoslistas'>Vocal</h3>"; 
                echo "<br><br>";

             }
             if($i==1 || $i==11 || $i==20 || $i==29){
                 
                echo "<br><br>";
             }
             
             echo "</section>"; 
             
             if($i==9){
                echo "<br>";
                echo "<h1>Votos $lista1 %</h1>";
            }
            elseif($i==18){
                echo "<br>";
                echo "<h1>Votos $lista2 %</h1>";
            }
            elseif($i==27){
                echo "<br>";
                echo "<h1>Votos $lista3 %</h1>";
            }
            elseif($i==36){
                echo "<br>";
                echo "<h1>Votos $lista4 %</h1>";
            }
         }
         
         echo "</td>";
         echo "</tr>";
         echo "</table>";
               
      }
     fclose($archivo);?>
    </div>
     
    <div class="container"> 
    </div>
    <div class="container">
        <footer class="pie">
            <h2>Developed by Felix-2020®</h2>
        </footer>
    </div>
   
</body>
</html>