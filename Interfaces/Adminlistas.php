<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
        if(!isset($_SESSION["adminlistas"])){
           header("Location:../Index.php");
        }
        $ruta = "../Archivos/Listas/Listadovista.csv";
        
        
      
    ?>
    <meta charset="UTF-8">
    <script src="../Scripts/Eventos.js"></script>
    <script src="https://kit.fontawesome.com/d6fcbe9c4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Estilos/Estilo.css">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="//validar2()">
    <div class="cabecera">
    <button><a href="../Index.php"><i class="fas fa-arrow-left"></i> </a></button>
        <h1>Administrador de listas</h1>
        <nav class="navegacion">
            <ul>
                <li><a href="Adminlistas/Estadisticas.php" >Estadisticas</a> </li>
                <li><a  href="Adminlistas/Generarlistas.php" >Generar listas</a></li>
            </ul>
        </nav>
    </div>
    <div class="containerpadron">
       
    <h1>Listas</h1>
    <?php
        $found=0;
        $cont=0;
        $archivo=fopen($ruta,'r');
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
        <?php
        if($found==1){
            echo "<h1>Aun no se han agregado listas</h1>"; 
        }
            if($found==0){

            
        
        ?>
    <br><br>
       <table class="padron">
           <tr>
               <th>Nombre</th>
               <th>Presidente</th>
               <th>Vicepresidente</th>
               <th>Secretario</th>
               <th>Vocal</th>
           </tr>
       </table>
       <?php 
       $archivo=fopen($ruta,'r');
     while($campos=fgetcsv($archivo,999,"\t")){
        echo "<table class='padron'>";
        echo "<tr>";
        $i=strlen($campos[0]);
         if($i>0){
        foreach($campos as $campo){
            
             echo "<td>$campo</td>";
            
         }
       
            echo "<td><form action='../Acciones/Eliminar.php' method='post'>
                <input type='hidden' name='nombre' value='$campos[0]'>
                <input type='submit' value='Eliminar'>
            </form></td>";
        }
       
        echo "</tr>";
        echo "</table>"; 
               
      }
     fclose($archivo); }?> 
    
    </div>
    <div class="container">
       <form  class="formulario" action="../Acciones/Reportar.php" method="POST">
            <input type="submit" name="insertar" value="Generar reporte">
        </form>
        <form  class="formulario" action="../Acciones/Cerraradmin.php" method="POST">
            <input type="submit" name="Cerrar_sesion" value="Cerrar sesion">
        </form>
    </div>
    <div class="container">
        <footer class="pie">
            <h2>Developed by Felix-2020®</h2>
        </footer>
    </div>
   
</body>
</html>