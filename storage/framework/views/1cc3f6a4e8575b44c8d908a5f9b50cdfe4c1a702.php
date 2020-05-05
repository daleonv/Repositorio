<?php if($item["submenu"] == []): ?>
<li class="dd-item dd3-item" data-id="<?php echo e($item['id']); ?>">
    <div class="dd-handle dd3-handle"></div>
    <div class="dd3-content <?php echo e($item['url'] == 'javascript:;' ? 'font-weight-bold' : ''); ?>">
        <a href="<?php echo e(route('editar_menu', ['id' => $item['id']])); ?>"><?php echo e($item["nombre"] . " | Url -> " . $item["url"]); ?> Icono -> <i style="font-size:20px;" class="fa fa-fw <?php echo e(isset($item['icono']) ? $item['icono'] : ''); ?>"></i></a>
        <a href="<?php echo e(route('eliminar_menu', ['id' => $item['id']])); ?>" class="eliminar-menu tooltipsC" onclick="return confirm('¿Está seguro que desea eliminar este elemento?')" title="Eliminar este menú"><i class="text-danger far fa-trash-alt nav-icon"></i></i></a>
    </div>
</li>
<?php else: ?>
<li class="dd-item dd3-item" data-id="<?php echo e($item['id']); ?>">
    <div class="dd-handle dd3-handle"></div>
    <div class="dd3-content <?php echo e($item['url'] == 'javascript:;' ? 'font-weight-bold' : ''); ?>">
        <a href="<?php echo e(route('editar_menu', ['id' => $item['id']])); ?>"><?php echo e($item["nombre"] . " | Url -> " . $item["url"]); ?> Icono -> <i style="font-size:20px;" class="fa fa-fw <?php echo e(isset($item['icono']) ? $item['icono'] : ''); ?>"></i></a>
        <a href="<?php echo e(route('eliminar_menu', ['id' => $item['id']])); ?>" class="eliminar-menu tooltipsC" onclick="return confirm('¿Está seguro que desea eliminar este elemento?')" title="Eliminar este menú"><i class="text-danger far fa-trash-alt nav-icon "></i></a>
    </div>
    <ol class="dd-list">
        <?php $__currentLoopData = $item["submenu"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make("admin.menu.menu-item",[ "item" => $submenu ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\app\resources\views/admin/menu/menu-item.blade.php ENDPATH**/ ?>