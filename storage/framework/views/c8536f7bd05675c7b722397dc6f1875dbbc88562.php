<?php $__env->startSection("titulo"); ?>
Principal
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="container-fluid">
    <div class="row">
        <!-- TABLA 1 -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Autor</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">Nº</th>
                                <th>Nombre</th>
                                <th style="width: 40px">Recursos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1
                            ?>
                            <?php $__currentLoopData = $docentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><a href="<?php echo e(route('inicio_mostrar_autores',['id'=>$docente->id])); ?>"><?php echo e($docente->nombreCompleto); ?></a></td>
                                <td><span class="badge bg-primary"><?php echo e($docente->total); ?></span></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        
                        <?php echo e($docentes->links()); ?>

                    </ul>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.TABLA 1 -->
        <!-- TABLA 2 -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Área de conocimiento</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">Nº</th>
                                <th>Áreas</th>
                                <th style="width: 40px">Recursos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1
                            ?>
                            <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><a href="<?php echo e(route('inicio_mostrar_areas',['id'=>$area->id])); ?>"><?php echo e($area->nombre); ?></a></td>
                                <td><span class="badge bg-primary"><?php echo e($area->total); ?></span></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        
                        <?php echo e($areas->links()); ?>

                    </ul>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.TABLA 2 -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("theme.$theme.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/inicio.blade.php ENDPATH**/ ?>