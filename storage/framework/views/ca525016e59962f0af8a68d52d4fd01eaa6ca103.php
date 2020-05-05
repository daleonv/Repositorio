<?php $__env->startSection("titulo"); ?>
Administrador
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="row">
<div class="col-lg-12">Bienvenidos</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("theme.$theme.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/admin/admin/index.blade.php ENDPATH**/ ?>