<?php $__env->startSection('titulo'); ?>
<?php echo e($tipo); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="row">
    <div class="col-lg-12">
        <div id="timer">
            <?php echo $__env->make('includes.mensaje', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Idiomas</h3>
                <div class="card-tools">
                    <a href="<?php echo e(route('crear_idioma')); ?>" class="btn btn-outline-secondary btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Crear idioma
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("theme.$theme.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/detalles.blade.php ENDPATH**/ ?>