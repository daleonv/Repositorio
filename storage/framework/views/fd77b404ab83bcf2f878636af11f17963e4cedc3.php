<?php $__env->startSection('titulo'); ?>
Permisos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('encabezado'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="row">
    <div class="col-lg-12">
        <div id="timer">
            <?php echo $__env->make('includes.mensaje', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Permisos</h3>
                <div class="card-tools">
                    <a href="<?php echo e(route('crear_permiso')); ?>" class="btn btn-outline-secondary btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Crear permiso
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Permiso</td>
                            <td>Slug</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $permisos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permiso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($permiso->id); ?></td>
                            <td><?php echo e($permiso->nombre); ?></td>
                            <td><?php echo e($permiso->slug); ?></td>
                            <td>
                                <a class="btn btn-link" href="<?php echo e(route('editar_permiso',['id'=>$permiso->id])); ?>">Editar</a> |
                                <form method="POST" action="<?php echo e(route('eliminar_permiso',['id'=>$permiso->id])); ?>" style="display:inline">
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
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("theme.$theme.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/admin/permiso/index.blade.php ENDPATH**/ ?>