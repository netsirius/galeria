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
                <?php 
                    if(!empty($photo['titulo'])){
                        echo $photo['titulo'];
                    }else{
                        echo $photo['imagen'];
                    }
                 ?>
            </h1>
        </div>
    </header>
    <div class="contenedor">
        <div class="foto">
            <img src="imagenes/<?php echo $photo['imagen']; ?>" alt="">
            <p class="texto">
                <?php 
                    if(!empty($photo['texto'])){
                        echo $photo['texto'];
                    }else{
                        echo $photo['imagen'];
                    }
                ?>
            </p>
            <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Volver</a>
        </div>
    </div>
    <footer>
        <p class="copyright">
            Simple galería creada como práctica de PHP
        </p>
    </footer>
</body>
</html>