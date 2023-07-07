
<?php $__env->startSection('content'); ?>

<div class="card mt-3">
    <div>
        <h2>Ventas</h2>
        <a href="<?php echo e(route ('ventas.create')); ?>" class="btn btn-primary" <i class="fa-solid fa-plus"></i> Agregar </a>
        
        <!--<a href="" class="btn btn-primary" <i class="fa-solid fa-file-pdf"></i>Exportar PDF</a>-->
    </div>
</div>
<div class="card-body"> 
    <!-- Search -->
    <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <a class="navbar-brand">Listar</a>
                        <select class="custom-select" id="limit" name="limit">
                            <?php $__currentLoopData = [10,20,50,100]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $limit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($limit); ?>" <?php if(isset($_GET['limit'])): ?>
                                <?php echo e(($_GET['limit']==$limit)?'selected': ''); ?><?php endif; ?>><?php echo e($limit); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>      
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-group">
                        <a class="navbar-brand">Buscar</a>
                        <input class="form-control mr-sm-2" type="search" id="search" placeholder="Search" aria-label="Search"
                        value="<?php echo e((isset($_GET['search']))?$_GET['search']:''); ?>">  
                    </div>
                </div>
                <?php if($ventas->total() > 10): ?>
                <?php echo e($ventas->links()); ?>

                <?php endif; ?>
            </div>
    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Fecha</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Total</th>
                <th scope="col">Producto</th>
                <th scope="col">Acciones</th>
            </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($venta->idVenta); ?></th>
            <td><?php echo e($venta->fecha); ?></td>
            <td><?php echo e($venta->cantidad); ?></td>
            <td><?php echo e($venta->total); ?></td>
            <td><?php echo e($venta->idProducto); ?>-<?php echo e($venta->producto->nombre); ?></td>
            <td></td>
            <td>
                <a href="<?php echo e(route('ventas.show', $venta->idVenta)); ?>" class="btn btn-primary">
                    <i class="fas fa-eye"></i></a> 
                <a href="<?php echo e(route('ventas.edit', $venta->idVenta)); ?>" class="btn btn-warning">
                    <i class="fas fa-pencil-alt"></i></a>
                
                    <button type="submit" class="btn btn-danger"
                                form="delete_<?php echo e($venta->idVenta); ?>"
                                onclick="return confirm('¿Estás seguro de eliminar el registro?')">
                                <i class="fas fa-trash"></i>
                                Eliminar
                            </button>
                        <form action="<?php echo e(route('ventas.destroy', $venta->idVenta)); ?>"
                              id="delete_<?php echo e($venta->idVenta); ?>" method="post" enctype="multipart/form-data"
                              hidden>
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('DELETE'); ?>
                        </form>


            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
    </table>
    </div>
</div>
<div class="card-footer">
<?php if($ventas->total() > 10): ?>
                    <?php echo e($ventas->links()); ?>

                    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto-disi\resources\views/ventas/index.blade.php ENDPATH**/ ?>