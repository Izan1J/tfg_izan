

<?php $__env->startSection('content'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Inscribe a tu hijo!!</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <form method="POST" action="<?php echo e(route('admin.alumnos.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="curso" class="required">Curso</label>
                                <select class="form-control select2" name="curso" style="width: 100%;">
                                    <option value="">Seleccione un curso</option>
                                    <option value="0-1">0-1 año (2024)</option>
                                    <option value="1-2">1-2 año (2023)</option>
                                    <option value="2-3">2-3 año (2022)</option>
                                </select>
                                <?php if($errors->has('sexo')): ?>
                                <span class="text-danger">
                                    <strong><?php echo e($errors->first('sexo')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="nombre" class="required">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control <?php echo e($errors->has('nombre') ? 'is-invalid' : ''); ?>" placeholder="Ingrese el nombre de su hijo" value="<?php echo e(old('nombre', '')); ?>">
                                <?php if($errors->has('nombre')): ?>
                                <span class="text-danger">
                                    <strong><?php echo e($errors->first('nombre')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="apellidos" class="required">Apellidos</label>
                                <input type="text" name="apellidos" id="apellidos" class="form-control <?php echo e($errors->has('apellidos') ? 'is-invalid' : ''); ?>" placeholder="Ingrese los apellidos de su hijo" value="<?php echo e(old('apellidos', '')); ?>">
                                <?php if($errors->has('apellidos')): ?>
                                <span class="text-danger">
                                    <strong><?php echo e($errors->first('apellidos')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="sexo" class="required">Sexo</label>
                                <select class="form-control select2" name="sexo" id="sexo" style="width: 100%;">
                                    <option value="">Seleccione un sexo</option>
                                    <option value="chico">niño</option>
                                    <option value="chica">niña</option>
                                </select>
                                <?php if($errors->has('sexo')): ?>
                                <span class="text-danger">
                                    <strong><?php echo e($errors->first('sexo')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="fechnac" class="required">Fecha de Nacimiento</label>
                                <input name="fechnac" type="date" class="form-control date" value="<?php echo e(old('fechnac')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="sip" class="required">Numero tarjeta SIP (10 digitos)</label>
                                <input type="text" name="sip" id="sip" class="form-control <?php echo e($errors->has('sip') ? 'is-invalid' : ''); ?>" placeholder="Ingrese el numero de tarjeta sip de su hijo" value="<?php echo e(old('sip', '')); ?>">
                                <?php if($errors->has('sip')): ?>
                                <span class="text-danger">
                                    <strong><?php echo e($errors->first('sip')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="comedor" class="required">¿Solicita comedor?</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="comedor" id="comedor_si" value="1" <?php echo e(old('comedor') == '1' ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="comedor_si">Sí</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="comedor" id="comedor_no" value="0" <?php echo e(old('comedor') == '0' ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="comedor_no">No</label>
                                </div>
                                <?php if($errors->has('comedor')): ?>
                                <span class="text-danger">
                                    <strong><?php echo e($errors->first('comedor')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar
                                    </button>
                                </div>
                            </div>
                            <input type="hidden" name="id_tutora" id="id_tutora" value="5">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tfg_izan\resources\views/admin/alumnos/create.blade.php ENDPATH**/ ?>