
<?php $__env->startSection('title', 'tablon'); ?>

<?php $__env->startSection('content'); ?>

<h1>Tablon</h1>
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
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LibretaEscolar\resources\views/docente/tablon.blade.php ENDPATH**/ ?>