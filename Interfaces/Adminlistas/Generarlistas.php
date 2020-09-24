<!DOCTYPE html>
<html lang="en">
<head>
    <?php
         session_start();
         if(!isset($_SESSION["adminlistas"])){
            header("Location:../../Index.php");
         }
    ?>
    <meta charset="UTF-8">
    <script src="../../Scripts/Eventos.js"></script>
    <script src="https://kit.fontawesome.com/d6fcbe9c4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../Estilos/Estilo.css">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <div class="cabecera">
    <button><a href="../Adminlistas.php"><i class="fas fa-arrow-left"></i> </a></button>
        <h1>Administrador de listas</h1>
        <nav class="navegacion">
            <ul>
                <li><a href="Estadisticas.php" >Estadisticas</a> </li>
                <li><a  href="#" id="active">Generar listas</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
       <form  class="formulario" action="../../Acciones/Generar.php" method="POST">
            <input type="text" placeholder="Nombre de la lista" name="nombre" id="nombre" >
            <br> <p id="mensaje"> Integrantes </p>
            <input type="Text" placeholder="Presidente" name="presidente" id="presidente" >
            <input type="Text" placeholder="Vicepresidente" name="vicepresidente" id="vicepresidente">
            <p id="mensaje"></p>
            <br>
            <input type="Text" placeholder="Secretario" name="secretario" id="secretario">
            <input type="Text" placeholder="Vocal" name="vocal" id="vocal">
            <p id="mensaje"></p>
            <br>            
            <input type="submit" name="generar" value="Generar">
        </form>
    </div>
    <div class="container">
        <footer class="pie">
            <h2>Developed by Felix-2020®</h2>
        </footer>
    </div>
   
</body>
</html>