<?php $__env->startSection("titulo"); ?>
Menú
<?php $__env->stopSection(); ?>

<?php $__env->startSection("styles"); ?>
<link href="<?php echo e(asset('assets/js/jquery-nestable/jquery.nestable.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scriptsPlugins"); ?>
<script src="<?php echo e(asset('assets/js/jquery-nestable/jquery.nestable.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>
<script src="<?php echo e(asset('assets/pages/scripts/admin/menu/index.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="row">
    <div class="col-lg-12">
        <div id="timer">
            <?php echo $__env->make('includes.mensaje', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Menús</h3>
                <div class="card-tools">
                    <a href="<?php echo e(route('crear_menu')); ?>" class="btn btn-outline-secondary btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Crear menú
                    </a>
                </div>
            </div>
            <div class="card-body">
                <?php echo csrf_field(); ?>
                <div class="dd" id="nestable">
                    <ol class="dd-list">
                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item["menu_id"] != 0): ?>
                        <?php break; ?>
                        <?php endif; ?>
                        <?php echo $__env->make("admin.menu.menu-item",["item" => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("theme.$theme.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/admin/menu/index.blade.php ENDPATH**/ ?>