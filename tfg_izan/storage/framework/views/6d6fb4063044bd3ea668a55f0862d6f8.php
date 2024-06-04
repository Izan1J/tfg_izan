

<?php $__env->startSection('content'); ?>
<div class="card mx-auto p-2" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Contenido de la noticia</p>
  </div>
</div>
<?php if(!$noticias): ?>
<p>no hay nada</p>
<?php endif; ?>
<?php $__currentLoopData = $noticias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tfg_izan\resources\views/admin/noticias/index.blade.php ENDPATH**/ ?>