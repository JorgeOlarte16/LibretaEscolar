
<?php $__env->startSection('title', 'Tablon de actividades'); ?>
<?php echo $__env->make('layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>

<div class="espacio">
    <h1>Tablon de actividades</h1>
    <br>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Curso</th>
            <th></th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo e($LoggedUserInfo['nombre']); ?></td>
                <td><?php echo e($LoggedUserInfo['curso']); ?></td>
                <td><a href="<?php echo e(route('auth.logout')); ?>">Cerrar sesion</a></td>
            </tr>
        </tbody>
    </table>
     
    <h1>Actividad: <?php echo e($actividad['titulo']); ?></h1>
    <table>
        <thead>
            <th>ID entrega</th>
            <th>Usuario</th>   
            <th>Descripcion</th>       
            <th>Archivo adjunto</th>  
            <th>Fecha de entrega</th> 
            <th>Calificacion</th> 
            <th></th>      
        </thead>

         <tbody>     
            <?php $__currentLoopData = $entregas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entrega): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <?php if($entrega->id_actividad == $id): ?>
                         
                        <td><?php echo e($entrega->id); ?></td>
                        <td><?php echo e($entrega->usuario); ?></td>
                        <td><?php echo e($entrega->descripcion); ?></td>
                        <td>
                            <?php if($entrega->file_name): ?>
                                <a href="<?php echo e(route('entrega.download', $entrega->file_name)); ?>">Descargar archivo adjunto</a>
                             <?php endif; ?> 
                        </td>
                        <td><?php echo e($entrega->created_at); ?></td>
                         <form action="<?php echo e(route('actividades.entrega.calificar', $entrega)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <td>
                                <input name="calificacion" value="<?php echo e($entrega->calificacion); ?>">
                                <?php $__errorArgs = ['calificacion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small>*<?php echo e($message); ?></small>      
                                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </td> 
                            <td>
                                <button type="submit">Calificar</button>
                            </td>
                        </form>  
                        <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>  
    </table>
</div>    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplicaciones\laragon\www\LibretaEscolar\resources\views/actividades/show_entrega.blade.php ENDPATH**/ ?>