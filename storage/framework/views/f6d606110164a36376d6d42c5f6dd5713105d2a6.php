
<?php $__env->startSection('content'); ?>
<div class="card-mt-3"> 
<h5> Formulario editar</h5>
    <a href="<?php echo e(route('ventas.index')); ?>" class="btn btn-primary">
    <i class="fa-sharp fa-light fa-pen"></i>Volver </a>
<div>
<div class="card-body">
    <form action="<?php echo e(route('ventas.update',$venta->idVenta)); ?>" method="POST" enctype="multipart/form-data" id="Update">
        <?php echo method_field('PUT'); ?>
        <?php echo $__env->make('ventas.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>    

</div>
<div class="card-foother" >
<button class="btn btn-primary" form="Update">
    Actualizar 
</button>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto-disi\resources\views/ventas/edit.blade.php ENDPATH**/ ?>