

<?php $__env->startSection('title', 'Reporte de notas'); ?>
<?php $__env->startSection('content'); ?>
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
   <h1>Reporte de notas</h1>
    <br>
    <table border="1px">
        <thead>
            <th>Nombre del estudiante</th>
            <?php $__currentLoopData = $actividades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actividad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <th><?php echo e($actividad->titulo); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </thead>

        <tbody>
        
            <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudiante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($estudiante->id_acudiente == $LoggedUserInfo['id']): ?>      
                    <tr>
                        <td><?php echo e($estudiante->nombre); ?></td>
                        <?php $__currentLoopData = $entregas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entrega): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($entrega->id_acudiente == $LoggedUserInfo['id']): ?>
                                <td><?php echo e($entrega->calificacion); ?></td>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                   
                    </tr>          
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>          
        </tbody>
    </table>
    <br>
    <a href="<?php echo e(route('reporte.generate.acudiente', [$curso])); ?>">Descargar reporte de notas</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LibretaEscolar\resources\views/reporte/show_acudiente.blade.php ENDPATH**/ ?>