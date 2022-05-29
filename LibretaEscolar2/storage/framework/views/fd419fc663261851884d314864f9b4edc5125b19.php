
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
     
    <?php if(!session('LoggedAcudiente')): ?>
    <br>
    <br>
        <a href="<?php echo e(route('actividades.create', $curso)); ?>">Nueva actividad</a>
    <?php endif; ?>
    <br>
    <table>
        <thead>
            <th>Titulo</th>
            <th></th>
        </thead>
        <?php $__currentLoopData = $actividades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actividad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($actividad->curso == $LoggedUserInfo['curso'] || $actividad->curso == $curso): ?>
            <tr>
                <td><h2><?php echo e($actividad->titulo); ?></h2></td>
                <td><a href="<?php echo e(route('actividades.ver', [$curso, $actividad->id])); ?>">Ver actividad</a></td>
            </tr>    
            <?php endif; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>   
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplicaciones\laragon\www\LibretaEscolar\resources\views/actividades/show.blade.php ENDPATH**/ ?>