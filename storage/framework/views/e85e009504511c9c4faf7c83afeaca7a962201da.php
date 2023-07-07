
<?php $__env->startSection('content'); ?>
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h5>Formulario editar</h5>
        <a href="<?php echo e(route('categorias.index')); ?>" class="btn btn-primary ml-auto">
            <i class="fas fa-arrow-left"> </i>
            Volver
        </a>
    </div>
</div>
<div class="card-body">
    <form action="<?php echo e(route('categorias.update', $categoria->idCategoria)); ?>" method="POST" enctype="multipart/form-data" id="create">
    <?php echo method_field('PUT'); ?>
    <?php echo $__env->make('categorias.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
</div>
<div class="card-footer">
    <button class="btn btn-warning" form="create">
        <i class="fas fa-pencil-alt"></i>
        Editar
    </button>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto-disi\resources\views/categorias/edit.blade.php ENDPATH**/ ?>