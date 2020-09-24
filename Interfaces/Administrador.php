<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
        if(!isset($_SESSION["admin"])){
           header("Location:../Index.php");
        }
      
        $ruta = "../Archivos/Padrones/Padronvista.csv";
        if (!file_exists($ruta)){
            exit("Archivo no Encontrado por favor verifique");
        }
        $archivo=fopen($ruta,'r');
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
        <h1>Administrador</h1>
        <nav class="navegacion">
            <ul>
                <li><a href="Admin/Descargas.php" >Descargas</a> </li>
                <li><a  href="Admin/Agregar.php" >Agregar votante</a></li>
            </ul>
        </nav>
    </div>
    <div class="containerpadron">
    <h1>Padron</h1>
    <br><br>
       <table class="padron">
           <tr>
               <th>Nombre y apellido</th>
               <th>N° de documento</th>
               <th>Correo electronico</th>
           </tr>
       </table>
     <?php 
     while($campos=fgetcsv($archivo,999,"\t")){
        echo "<table class='padron'>";
        echo "<tr>";
        foreach($campos as $campo){
             echo "<td>$campo </td>";
            
            
         }
        echo "</tr>";
        echo "</table>"; 
               
      }
     fclose($archivo);?> 
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