

<?php $__env->startSection('content'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Añade una nueva noticia al tablon</h1>
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
                        <form method="POST" action="<?php echo e(route('admin.noticias.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <input type="textarea" name="contenido" id="contenido" class="form-control <?php echo e($errors->has('contenido') ? 'is-invalid' : ''); ?>" placeholder="Escriba el contenido de la noticia" value="<?php echo e(old('contenido', '')); ?>">
                                <?php if($errors->has('contenido')): ?>
                                <span class="text-danger">
                                    <strong><?php echo e($errors->first('contenido')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-fw fa-lg fa-check-circle"></i>Publicar
                                    </button>
                                </div>
                            </div>
                            <input type="hidden" name="profe_id" id="profe_id" value="<?php echo e($id); ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tfg_izan\resources\views/admin/noticias/create.blade.php ENDPATH**/ ?>