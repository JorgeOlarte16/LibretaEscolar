
<?php $__env->startSection('title','Crear Anuncio'); ?>
<?php echo $__env->make('layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/style5.css')); ?>">

<div class="espacio">
    <div class="content">
        <form action="<?php echo e(route('anuncios.store', $curso)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>
            Titulo
            <br>
            <input type="text" name="titulo" value="<?php echo e(old('name')); ?>">
        </label>
        <br>
        <br>
        <label>
            Contenido
            <br>
            <textarea name="body"  rows="5" ><?php echo e(old('descripcion')); ?></textarea>
        </label>
        <br>
        <br>
        <button type="submit">Enviar formulario</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplicaciones\laragon\www\LibretaEscolar\resources\views/anuncios/create.blade.php ENDPATH**/ ?>