<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Acudiente</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style2.css')); ?>">
</head>
<body>
    <section class="acudiente">
        <div class="container">
            <div class="user signinBx">
                <div class="imgBx"><img src="../css/Imagenes/Studentanime.jpg"></div>
                <div class="formBx"> 
                    <form action="<?php echo e(route('auth.check_acudiente')); ?>" method="POST">
                        <?php if(Session::get('fail')): ?>
                        <?php echo e(Session::get('fail')); ?>

                        <?php endif; ?>
                    
                        <?php echo csrf_field(); ?>

                        <h2>Iniciar Sesión Acudiente</h2>
                            <label>
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

                            <label>
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
                    
                            <button type="submit">Login</button>
                        </form>
                </div>
            </div>
        </div>
    </section>

</body>
</html><?php /**PATH D:\Aplicaciones\laragon\www\LibretaEscolar\resources\views/auth/loginacudiente.blade.php ENDPATH**/ ?>