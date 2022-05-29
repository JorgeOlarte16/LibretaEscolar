
<?php $__env->startSection('title', 'Registros'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/style3.css')); ?>">

    <div class="titulo">
    <h2>Acudientes</h2>
    <a href="<?php echo e(route('admin')); ?>">Volver</a>
    <a href="<?php echo e(route('admin.register_acudiente')); ?>">Registrar nuevo acudiente</a>
    </div>

    <div class="container">
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Usuario</th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $acudientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acudiente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
        <tr>
            <td><?php echo e($acudiente->id); ?></td>
            <td><?php echo e($acudiente->nombre); ?></td>
            <td><?php echo e($acudiente->telefono); ?></td>
            <td><?php echo e($acudiente->usuario); ?></td>
            <td>
                <form action="<?php echo e(route('admin.destroy_acudiente', $acudiente)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                <a href="<?php echo e(route('admin.edit_acudiente',$acudiente)); ?>">Editar</a>
                <button>Eliminar</button>
                </form>
            </td>
        </tr>
       </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplicaciones\laragon\www\LibretaEscolar\resources\views/admin/acudientes.blade.php ENDPATH**/ ?>