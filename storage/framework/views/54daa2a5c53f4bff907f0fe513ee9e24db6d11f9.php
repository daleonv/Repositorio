<?php if($item["submenu"] == []): ?>
<li class="nav-item">
    <a href="<?php echo e(url($item['url'])); ?>" class="nav-link <?php echo e(getMenuActivo($item['url'])); ?>">
        <i class="nav-icon fa <?php echo e($item['icono']); ?>"></i>
        <p>
            <?php echo e($item["nombre"]); ?>

        </p>
    </a>
</li>
<?php else: ?>
<li class="nav-item has-treeview">
    <a href="javascript:;" class="nav-link">
        <i class="nav-icon fa <?php echo e($item['icono']); ?>"></i>
        <p>
            <?php echo e($item["nombre"]); ?>

            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <?php $__currentLoopData = $item["submenu"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make("theme.$theme.menu-item", ["item" => $submenu], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\app\resources\views/theme/lte/menu-item.blade.php ENDPATH**/ ?>