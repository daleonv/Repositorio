<?php if(session('mensaje')): ?>
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Mensaje</h5>
    <ul>
        <li><?php echo e(session('mensaje')); ?></li>
    </ul>
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\app\resources\views/includes/mensaje.blade.php ENDPATH**/ ?>