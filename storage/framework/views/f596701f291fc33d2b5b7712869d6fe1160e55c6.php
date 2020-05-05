<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('titulo','Repositorio'); ?></title>
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
    <?php echo $__env->yieldContent('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">

</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Inicio header -->
        <?php echo $__env->make("theme/$theme/header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Fin header -->
        <!-- Inicio aside -->
        <?php echo $__env->make("theme/$theme/aside", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Fin aside -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><?php echo $__env->yieldContent('encabezado'); ?></h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <?php echo $__env->yieldContent('contenido'); ?>
            </section>
            <!-- /.content -->
        </div>
        <!-- Inicio footer -->
        <?php echo $__env->make("theme/$theme/footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Fin footer -->
        
    </div>

    <!-- jQuery -->
    <script src="<?php echo e(asset('assets/'.$theme.'/plugins/jquery/jquery.min.js')); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo e(asset('assets/'.$theme.'/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('assets/'.$theme.'/dist/js/adminlte.min.js')); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo e(asset('assets/'.$theme.'/dist/js/demo.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
    <?php echo $__env->yieldContent('scriptsPlugins'); ?>
    <?php echo $__env->yieldContent('scripts'); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\app\resources\views/theme/lte/layout.blade.php ENDPATH**/ ?>