
<?php $__env->startSection('content'); ?>
<div class="card-mt-3"> 
<h5> Formulario crear</h5>
    <a href="<?php echo e(route('facturas.index')); ?>" class="btn btn-primary">
    <i class="fa-sharp fa-light fa-pen"></i>Volver </a>
</div>
<div class="card-body">
    <form action="<?php echo e(route('facturas.store')); ?>" method="POST" enctype="multipart/form-data" id="create">
        <?php echo $__env->make('facturas.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </form>    

</div>
<div class="card-foother"> 
<button class="btn btn-primary" form="create">
    Crear
</button>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto-disi\resources\views/facturas/create.blade.php ENDPATH**/ ?>