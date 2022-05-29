


<?php $__env->startSection('title', 'Tablon de anuncios'); ?>
<?php echo $__env->make('layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>

    <div class="espacio">
        
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
        <br>
        <br>
        <h1>Tablon de anuncios</h1>
        <a href="<?php echo e(route('anuncios.create', $curso)); ?>">Nuevo anuncio</a>

        <table>
            <thead>
                <th>Titulo</th>
                <th>Creador</th>
                <th>Asunto</th>
                <th></th>
            </thead>
            <?php $__currentLoopData = $anuncios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anuncio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($anuncio->curso == $LoggedUserInfo['curso'] || $anuncio->curso == $curso): ?>
                <tr>
                    <td><h3><?php echo e($anuncio->titulo); ?></h3></td>
                    <td><h3><?php echo e($anuncio->usuario); ?></h3></td>
                        <td><p><?php echo e($anuncio->body); ?></p></td>
                    <?php if($LoggedUserInfo['usuario']== $anuncio->usuario): ?>
                    <td> <a href="<?php echo e(route('anuncios.destroy', [$anuncio, $curso])); ?>">Eliminar anuncio</a></td>
                    <?php else: ?> <td> </td> 
                    <?php endif; ?>
                </tr>
                <?php endif; ?>
        
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LibretaEscolar\resources\views/anuncios/show.blade.php ENDPATH**/ ?>