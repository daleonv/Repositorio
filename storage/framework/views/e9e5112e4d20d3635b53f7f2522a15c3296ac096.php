<?php $__env->startSection('titulo'); ?>
Editar docente
<?php $__env->stopSection(); ?>

<?php $__env->startSection('encabezado'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="row">
    <div class="col-lg-12">
        <?php echo $__env->make('includes.form-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Editar docente</h3>
                <div class="card-tools">
                    <a href="<?php echo e(route('docente')); ?>" class="btn btn-outline-secondary btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver al listado
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="<?php echo e(route('actualizar_docente',['id'=>$docentes->id])); ?>" id="form-general">
                    <?php echo csrf_field(); ?> <?php echo method_field("put"); ?>
                    <div class="card-body">
                        <?php echo $__env->make('admin.docente.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="card-footer">
                        <?php echo $__env->make('includes.boton_form_editar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("theme.$theme.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/admin/docente/editar.blade.php ENDPATH**/ ?>