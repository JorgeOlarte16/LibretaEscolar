<link rel="stylesheet" href="<?php echo e(asset('css/style5.css')); ?>">

    <section>
        <div class="container">
            <header>
                <a href="#" class="logo">Libreta Escolar</a>
                <ul>

                    <li><a href="<?php echo e(route('anuncios.show.curso', $curso)); ?>" class="<?php echo e((request()->routeIs('anuncios.show.curso'))? 'active' : ''); ?>">Anuncios</a>                  
                    </li>
                    <li><a href="<?php echo e(route('actividades.show', $curso)); ?>" class="<?php echo e((request()->routeIs('actividades.show'))? 'active' : ''); ?>">Actividades</a>                   
                    </li>
                    <?php if(!session('LoggedAcudiente')): ?>
                    <li><a href="<?php echo e(route('reporte.show.docentes', $curso)); ?>" class="<?php echo e((request()->routeIs('reporte.show.docentes'))? 'active' : ''); ?>">Notas</a>                   
                    </li>
                    
                    <?php else: ?>
                        <li><a href="<?php echo e(route('reporte.show.acudiente', $curso)); ?>" class="<?php echo e((request()->routeIs('reporte.show.acudiente'))? 'active' : ''); ?>">Notas</a>                   
                        </li>
                    <?php endif; ?>

                    <?php if(session('LoggedAcudiente')): ?>
                        <li><a href="<?php echo e(route('acudientes.preview', $curso)); ?>" class="<?php echo e((request()->routeIs('acudientes.preview'))? 'active' : ''); ?>">Mis estudiantes</a> 
                        </li>
                    <?php endif; ?>      
                </ul>
            </header>
        </div>
    </section><?php /**PATH D:\Aplicaciones\laragon\www\LibretaEscolar\resources\views/layouts/partials/header.blade.php ENDPATH**/ ?>