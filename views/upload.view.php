<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Gallery</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">
                Sube tu foto
            </h1>
        </div>
    </header>
    <div class="contenedor">
        <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <label for="foto">Selecciona tu foto</label>
            <input type="file" id="foto" name="foto">

            <label for="titulo">Título de la fotoSelecciona tu foto</label>
            <input type="text" id="titulo" name="titulo">
            <label for="texto">Descripción:</label>
            <textarea name="texto" id="texto" placeholder="Introduce una descripción"></textarea>

            <input type="submit" class="submit" value="Subir foto">

        </form>
    </div>
    <footer>
        <p class="copyright">
            Simple galería creada como práctica de PHP
        </p>
    </footer>
</body>
</html>