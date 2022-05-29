

<?php $__env->startSection('title', 'Editar cursos'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Editar docente</h1>

    
    <form action="<?php echo e(route('admin.update_acudiente', $acudiente)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="<?php echo e(old('nombre', $acudiente->nombre)); ?>">
        </label>
        <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <br>
            <small>*<?php echo e($message); ?></small>
            <br>         
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>
        <label>
            Telefono:
            <br>
            <textarea name="telefono"  rows="5"><?php echo e(old('telefono', $acudiente->telefono)); ?></textarea>
        </label>

        <?php $__errorArgs = ['telefono'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <br>
            <small>*<?php echo e($message); ?></small>
            <br>         
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>
        <label>
            Usuario:
            <br>
            <input name="usuario" value="<?php echo e(old('usuario',$acudiente->usuario)); ?>">
        </label>

        <?php $__errorArgs = ['usuario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <br>
            <small>*<?php echo e($message); ?></small>
            <br>         
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>
        <br>
        
        <button type="submit">Actualizar acudiente</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LibretaEscolar\resources\views/admin/edit_acudiente.blade.php ENDPATH**/ ?>