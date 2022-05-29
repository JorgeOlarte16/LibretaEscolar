
<?php $__env->startSection('title', 'Tablon de anuncios'); ?>
<?php echo $__env->make('layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
    <h1>Tablon de anuncios</h1>
    
    <table>
        <thead>
            <th>Nombre</th>
            <th>Curso</th>
            <th></th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo e($LoggedUserInfo['nombre']); ?></td>
                <td><?php echo e($LoggedUserInfo['curso']); ?></td>
                <td><a href="<?php echo e(route('auth.logout')); ?>">Cerrar sesion</a></td>
            </tr>
        </tbody>
    
    </table>


    <a href="<?php echo e(route('anuncios.create')); ?>">Nuevo anuncio</a>
    
    <?php $__currentLoopData = $anuncios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anuncio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php if($anuncio->curso == $LoggedUserInfo['curso']): ?>
        <h2><?php echo e($anuncio->titulo); ?></h2>
        <h3>Publicado por <?php echo e($anuncio->usuario); ?></h3>
        <p><?php echo e($anuncio->body); ?></p>
        <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LibretaEscolar\resources\views/anuncios/docente_show.blade.php ENDPATH**/ ?>