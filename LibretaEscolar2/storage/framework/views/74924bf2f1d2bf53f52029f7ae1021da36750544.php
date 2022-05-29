
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Estudiante</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style2.css')); ?>">
</head>
<body>
    <section class="alumno_edit">
        <div class="container">
            <div class="user signinBx">
                <div class="imigBx"><section class="fondo"></section></div>
                <div class="formBx"> 
                    <form action="<?php echo e(route('admin.update_estudiante', $estudiante)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <h1>Editar alumno</h1>
                        <label>
                            Nombre:
                            <br>
                            <input type="text" name="nombre" value="<?php echo e(old('nombre', $estudiante->nombre)); ?>">
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
                            Curso:
                            <br>
                            <select name="curso" id="curso">
                
                                <option value="preescolar">preescolar</option>
                                <option value="prejardin">prejardin</option>
                                <option value="jardin">jardin</option>
                                <option value="transicion">transicion</option>
                                <option value="primero">primero</option>
                                <option value="segundo">segundo</option>
                                <option value="tercero">tercero</option>
                                <option value="cuarto">cuarto</option>
                                <option value="quinto">quinto</option>
                
                            </select>
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
                        <label>
                            Id de acudiente:
                            <br>
                            <input name="id_acudiente" value="<?php echo e(old('id_acudiente',$estudiante->id_acudiente)); ?>">
                        </label>
                
                        <?php $__errorArgs = ['id_acudiente'];
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
</html><?php /**PATH D:\Aplicaciones\laragon\www\LibretaEscolar\resources\views/admin/edit_estudiante.blade.php ENDPATH**/ ?>