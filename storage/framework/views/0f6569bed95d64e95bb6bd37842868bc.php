<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error de Validación</title>
    <link rel="icon" href="<?php echo e(asset('/pictures/FONDO_ARMORUM_VU_SGDEA.png')); ?>" type="image/x-icon">

    <!-- <link rel="icon" href="http://verificacertificados.test/pictures/FONDO_ARMORUM_VU_SGDEA.png" type="image/x-icon"> -->
</head>

<body>
    <div class="contenedor">
        <div class="subcontenedor">
            <div class="items">
                <img class="img1" src="<?php echo e(asset('/pictures/error-icon-4.png')); ?>" alt="Error">
                <!-- <img class="img1" src="http://verificacertificados.test/pictures/error-icon-4.png" alt="Error"> -->
            </div>
            <div class="items">
                <h1>Error de Validación</h1>
            </div>
            <div class="items">
                <h2>La información proporcionada no es correcta. Por favor, inténtelo de nuevo.</h2>
            </div>
            <div class="items">
                <img class="img2" src="<?php echo e(asset('/pictures/robot_error1.png')); ?>" alt="Error">
                <!-- <img class="img2" src="http://verificacertificados.test/pictures/robot_error1.png" alt="Error"> -->
            </div>
        </div>
    </div>
</body>

<style>

    body{
        background-color: #1E1E1E;
        color:#fff;
        font-family: system-ui;
    }
    .contenedor{
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 7%;
    }
    .subcontenedor{
        display: flex;
        flex-direction: column;
        justify-content: center;
        border: solid #fff 4px;
        border-radius: 10px;
        padding: 5% 5% 0 5%;
    }
    .items{
        display: flex;
        justify-content: center;
    }    
    h1{
        text-transform: uppercase;
        text-align: center;
    }
    h2{
        font-weight: 100;
        text-align: justify;
    }
    .img1{
        width: 12%;
    }
    .img2{
        width: 25%;
    }
</style>
</html><?php /**PATH C:\laragon\www\verificacertificados\resources\views/no.blade.php ENDPATH**/ ?>