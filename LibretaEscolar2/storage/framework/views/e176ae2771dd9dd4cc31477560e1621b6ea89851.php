
<?php $__env->startSection('title', 'Registros'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/style3.css')); ?>">

    <div class="titulo">
    <h2>Estudiantes</h2>
    <a href="<?php echo e(route('admin')); ?>">Volver</a>
    <a href="<?php echo e(route('admin.register_estudiante')); ?>">Registrar nuevo estudiante</a>
    </div>

    <div class="container">
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Curso</th>
            <th>Id acudiente</th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudiante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($estudiante->id); ?></td>
                <td><?php echo e($estudiante->nombre); ?></td>
                <td><?php echo e($estudiante->curso); ?></td>
                <td><?php echo e($estudiante->id_acudiente); ?></td>
                <td>
                    <form action="<?php echo e(route('admin.destroy_estudiante', $estudiante)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                    <a href="<?php echo e(route('admin.edit_estudiante',$estudiante)); ?>">Editar</a>
                    <button>Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LibretaEscolar\resources\views/admin/estudiantes.blade.php ENDPATH**/ ?>