
<?php $__env->startSection('title', 'Actividad'); ?>
<?php echo $__env->make('layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/style5.css')); ?>">

<div class="espacio">
<div class="contenido">
<table> 
    <thead>
        <th>Nombre</th>       
            <th>Curso</th>    
        <th></th>
    </thead>
    <tbody>
        <tr>
            <td><?php echo e($LoggedUserInfo['nombre']); ?></td>                         
                <td><?php echo e($curso); ?></td>           
            <td><a href="<?php echo e(route('auth.logout')); ?>">Cerrar sesion</a></td>
        </tr>
    </tbody>
</table>

    <br>
    <h1>Actividad</h1>
    <br>
    
    <?php $__currentLoopData = $actividades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actividad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <?php if($actividad->curso == $curso && $actividad->id == $id): ?>
            
            <h2><?php echo e($actividad->titulo); ?></h2>
            <p><?php echo e($actividad->descripcion); ?></p>
            <p>Fecha de entrega: <?php echo e($actividad->fecha_entrega); ?></p>

            <?php if($actividad->file_name): ?>
                <a href="<?php echo e(route('actividades.download', $actividad->file_name)); ?>">Descargar archivo adjunto</a>
            <?php endif; ?>

            <?php if(!session('LoggedAcudiente')): ?>
                <a href="<?php echo e(route('actividades.destroy',[$curso, $actividad])); ?>">Eliminar actividad</a> 
            <?php endif; ?>
        <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <br>
    
    <?php if(session('LoggedAcudiente')): ?>
        <?php $__currentLoopData = $entregas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entrega): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($entrega->id_acudiente == $LoggedUserInfo['id'] && $entrega->curso == $curso && $entrega->id_actividad == $id): ?>
                <p>Usted ya entrego esta actividad</p>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('actividades.entrega.create', [$curso, $id])); ?>">Entregar actividad</a>
        <?php else: ?> 
            
            <a href="<?php echo e(route('actividades.entrega.show', [$curso, $id])); ?>">Ver entregas</a>
    <?php endif; ?>
   </div>
   </div> 
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LibretaEscolar\resources\views/actividades/ver.blade.php ENDPATH**/ ?>