<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Reporte de notas</h1>

    <table>
        <thead>
            <th>Nombre del estudiante</th>
            <?php $__currentLoopData = $actividades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actividad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <th><?php echo e($actividad->titulo); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </thead>

        <tbody>
            <tr><td></td></tr>
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
                <?php else: ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>          
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\laragon\www\LibretaEscolar\resources\views/reporte/descarga_acudiente.blade.php ENDPATH**/ ?>