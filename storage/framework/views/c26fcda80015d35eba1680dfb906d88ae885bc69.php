<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!--favicon-->
    <!--estilos-->

</head>

<body>
    <!--header-->
    <!--nav-->
    <center>
        <a href="/">Inicio</a>
        <a href="login">Login</a>
    


        <?php echo $__env->yieldContent('content'); ?>
    </center>
    <!--footer-->

</body>

</html>
<?php /**PATH /home/diego/projects/proyectoDiegoSW1/resources/views/layouts/plantilla.blade.php ENDPATH**/ ?>