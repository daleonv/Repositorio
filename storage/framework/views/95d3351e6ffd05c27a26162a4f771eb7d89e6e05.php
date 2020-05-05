<?php $__env->startSection('titulo'); ?>
Recursos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="row">
    <div class="col-lg-12">
        <div id="timer">
            <?php echo $__env->make('includes.mensaje', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Recursos</h3>
                <div class="card-tools">
                    <a href="<?php echo e(route('crear_recurso')); ?>" class="btn btn-outline-secondary btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Crear recurso
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Recurso</td>
                            <td>Descripción</td>
                            <td>Idioma</td>
                            <td>Área de conocimiento</td>
                            <td>Opciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recurso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($recurso->nombre); ?></td>
                            <td><?php echo e($recurso->descripcion); ?></td>
                            <td>
                                <?php $__currentLoopData = $idiomas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idioma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($idioma->id==$recurso->idioma_id ? $idioma->nombre :''); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td><?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($area->id==$recurso->area_conocimiento_id ? $area->nombre :''); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                            <?php $__env->startSection('eliminar'); ?><?php echo e(route('eliminar_recurso',['id'=>$recurso->id])); ?><?php $__env->stopSection(); ?>
                            <td>
                                <a class="btn btn-link" href="<?php echo e(route('editar_recurso',['id'=>$recurso->id])); ?>">Editar</a> |
                                <form method="POST" action="<?php echo e(route('eliminar_recurso',['id'=>$recurso->id])); ?>" style="display:inline">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('DELETE')); ?>

                                    <button class="btn btn-link" onclick="return confirm('¿Está seguro que desea eliminar este elemento?')" type="submit">Borrar</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    
                    <?php echo e($datas->links()); ?>

                </ul>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("theme.$theme.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/recurso/index.blade.php ENDPATH**/ ?>