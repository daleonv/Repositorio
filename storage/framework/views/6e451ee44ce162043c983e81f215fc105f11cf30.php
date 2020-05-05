<?php $__env->startSection('titulo'); ?>
Usuarios
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="row">
    <div class="col-lg-12">
        <div id="timer">
            <?php echo $__env->make('includes.mensaje', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Usuarios</h3>
                <div class="card-tools">
                    <a href="<?php echo e(route('crear_usuario')); ?>" class="btn btn-outline-secondary btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Crear usuario
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Nombre</td>
                            <td>Correo</td>
                            <td>Carrera</td>
                            <td>Nivel</td>
                            <td>Operaciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($usuario->nombreCompleto); ?></td>
                            <td><?php echo e($usuario->correo); ?></td>
                            <?php $__currentLoopData = $carreras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carrera): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($usuario->carrera_id == $carrera->id): ?>
                            <td> <?php echo e($carrera->nombre); ?></td>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <td><?php echo e($usuario->nivel); ?></td>
                            <td>
                                <a class="btn btn-link" href="<?php echo e(route('editar_usuario',['id'=>$usuario->id])); ?>">Editar</a> |
                                <form method="POST" action="<?php echo e(route('eliminar_usuario',['id'=>$usuario->id])); ?>" style="display:inline">
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
<?php echo $__env->make("theme.$theme.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/admin/usuario/index.blade.php ENDPATH**/ ?>