
<?php $__env->startSection('title', 'registrar'); ?>

<?php $__env->startSection('content'); ?>

    <h1>Registrar</h1>

    <form action="<?php echo e(route('auth.save')); ?>" method="POST">

    <?php if(Session::get('success')): ?>
        <?php echo e(Session::get('succes')); ?>

    <?php endif; ?>
    <?php if(Session::get('fail')): ?>
        <?php echo e(Session::get('fail')); ?>

    <?php endif; ?>
    <?php echo csrf_field(); ?>
    
        <label>
            Nombre
            <br>
            <input type="text" name="nombre" placeholder="Ingrese nombre" value="<?php echo e(old('nombre')); ?>">
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
        <br>
        
        <label>
            Curso
            <br>
            <input type="text" name="curso" placeholder="Ingrese curso" value="<?php echo e(old('curso')); ?>">
        </label>
        <?php $__errorArgs = ['curso'];
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
        <label>
            Usuario
            <br>
            <input type="text" name="usuario" placeholder="Ingrese usuario" value="<?php echo e(old('usuario')); ?>">
        
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
        <label>
            Contraseña
            <br>
            <input type="password" name="contraseña" placeholder="Ingrese contraseña" >
        </label>
        <?php $__errorArgs = ['contraseña'];
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

        <button type="submit">Registrar</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LibretaEscolar\resources\views/auth/register.blade.php ENDPATH**/ ?>