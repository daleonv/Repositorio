 <!-- nombre -->
 <div class="form-group row">
     <label for="nombre" class="col-sm-2 col-form-label requerido">Nombre del recurso</label>
     <div class="col-sm-10">
         <input type="text" class="form-control <?php echo e($errors->has('nombre')?'is-invalid':''); ?>" name="nombre" id="nombre" value="<?php echo e(old('nombre',$data->nombre ?? '')); ?>">
         <?php echo $errors->first('nombre','<div class="invalid-feedback">:message</div>'); ?>

     </div>
 </div>
 <!-- nombre -->
 <div class="form-group row">
     <label for="descripcion" class="col-sm-2 col-form-label requerido">Descripción</label>
     <div class="col-sm-10">
         <input type="text" class="form-control <?php echo e($errors->has('descripcion')?'is-invalid':''); ?>" name="descripcion" id="descripcion" value="<?php echo e(old('descripcion',$data->descripcion ?? '')); ?>">
         <?php echo $errors->first('descripcion','<div class="invalid-feedback">:message</div>'); ?>

     </div>
 </div>
 <!-- idioma -->
 <div class="form-group row">
     <label for="idioma_id" class="col-sm-2 col-form-label requerido">Idioma</label>
     <div class="col-sm-10">
         <?php if(isset($aux)): ?>
         <select name="idioma_id" id="idioma_id" class="form-control" required>
             <option value="">Seleccione el Idioma</option>
             <?php $__currentLoopData = $idiomas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idioma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <?php if($data->idioma_id == $idioma->id): ?>
             <option value="<?php echo e($idioma->id); ?>" selected>
                 <?php echo e($idioma->nombre); ?>

             </option>
             <?php else: ?>
             <option value="<?php echo e($idioma->id); ?>">
                 <?php echo e($idioma->nombre); ?>

             </option>
             <?php endif; ?>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select>
         <?php else: ?>
         <select name="idioma_id" id="idioma_id" class="form-control" required>
             <option value="">Seleccione el Idioma</option>
             <?php $__currentLoopData = $idiomas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idioma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <option value="<?php echo e($idioma->id); ?>" <?php echo e(old('idioma_id') == $idioma->id ? 'selected' : ''); ?>>
                 <?php echo e($idioma->nombre); ?>

             </option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select>
         <?php endif; ?>
         <?php echo $errors->first('idioma_id','<div class="invalid-feedback">:message</div>'); ?>

     </div>
 </div>
 <!-- área de conocimiento -->
 <div class="form-group row">
     <label for="area_conocimiento_id" class="col-sm-2 col-form-label requerido">Área conocimiento</label>
     <div class="col-sm-10">
         <?php if(isset($aux)): ?>
         <select name="area_conocimiento_id" id="area_conocimiento_id" class="form-control" required>
             <option value="">Seleccione el Área de conocimiento</option>
             <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <?php if($data->area_conocimiento_id == $area->id): ?>
             <option value="<?php echo e($area->id); ?>" selected>
                 <?php echo e($area->nombre); ?>

             </option>
             <?php else: ?>
             <option value="<?php echo e($area->id); ?>">
                 <?php echo e($area->nombre); ?>

             </option>
             <?php endif; ?>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select>
         <?php else: ?>
         <select name="area_conocimiento_id" id="area_conocimiento_id" class="form-control" required>
             <option value="">Seleccione el Área de conocimiento</option>
             <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <option value="<?php echo e($area->id); ?>" <?php echo e(old('area_conocimiento_id') == $area->id ? 'selected' : ''); ?>>
                 <?php echo e($area->nombre); ?>

             </option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select>
         <?php endif; ?>
         <?php echo $errors->first('area_conocimiento_id','<div class="invalid-feedback">:message</div>'); ?>

     </div>
 </div>
 <!-- ruta -->
 <div class="form-group row">
     <label for="ruta" class="col-sm-2 col-form-label requerido">Recurso</label>
     <div class="col-sm-10">
         <input type="file" class="form-control <?php echo e($errors->has('ruta')?'is-invalid':''); ?>" name="ruta" id="ruta" value="<?php echo e(old('ruta',$data->ruta ?? '')); ?>">
         <?php echo $errors->first('ruta','<div class="invalid-feedback">:message</div>'); ?>

     </div>
 </div>
 <input type="hidden" name="usuario_id" value="<?php echo e(session()->get('usuario_id')); ?>">
 <input type="hidden" name="conteo_descargas" value="0">
 <input type="hidden" name="numero_visitas" value="0">
 <input type="hidden" name="numero_votos" value="0">
 <input type="hidden" name="puntaje_total" value="0">
 <input type="hidden" name="promedio_puntaje" value="0">
 <input type="hidden" name="estado" value="1"><?php /**PATH C:\xampp\htdocs\app\resources\views/recurso/form.blade.php ENDPATH**/ ?>