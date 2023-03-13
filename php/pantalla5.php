<?php
session_start();
$_SESSION['pantalla5_completado'] = false;
if (!isset($_SESSION['pantalla4_completado']) || $_SESSION['pantalla4_completado'] != true) {
  header("Location: pantalla4.php");
  exit;
}

if (isset($_POST['submit'])) {
    // Código correcto
  $codigo_correcto = "sudo clamscan -r /"; 

  if ($_POST['codigo'] == $codigo_correcto) {

    $_SESSION['codigo_valido'] = true;
    header("Location: pantalla6.php");
    $_SESSION['pantalla5_completado'] = true;
    exit();
  } else {
    // Codigo incorrecto
    $mensaje_error = "No es correcto, prueba otra vez";
  }
}
?>
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
</html>
<body>
<div id="particles-js"></div>
<header>
  <a href="#" class="logo"></i><span>Escape Room Virtual</span>
  </a>
  <ul class="navbar">
    <li><a href="#" class="active"></a></li>
    <li><a href="../index.html">Home</a></li>
    <li><a href="#"><a onclick="toggleScan()">Pista</button></a></li>
  </ul>
</header>
    <!--Pista-->
  <div id="clamav">
    <p>clamscan -r /</p>
  </div>
    <!--Acertijo-->
  <p style="color: black;">i</p>
  <div class="acertijo1">
  <form class="formulario" method="post">
    <h3>Escanea el sistema de archivos completo con la herramienta clamav</h3>
    <br>
    <input type="text" name="codigo" id="codigo" placeholder="Escribe el comando necesario..." required>
    <br>
    <br>
    <button class="btn" type="submit" name="submit">Enviar</button>
    <br>
  </form>
  </div>


<!--Mostrar mensaje si el codigo no es correcto-->
<?php if (isset($mensaje_error)): ?>
    <br>
  <h3 class="resp"><?php echo $mensaje_error; ?></h3>
<?php endif; ?>
    
<!--Cuenta atras-->
    <div class="cont-temporizador">
        <div class="bloque">
            <div class="minutos" id="minutos">0</div>
            <p>MINUTOS</p>
        </div>
        <div class="bloque">
            <div class="segundos" id="segundos">--</div>
            <p>SEGUNDOS</p>
        </div>
    </div>
    <!--Enlace JavaScript-->
<script src="../js/main.js"></script>
<script src="../js/particles.min.js"></script>
<script src="../js/particulas.js"></script>
</body>
</html>