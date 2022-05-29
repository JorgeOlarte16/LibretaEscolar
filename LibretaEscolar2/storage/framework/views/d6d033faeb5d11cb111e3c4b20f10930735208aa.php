

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style4.css')); ?>">
</head>

<body>
    <h1 class="titulo">Registros</h1>
    <div class="container">
        <a href="<?php echo e(route('show.acudientes')); ?>">
        <div class="serviceBox">
            <div class="icon" style="--i:#ffb508">
                <ion-icon name="people-circle-outline"></ion-icon>
            </div>
            <div class="content">
                <h1>Tabla Acudientes</h1>
            </div>
        </div>
        </a> 
    
        <a href="<?php echo e(route('show.docentes')); ?>">
        <div class="serviceBox">
            <div class="icon" style="--i:#fd6494">
                <ion-icon name="school-outline"></ion-icon>
            </div>
            <div class="content">
                <h1>Tabla Docentes</h1>
            </div>
        </div>
        </a>

        <a href="<?php echo e(route('show.estudiantes')); ?>">
        <div class="serviceBox">
            <div class="icon" style="--i:#43f390">
                <ion-icon name="library-outline"></ion-icon>
            </div>
            <div class="content">
                <h1>Tabla Alumnos</h1>
            </div>
        </div>
        </a>

        <a href="<?php echo e(route('auth.logout')); ?>">
        <div class="serviceBox">
            <div class="icon" style="--i:#4eb7ff">
                <ion-icon name="exit-outline"></ion-icon>
            </div>
            <div class="content">
                <h1>Cerrar Sesión</h1>
            </div>
        </div>
        </a>

    </div>

  
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html><?php /**PATH D:\Aplicaciones\laragon\www\LibretaEscolar\resources\views/admin/register.blade.php ENDPATH**/ ?>