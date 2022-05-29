
<?php $__env->startSection('title', 'Preview'); ?>
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/style5.css')); ?>">

<div class="espacio">
<table>
    <thead>
        <th>Nombre</th>       
        <th></th>
    </thead>
    <tbody>
        <tr>
            <td><?php echo e($LoggedUserInfo['nombre']); ?></td>                                  
            <td><a href="<?php echo e(route('auth.logout')); ?>">Cerrar sesion</a></td>
        </tr>
    </tbody>
</table>

    <h1>Libreta escolar</h1>
    <br>

    <?php
        $usuario = $LoggedUserInfo['usuario']
    ?>
    
    <?php if($LoggedUserInfo['tipousuario'] == 'docente'): ?>
    <a href="<?php echo e(route('actividades.create')); ?>">Nueva actividad</a>
    <?php endif; ?>

    <br>
    <h1>Estudiantes a su cargo</h1>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Curso</th>   
        </thead>
        <tbody>
            
                <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudiante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($estudiante->id_acudiente == $LoggedUserInfo['id']): ?>
                        <tr>
                            <td><a href="<?php echo e(route('anuncios.show.curso', $estudiante->curso)); ?>"><?php echo e($estudiante->nombre); ?></a></td>
                            <td><?php echo e($estudiante->curso); ?></td>
                        </tr>
                    <?php endif; ?>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
 
</table>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplicaciones\laragon\www\LibretaEscolar\resources\views/preview.blade.php ENDPATH**/ ?>