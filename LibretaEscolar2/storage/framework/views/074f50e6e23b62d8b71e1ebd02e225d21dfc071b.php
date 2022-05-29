
<?php $__env->startSection('title','Crear actividad'); ?>
    
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/style5.css')); ?>">
<div class="espacio">
    <div class="content">
    <form action="<?php echo e(route('actividades.entrega.store', [$curso, $id])); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    
    <label>
        Descripcion
        <br>
        <textarea name="descripcion"  rows="5" ><?php echo e(old('descripcion')); ?></textarea>
    </label>
    <br>
    <br>
        Archivo
        <br>
        <input type="file" name="file" id="chooseFile" >
        <br>
        <label for="chooseFile"></label>
    <br>
    <button type="submit">Enviar formulario</button>
</form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LibretaEscolar\resources\views/actividades/create_entrega.blade.php ENDPATH**/ ?>