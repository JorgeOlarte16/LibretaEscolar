
<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Login</h1>
    <form action="<?php echo e(route('auth.check_docente')); ?>" method="POST">
    <?php if(Session::get('fail')): ?>
        <?php echo e(Session::get('fail')); ?>

    <?php endif; ?>

    <?php echo csrf_field(); ?>
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
            <input type="password" name="contraseña" placeholder="Ingrese contraseña">
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

        <button type="submit">Inicia sesion</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LibretaEscolar\resources\views/auth/login.blade.php ENDPATH**/ ?>