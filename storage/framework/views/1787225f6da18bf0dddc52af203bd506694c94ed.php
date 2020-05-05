<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Eliminar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Está seguro que desea eliminar este elemento?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <form method="POST" action="<?php echo $__env->yieldContent('eliminar'); ?>">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

                    <button class="btn btn-primary" type="submit">Borrar</button>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\app\resources\views/theme/lte/modal.blade.php ENDPATH**/ ?>