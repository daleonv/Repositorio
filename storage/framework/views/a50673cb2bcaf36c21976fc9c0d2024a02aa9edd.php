<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Repositorio|Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/'.$theme.'/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/'.$theme.'/dist/css/adminlte.min.css')); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?php echo e(route('inicio')); ?>"><b>Repositorio</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Ingrese sus credenciales</p>
                <?php if($errors->any()): ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <form action="<?php echo e(route('login_post')); ?>" method="post" autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="<?php echo e(old('correo')); ?>" name="correo" placeholder="Correo">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Acceder</button>
                        </div>
                        <div class="col-6">
                            <a  class="btn btn-link" href="<?php echo e(route('crear_usuario')); ?>">Crear una cuenta</a>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo e(asset('assets/'.$theme.'/plugins/jquery/jquery.min.js')); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo e(asset('assets/'.$theme.'/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('assets/'.$theme.'/dist/js/adminlte.min.js')); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo e(asset('assets/'.$theme.'/dist/js/demo.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\app\resources\views/seguridad/index.blade.php ENDPATH**/ ?>