<!DOCTYPE html>
<html lang="en">
<head>
    <?php
         session_start();
         if(!isset($_SESSION["admin"])){
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
    <button><a href="../Administrador.php"><i class="fas fa-arrow-left"></i> </a></button>
        <h1>Administrador</h1>
        <nav class="navegacion">
            <ul>
                <li><a href="Descargas.php" >Descargas</a> </li>
                <li><a  href="#" id="active">Agregar votante</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
       <form  class="formulario" action="../../Acciones/Insertar.php" method="POST">
            <input type="text" placeholder="Nombre y apellido" name="nombre" id="nombre" >
            <br>
            <input type="number" placeholder="N°de Documento" name="dni" id="dni" onchange="validar()">
            <p id="mensaje"></p>
            <br>
            <input type="email" placeholder="***@gmail.com" name="email" id="email" >
            <br>
            <input type="submit" name="insertar" value="Agregar">
        </form>
    </div>
    <div class="container">
        <footer class="pie">
            <h2>Developed by Felix-2020®</h2>
        </footer>
    </div>
   
</body>
</html>