<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room Virtual</title>
    <link rel="shortcut icon" href="../Sources/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="./sources/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="./" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&family=Poppins:wght@300;700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://aframe.io/releases/1.4.0/aframe.min.js"></script>
</head>
<body>
     <!--Navbar-->
    <header>
        <a href="#" class="logo"></i><span>Escape Room Virtual</span>
        </a>
        <ul class="navbar">
            <li><a href="#" class="active"></a></li>
            <li><a href="../index.html">Home</a></li>
            <li><a href="#"><a onclick="toggleDesconect()">Pista</button></a></li>
        </ul>
    </header>
    <!--Pista-->
    <div id="desc">
            <p>Interfaz: enp0s3</p>
        </div>
     <!--Acertijo-->
     <p style="color: black;">i</p>
     <div class="acertijo1">
        <form class="formulario" action="./pantalla5.php" method="post">
            <h3>Desconecta el servidor de la red</h3>
            <br>
            <input type="text" name="resp5" placeholder="Escribe el comando necesario..." required>
            <br>
            <br>
            <button class="btn" type="submit">Enviar</button>
            <br>
        </form>
     </div>
<script src="../js/main.js"></script>
</body>