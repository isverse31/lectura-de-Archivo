<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>
</style>
	<section class="hero is-primary">
  		<div class="hero-body">
    		<p class="title">
      			Música
    		</p>
  		</div>
	</section>

    
<section class="section">
<style>
body {
    background-color: #93B874;
}
</style>

<fieldset>
        <figure class="image is-128x128">
            <img  src="musica2.jpeg">
        </figure>
        </fieldset>
<?php

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];

$musical = fopen("musical.txt", "a+");

            echo "<h1 class='is-subtitle'>";
            echo "Hola " . $nombre . " hemos resibido sus datos. ";
            echo "Estos registros serán tomados para sacar gráficas.";
            echo "Los datos que usted nos ha dado son: ";
            echo "<br><br>Nombre: " . $nombre . ".";
            echo "<br>edad: " . $edad . "años". ".";
            echo "<br>Genero músical: " . $genero . ".";


        $fclose($musical);
?>
</body>
</html>