<!-- nombre -->
<div class="form-group row">
    <label for="nombreCompleto" class="col-sm-2 col-form-label requerido">Nombre</label>
    <div class="col-sm-10">
        <input type="text" class="form-control <?php echo e($errors->has('nombreCompleto')?'is-invalid':''); ?>" name="nombreCompleto" id="nombreCompleto" value="<?php echo e(old('nombreCompleto', $docentes->nombreCompleto ?? '')); ?>">
        <?php echo $errors->first('nombreCompleto','<div class="invalid-feedback">:message</div>'); ?>

    </div>
</div>
<!-- correo -->
<div class="form-group row">
    <label for="correo" class="col-sm-2 col-form-label requerido">Correo</label>
    <div class="col-sm-10">
        <input type="text" class="form-control <?php echo e($errors->has('correo')?'is-invalid':''); ?>" name="correo" id="correo" value="<?php echo e(old('correo', $docentes->correo ?? '')); ?>">
        <?php echo $errors->first('correo','<div class="invalid-feedback">:message</div>'); ?>

    </div>
</div>
<!-- password -->
<div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label requerido">Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control <?php echo e($errors->has('password')?'is-invalid':''); ?>" name="password" id="password" value="<?php echo e(old('password', $docentes->password ?? '')); ?>">
        <?php echo $errors->first('password','<div class="invalid-feedback">:message</div>'); ?>

    </div>
</div>
<!-- reptetir password -->
<div class="form-group row">
    <label for="rpassword" class="col-sm-2 col-form-label requerido">Repetir password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control <?php echo e($errors->has('rpassword')?'is-invalid':''); ?>" name="rpassword" id="rpassword" value="<?php echo e(old('rpassword', $docentes->password ?? '')); ?>">
        <?php echo $errors->first('rpassword','<div class="invalid-feedback">:message</div>'); ?>

    </div>
</div>
<!-- carrera -->
<div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label requerido">Carrera</label>
    <div class="col-sm-10">
        <?php if(isset($aux)): ?>
        <select name="carrera_id" id="carrera_id" class="form-control" required>
            <option value="">Seleccione la Carrera</option>
            <?php $__currentLoopData = $carreras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carrera): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($docentes->carrera_id == $carrera->id): ?>
            <option value="<?php echo e($carrera->id); ?>" selected>
                <?php echo e($carrera->nombre); ?>

            </option>
            <?php else: ?>
            <option value="<?php echo e($carrera->id); ?>">
                <?php echo e($carrera->nombre); ?>

            </option>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php else: ?>
        <select name="carrera_id" id="carrera_id" class="form-control" required>
            <option value="">Seleccione la Carrera</option>
            <?php $__currentLoopData = $carreras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carrera): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($carrera->id); ?>" <?php echo e(old('carrera_id') == $carrera->id ? 'selected' : ''); ?>>
                <?php echo e($carrera->nombre); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php endif; ?>
        <?php echo $errors->first('carrera_id','<div class="invalid-feedback">:message</div>'); ?>

    </div>
</div><?php /**PATH C:\xampp\htdocs\app\resources\views/admin/docente/form.blade.php ENDPATH**/ ?>