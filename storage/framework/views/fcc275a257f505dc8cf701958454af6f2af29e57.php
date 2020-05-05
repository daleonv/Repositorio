<?php $__env->startSection('titulo'); ?>
Menu-Rol
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/pages/scripts/admin/menu-rol/index.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenido'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Menús-Rol</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <?php echo csrf_field(); ?>
                <table class="table table-bordered" > 
                    <thead>
                        <tr>
                            <th>Menú</th>
                            <?php $__currentLoopData = $rols; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id =>$nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th><?php echo e($nombre); ?></th>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($menu["menu_id"] != 0): ?>
                        <?php break; ?>
                        <?php endif; ?>
                        <tr>
                            <td class="font-weight-bold"><i class="fa fa-arrows-alt"></i> <?php echo e($menu["nombre"]); ?></td>
                            <?php $__currentLoopData = $rols; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td class="text-center">
                                <input type="checkbox" class="menu_rol" name="menu_rol[]" data-menuid=<?php echo e($menu[ "id"]); ?> value="<?php echo e($id); ?>" <?php echo e(in_array($id, array_column($menusRols[$menu["id"]], "id"))? "checked" : ""); ?>>
                            </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                        <?php $__currentLoopData = $menu["submenu"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $hijo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="pl-40"><i class="fa fa-arrow-right"></i> <?php echo e($hijo["nombre"]); ?></td>
                            <?php $__currentLoopData = $rols; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td class="text-center">
                                <input type="checkbox" class="menu_rol" name="menu_rol[]" data-menuid=<?php echo e($hijo[ "id"]); ?> value="<?php echo e($id); ?>" <?php echo e(in_array($id, array_column($menusRols[$hijo["id"]], "id"))? "checked" : ""); ?>>
                            </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                        <?php $__currentLoopData = $hijo["submenu"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $hijo2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="pl-50"><i class="fa fa-arrow-right"></i> <?php echo e($hijo2["nombre"]); ?></td>
                            <?php $__currentLoopData = $rols; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td class="text-center">
                                <input type="checkbox" class="menu_rol" name="menu_rol[]" data-menuid=<?php echo e($hijo2["id"]); ?> value="<?php echo e($id); ?>" <?php echo e(in_array($id, array_column($menusRols[$hijo2["id"]], "id"))? "checked" : ""); ?>>
                            </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                        <?php $__currentLoopData = $hijo2["submenu"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $hijo3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="pl-60"><i class="fa fa-arrow-right"></i> <?php echo e($hijo3["nombre"]); ?></td>
                            <?php $__currentLoopData = $rols; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td class="text-center">
                                <input type="checkbox" class="menu_rol" name="menu_rol[]" data-menuid=<?php echo e($hijo3["id"]); ?> value="<?php echo e($id); ?>" <?php echo e(in_array($id, array_column($menusRols[$hijo3["id"]], "id"))? "checked" : ""); ?>>
                            </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("theme.$theme.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/admin/menu-rol/index.blade.php ENDPATH**/ ?>