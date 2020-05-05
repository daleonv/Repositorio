<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo e(route('inicio')); ?>" class="brand-link">
    <img src="<?php echo e(asset('assets/'.$theme.'/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Repositorio</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <?php if(!Auth::guest()): ?>
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo e(asset('assets/'.$theme.'/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo e(session()->get('nombre_usuario')); ?></a>
      </div>
    </div>
    <?php endif; ?>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <?php $__currentLoopData = $menusComposer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($item["menu_id"] != 0): ?>
        <?php break; ?>
        <?php endif; ?>
        <?php echo $__env->make("theme.$theme.menu-item", ["item" => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside><?php /**PATH C:\xampp\htdocs\app\resources\views/theme/lte/aside.blade.php ENDPATH**/ ?>