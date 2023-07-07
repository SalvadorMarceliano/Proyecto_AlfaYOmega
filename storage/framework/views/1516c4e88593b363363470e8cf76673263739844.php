
<?php $__env->startSection('content'); ?>
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h5>Formulario de registro</h5>
        <a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-primary">
            <i class="fas fa-arrow-left"> </i>
            Volver
        </a>
    </div>
</div>
<div class="card-body">
    <form action="<?php echo e(route('clientes.store')); ?>" method="POST" enctype="multipart/form-data"
    id="create">
    <?php echo $__env->make('clientes.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
</div>
<div class="card-footer">
    <button class="btn btn-primary" form="create">
        <i class="fas fa-plus"></i>
        Crear
    </button>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto-disi\resources\views/clientes/create.blade.php ENDPATH**/ ?>