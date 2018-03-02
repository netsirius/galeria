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
                Hola, bienvenido a la galería
            </h1>
        </div>
    </header>
    <section class="fotos">
        <div class="contenedor">
            
            <?php foreach($photos as $photo): ?>
                <div class="thumb">
                    <a href="photo.php?id=<?php echo $photo['id'] ?>">
                        <img src="photos/<?php echo $photo['imagen'] ?>" alt="<?php echo $photo['titulo'] ?>">
                    </a>
                </div>
            <?php endforeach; ?>

            <div class="paginacion">
                <?php if ($actual_page > 1): ?>
                    <a href="index.php?page=<?php echo $actual_page - 1 ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
                <?php endif ?>
                <?php if ($total_pages != $actual_page): ?>
                    <a href="index.php?page=<?php echo $actual_page + 1 ?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
                <?php endif ?>
            </div>
        </div>
    </section>
    <footer>
        <p class="copyright">
            Simple galería creada como práctica de PHP
        </p>
    </footer>
</body>
</html>