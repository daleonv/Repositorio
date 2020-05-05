<?php $__env->startSection("titulo"); ?>
Permiso - Rol
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>
<script src="<?php echo e(asset('assets/pages/scripts/admin/permiso-rol/index.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="row">
    <div class="col-lg-12">
        <?php echo $__env->make('includes.mensaje', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Permiso - Rol</h3>
            </div>
            <div class="card-body ">
                <?php echo csrf_field(); ?>
                <table class="table table-bordered" > 
                    <thead>
                        <tr>
                            <th>Permiso</th>
                            <?php $__currentLoopData = $rols; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th class="text-center"><?php echo e($nombre); ?></th>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $permisos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $permiso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="font-weight-bold"><?php echo e($permiso["nombre"]); ?></td>
                                <?php $__currentLoopData = $rols; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td class="text-center">
                                        <input
                                        type="checkbox"
                                        class="permiso_rol"
                                        name="permiso_rol[]"
                                        data-permisoid=<?php echo e($permiso['id']); ?>

                                        value="<?php echo e($id); ?>" <?php echo e(in_array($id, array_column($permisosRols[$permiso["id"]], "id"))? "checked" : ""); ?>>
                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("theme.$theme.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/admin/permiso-rol/index.blade.php ENDPATH**/ ?>