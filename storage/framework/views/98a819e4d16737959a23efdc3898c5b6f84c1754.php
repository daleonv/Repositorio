<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo e(route('inicio')); ?>" class="nav-link">Inicio</a>
    </li>
  </ul>

  <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
  <?php if(Auth::guest()): ?>
  <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('login')); ?>" role="button">
        Iniciar Sesión
      </a>
    </li>                  
<?php else: ?>
<li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('logout')); ?>" role="button">
        Cerrar Sesión
      </a>
    </li>
<?php endif; ?>
    
    
  </ul>
</nav>
<!-- /.navbar --><?php /**PATH C:\xampp\htdocs\app\resources\views/theme/lte/header.blade.php ENDPATH**/ ?>