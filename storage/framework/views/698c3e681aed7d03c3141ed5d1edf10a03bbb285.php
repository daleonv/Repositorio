<?php $__env->startSection('titulo'); ?>
Áreas de conocimiento
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
                <h3 class="card-title">Área de conocimiento</h3>
                <div class="card-tools">
                    <a href="<?php echo e(route('inicio')); ?>" class="btn btn-outline-secondary btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver al menú principal
                    </a>
                </div>
                <!-- datos del docente -->
                <div class="col-sm-4 invoice-col">
                    <br>
                    <span class="info-box-icon"><i class="fas fa-book"></i></span>
                    <?php echo e($area->nombre); ?>

                    <br>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">Nº</th>
                            <th>Tema</th>
                            <th>Descripción</th>
                            <th>Docente</th>
                            <th>Recurso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1
                        ?>
                        <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($data->nombre); ?></td>
                            <td><?php echo e($data->descripcion); ?></td>
                            <td>
                                <?php $__currentLoopData = $docentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($docente->id==$data->usuario_id ? $docente->nombreCompleto :''); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td><a href="<?php echo e(route('inicio_recursos',['id'=>$data->id])); ?>">Ver recurso</a></td>
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
<?php echo $__env->make("theme.$theme.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/areas.blade.php ENDPATH**/ ?>