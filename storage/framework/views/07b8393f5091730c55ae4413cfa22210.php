
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificacion Certicado</title>
    <link rel="icon" href="<?php echo e(asset('/pictures/FONDO_ARMORUM_VU_SGDEA.png')); ?>" type="image/x-icon">
    <!-- <link rel="icon" href="http://verificacertificados.test/pictures/FONDO_ARMORUM_VU_SGDEA.png" type="image/x-icon"> -->
</head>
<body>
<div class="header">
    <div class="title">
        <h1>Detalles del Código de Verificación</h1>
        <div class="logos">
            <div class="logo">
            <img class="alcaldia" src="<?php echo e(asset('/pictures/logo_duitama.jpg')); ?>" alt="Logo Duitama">
            <!-- <img class="alcaldia" src="http://verificacertificados.test/pictures/logo_duitama.jpg" alt="Logo Duitama"> -->
            </div>
            <div class="logo">
            <img class="armorum" src="<?php echo e(asset('/pictures/FONDO_ARMORUM_VU_SGDEA.png')); ?>" alt="Logo Armorum">

                <!-- <img class="armorum" src="http://verificacertificados.test/pictures/FONDO_ARMORUM_VU_SGDEA.png" alt="Logo Armorum"> -->
            </div>
        </div>
    </div>

</div>
<div class="contenedor">
<img src="<?php echo e(asset('/pictures/check_verificacion-removebg-preview.png')); ?>" alt="">
<!-- <img src="http://verificacertificados.test/pictures/check_verificacion-removebg-preview.png" alt=""> -->
    <div class="info">
        <div class="items">
            <div class="subtitle">
                <h2>Tipo trámite:</h2>
            </div>
            <div class="contenido">
                <span><?php echo e($content->t_pet); ?></span>
            </div>
        </div>
        <div class="items">
            <div class="subtitle">
                <h2>Consecutivo Salida:</h2>
            </div>
            <div class="contenido">
                <span><?php echo e($content->c_s); ?></span>
            </div>
        </div>
        <div class="items">
            <div class="subtitle">
                <h2>Fecha Salida:</h2>
            </div>
            <div class="contenido">
                <span><?php echo e($content->f_s); ?></span>
            </div>
        </div>
        <div class="items">
            <div class="subtitle">
                <h2>Fecha Radicado:</h2>
            </div>
            <div class="contenido">
                <span><?php echo e($content->f_rad); ?></span>
            </div>
        </div>
        <div class="items">
            <div class="subtitle">
                <h2>Número Radicado:</h2>
            </div>
            <div class="contenido">
                <span><?php echo e($content->rad); ?></span>
            </div>
        </div>
        <div class="items">
            <div class="subtitle">
                <h2>Cédula:</h2>
            </div>
            <div class="contenido">
                <span><?php echo e($cedula); ?></span>
            </div>
        </div>
        <div class="items">
            <div class="subtitle">
                <h2>Peticionario:</h2>
            </div>
            <div class="contenido">
                <span><?php echo e($content->n_t); ?></span>
            </div>
        </div>
        <div class="items" id="cod_pred">
            <div class="subtitle">
                <h2>Nro Predial y/o Catastral:</h2>
            </div>
            <div class="contenido">
                <span id="cod_p"><?php echo e($content->cod_p); ?></span>
            </div>
        </div>
    </div>
</div>
</body>
</html>




<style>
    body{
        font-family: system-ui;
    }
    .header{
        display: flex;
        align-items: center;
        justify-content:center;
        margin-bottom:2%;
    }
    .title{
        text-align: center;
    }
    .subtitle{
        width: 40%;
        font-size:small;
    }
    .contenido{
        width: 60%;
        font-size:medium;
    }
    .contenedor{
        display: flex;
        justify-content: center;
        width: 100%;
        position: relative;
        max-width: 600px; /* Ajusta según sea necesario */
        margin: 0 auto; /* Centra el contenedor horizontalmente */
    }
    .contenedor img {
        display: block;
        width: auto; /* Asegura que la imagen se ajuste al ancho del contenedor */
        height: auto; /* Mantiene la proporción de la imagen */
        position: absolute; /* Posiciona la imagen detrás del contenido */

        z-index: -1; /* Envía la imagen detrás del contenido */
        }
    .info{
        display: flex;
        flex-direction: column;
        align-items: stretch;
        max-width: 90%;
        position: relative; /* Para que los elementos hijos puedan ser posicionados relativos a .info */
        background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco con opacidad para asegurar la legibilidad */
        padding: 20px;
        border-radius: 10px; /* Opcional, para bordes redondeados */
    }
    .items:hover{
        background-color: #e1e1e1bd;
        
    }
    .items{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        padding-left: 2%;
        padding-right: 2%;
        border-bottom: solid #a0a0a0 1px;
    }
    .logos{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .logo{
        width: 10%;
    }
    .alcaldia{
        width: 100%;
    }
    .armorum{
        width: 50%;
    }
    @media screen and (max-width: 600px) {
        .logo{
            width: 40%;
        }
    }
    @media screen and (min-width: 601px) and (max-width: 1200px) {
        .logo{
            width: 20%;
        }
    }

</style>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const codigo = document.getElementById('cod_p').textContent.trim(); 
        const caja = document.getElementById('cod_pred');
        if (codigo === "") {
            caja.style.display = 'none';
        }
    });
</script>
<?php /**PATH C:\laragon\www\verificacertificados\resources\views/detalle.blade.php ENDPATH**/ ?>