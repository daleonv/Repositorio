<?php $__env->startSection('titulo'); ?>
Recursos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('encabezado'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="row">
    <div class="col-lg-12">
        <div id="timer">
            <?php echo $__env->make('includes.mensaje', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="row">
            <!-- Visualizaciones -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-eye"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Visualizaciones</span>
                        <span class="info-box-number">
                            <?php echo e(contarVisualizaciones($datas->id)); ?>

                        </span>
                    </div>
                </div>
            </div>
            <!-- Puntuación -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-thumbs-up"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Puntuación</span>
                        <span class="info-box-number">
                            <?php echo e(getPuntuacion($datas->id)); ?>/5
                        </span>
                    </div>
                </div>
            </div>
            <div class="clearfix hidden-md-up"></div>
            <!-- Puntuación -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file-download"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Descargas</span>
                        <span class="info-box-number">
                            <?php echo e(contarDescargas($datas->id)); ?>

                        </span>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Información</h3>
                <div class="card-tools">
                    <a href="<?php echo e(route('inicio')); ?>" class="btn btn-outline-secondary btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th style="width:50%">
                            <strong><i class="fas fa-book mr-1"></i> Nombre del recurso</strong>
                            <p class="text-muted">
                                <?php echo e($datas->nombre); ?>

                            </p>
                        </th>
                        <th>
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Descripción del recurso</strong>
                            <p class="text-muted">
                                <?php echo e($datas->descripcion); ?>

                            </p>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <strong><i class="fas fa-pencil-alt mr-1"></i>Idioma</strong>
                            <p class="text-muted">
                                <?php $__currentLoopData = $idiomas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idioma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($datas->idioma_id==$idioma->id ? $idioma->nombre :''); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </p>
                        </th>
                        <th>
                            <strong><i class="fas fa-pencil-alt mr-1"></i>Área de conocimiento</strong>
                            <p class="text-muted">
                                <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($datas->area_conocimiento_id==$area->id ? $area->nombre :''); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </p>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <strong><i class="fas fa-pencil-alt mr-1"></i>Docente responsable</strong>
                            <p class="text-muted">
                                <?php $__currentLoopData = $docentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($datas->usuario_id==$docente->id ? $docente->nombreCompleto :''); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </p>
                        </th>
                        <th>
                            <strong><i class="fas fa-pencil-alt mr-1"></i>Fecha y hora de subida</strong>
                            <p class="text-muted">
                                <?php echo e($datas->created_at); ?>

                            </p>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <strong><i class="far fa-file-alt mr-1"></i> Opción</strong>
                            <p class="text-muted">
                                <a href="<?php echo e(route('descargar_archivo',['file'=>$datas->id])); ?>">Descargar</a>
                            </p>
                        </th>
                        <th>
                            <strong><i class="far fa-file-alt mr-1"></i> Puntuar recurso</strong>
                            <p class="text-muted">
                                <a href="#modal-default" data-toggle="modal">Click aquí</a>
                            </p>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- modal-puntuación -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Califica este recurso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio5" name="customRadio5">
                            <label for="customRadio5" class="custom-control-label">Excelente</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio4" name="customRadio4">
                            <label for="customRadio4" class="custom-control-label">Bueno</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio3" name="customRadio3">
                            <label for="customRadio3" class="custom-control-label">Regular</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio2">
                            <label for="customRadio2" class="custom-control-label">Malo</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio1">
                            <label for="customRadio1" class="custom-control-label">Muy malo</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("theme.$theme.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/recursos.blade.php ENDPATH**/ ?>