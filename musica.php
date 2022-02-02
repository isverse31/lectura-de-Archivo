<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones con archivos de texto plano</title>
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

<center> <fieldset style="width: 35%">
<section class=section>

		<form action="guardar.php" method="post">
        <fieldset>
        <figure class="image is-128x128">
            <img  src="musica1.jpeg">
        </figure>
        </fieldset>
        
			<div>
				<label>nombre:</label>
				<input type="text" class="input" name="nombre" placeholder="Escribe tu nombre">
			</div>

			<div>
				<label>edad:</label>
				<input name="edad" class="input" type="number">
					
			</div>

            <div>
				<label>Que Género escuchas:</label>
				<input name="genero" class="input" type="text">
					
			</div>

			<input type="submit" class="button is-link" value="Guardar">
			
			<?php
				$nombre = fopen("musica.txt", "a+");

				while (!feof($nombre)) {
					$linea = fgets($nombre);
					echo nl2br($linea);
				}

				fclose($nombre);
			?>

<?php
				$edad = fopen("musica.txt", "a+");

				while (!feof($edad)) {
					$linea = fgets($edad);
					echo nl2br($linea);
				}

				fclose($edad);
			?>
			<?php
				$genero = fopen("musica.txt", "a+");

				while (!feof($genero)) {
					$linea = fgets($genero);
					echo nl2br($linea);
				}

				fclose($genero);
			?>
		</form>
		
        
	</section>
    </fieldset>
    
    </center>
</body>
</html>