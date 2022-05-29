

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Acudiente</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style2.css')); ?>">
</head>
<body>
    <section class="acudiente_edit">
        <div class="container">
            <div class="user signinBx">
                <div class="imagBx"><section class="fondo"></section></div>
                <div class="formBx"> 
                    <form action="<?php echo e(route('admin.update_acudiente', $acudiente)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <h1>Editar acudiente</h1>
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
                        
                        <button type="submit">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
</html><?php /**PATH D:\Aplicaciones\laragon\www\LibretaEscolar\resources\views/admin/edit_acudiente.blade.php ENDPATH**/ ?>