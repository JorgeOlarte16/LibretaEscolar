
<?php $__env->startSection('title','Crear actividad'); ?>
<?php echo $__env->make('layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
    
<link rel="stylesheet" href="<?php echo e(asset('css/style5.css')); ?>">
<div class="espacio">
    <div class="content">    
    <form action="<?php echo e(route('actividades.store', $curso)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <label>
        Titulo
        <br>
        <input type="text" name="titulo" value="<?php echo e(old('titulo')); ?>">
    </label>
    <br>
    <label>
        <br>
        descripcion
        <br>
        <textarea name="descripcion"  rows="5" ><?php echo e(old('descripcion')); ?></textarea>
    </label>
    <br>
    <label>

        <input type="date" name="fecha_entrega" value="<?php echo e(old('fecha_entrega')); ?>">
    </label>
    <?php $__errorArgs = ['fecha_entrega'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small>*<?php echo e($message); ?></small>      
     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplicaciones\laragon\www\LibretaEscolar\resources\views/actividades/create.blade.php ENDPATH**/ ?>