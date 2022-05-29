

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Docente</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style2.css')); ?>">
</head>
<body>
    <section class="docente_registro">
        <div class="container">
            <div class="user signinBx">
                <div class="imgBx"><img src="../css/Imagenes/profesorgafas.jpg"></div>
                <div class="formBx"> 
                    <form action="<?php echo e(route('admin.save_docente')); ?>" method="POST">

                        <?php if(Session::get('success')): ?>
                            <?php echo e(Session::get('succes')); ?>

                        <?php endif; ?>
                        <?php if(Session::get('fail')): ?>
                            <?php echo e(Session::get('fail')); ?>

                        <?php endif; ?>
                        <?php echo csrf_field(); ?>
                        <h2>Registrar Docente</h2>   
                            <label>
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
                            <br>
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
                    
                            <br>
                            <br>
                            <label>
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
                            <br>
                            <a href="<?php echo e(route('show.docentes')); ?>">Volver</a>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
</html><?php /**PATH C:\laragon\www\LibretaEscolar\resources\views/admin/register_docente.blade.php ENDPATH**/ ?>