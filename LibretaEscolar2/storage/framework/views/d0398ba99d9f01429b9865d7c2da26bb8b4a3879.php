
<?php $__env->startSection('title', 'Tablon de anuncios'); ?>
    
<?php $__env->startSection('content'); ?>
    <h1>Tablon de anuncios</h1>
    
    <a href="<?php echo e(route('anuncios.create')); ?>">Nuevo anuncio</a>
    
    <?php $__currentLoopData = $anuncios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anuncio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <h2><?php echo e($anuncio->titulo); ?></h2>
        <h3>Publicado por <?php echo e($anuncio->usuario); ?></h3>
        <p><?php echo e($anuncio->body); ?></p>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(route('auth.logout')); ?>">Cerrar sesion</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LibretaEscolar\resources\views/anuncios/anuncios.blade.php ENDPATH**/ ?>