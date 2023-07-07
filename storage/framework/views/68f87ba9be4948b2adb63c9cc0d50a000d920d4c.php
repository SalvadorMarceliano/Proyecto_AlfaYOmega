
<?php $__env->startSection('content'); ?>
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h5>Formulario ver productos id: <?php echo e($cliente->idCliente); ?></h5>
        <a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-primary ml-auto">
            <i class="fas fa-arrow-left"> </i>
            Volver
        </a>
    </div>
</div>
<div class="card-body">
    <form action="<?php echo e(route('clientes.store', $cliente->idCliente)); ?>" method="POST" enctype="multipart/form-data" id="create">
    <?php echo $__env->make('clientes.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
</div>
<div class="card-footer">
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto-disi\resources\views/clientes/show.blade.php ENDPATH**/ ?>