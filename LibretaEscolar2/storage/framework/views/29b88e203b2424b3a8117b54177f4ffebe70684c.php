
<?php $__env->startSection('title', 'Registros'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/style3.css')); ?>">

    <div class="titulo">
    <h2>Docentes</h2>
    <a href="<?php echo e(route('admin')); ?>">Volver</a>
    <a href="<?php echo e(route('admin.register_docente')); ?>">Registrar nuevo docente</a>
    </div>
    <div class="container">
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th> 
            <th>Curso</th>
            <th>Usuario</th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $docentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($docente->id); ?></td>
            <td><?php echo e($docente->nombre); ?></td>
            <td><?php echo e($docente->curso); ?></td>
            <td><?php echo e($docente->usuario); ?></td>
            <td>
                <form action="<?php echo e(route('admin.destroy_docente', $docente)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                 <?php echo method_field('delete'); ?>
                    <a href="<?php echo e(route('admin.edit_docente',$docente)); ?>">Editar</a>
                    <button>Borrar</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LibretaEscolar\resources\views/admin/docentes.blade.php ENDPATH**/ ?>