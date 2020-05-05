<div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label requerido">Nombre</label>
    <div class="col-sm-10">
        <input type="text" class="form-control <?php echo e($errors->has('nombre')?'is-invalid':''); ?>" name="nombre" id="nombre" value="<?php echo e(old('nombre', $data->nombre ?? '')); ?>">
        <?php echo $errors->first('nombre','<div class="invalid-feedback">:message</div>'); ?>

    </div>
</div>
<div class="form-group row">
    <label for="url" class="col-sm-2 col-form-label requerido">Slug</label>
    <div class="col-sm-10">
        <input type="text" name="slug" class="form-control <?php echo e($errors->has('slug')?'is-invalid':''); ?>" id="slug" value="<?php echo e(old('slug', $data->slug ?? '')); ?>">
        <?php echo $errors->first('slug','<div class="invalid-feedback">:message</div>'); ?>

    </div>
</div><?php /**PATH C:\xampp\htdocs\app\resources\views/admin/permiso/form.blade.php ENDPATH**/ ?>