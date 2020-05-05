<div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label requerido">Nombre</label>
    <div class="col-sm-10">
        <input type="text" class="form-control <?php echo e($errors->has('nombre')?'is-invalid':''); ?>" name="nombre" id="nombre" value="<?php echo e(old('nombre', $data->nombre ?? '')); ?>">
        <?php echo $errors->first('nombre','<div class="invalid-feedback">:message</div>'); ?>

    </div>
</div>
<div class="form-group row">
    <label for="url" class="col-sm-2 col-form-label requerido">Url</label>
    <div class="col-sm-10">
        <input type="text" name="url" class="form-control <?php echo e($errors->has('url')?'is-invalid':''); ?>" id="url" value="<?php echo e(old('url', $data->url ?? '')); ?>">
        <?php echo $errors->first('url','<div class="invalid-feedback">:message</div>'); ?>

    </div>
</div>
<div class="form-group row">
    <label for="icono" class="col-sm-2 col-form-label">Ícono</label>
    <div class="col-sm-10">
        <input type="text" name="icono" class="form-control" id="icono" value="<?php echo e(old('icono', $data->icono ?? '')); ?>">
    </div>
</div><?php /**PATH C:\xampp\htdocs\app\resources\views/admin/menu/form.blade.php ENDPATH**/ ?>