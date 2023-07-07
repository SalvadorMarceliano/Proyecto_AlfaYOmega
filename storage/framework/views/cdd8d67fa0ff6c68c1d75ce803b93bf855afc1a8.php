
<?php $__env->startSection('content'); ?>

<div class="card mt-3">
    <div>
        <h2>Productos</h2>
        <a href="<?php echo e(route ('productos.create')); ?>" class="btn btn-primary" <i class="fa-solid fa-plus"></i> Agregar </a>
        <!---->
        <a href="<?php echo e(route ('productos.pdf')); ?>" class="btn btn-primary" <i class="fa-solid fa-file-pdf"></i>Exportar PDF</a>
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
                <?php if($productos->total() > 10): ?>
                <?php echo e($productos->links()); ?>

                <?php endif; ?>
            </div>
    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Expiracion</th>
                <th scope="col">Stock</th>
                <th scope="col">Acciones</th>
            </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($producto->idProducto); ?></th>
            <td><?php echo e($producto->nombre); ?></td>
            <td><?php echo e($producto->descripcion); ?></td>
            <td><?php echo e($producto->precio); ?></td>
            <td><?php echo e($producto->expiracion); ?></td>
            <td><?php echo e($producto->stock); ?></td>
            <td></td>
            <td>
                <a href="<?php echo e(route('productos.show', $producto->idProducto)); ?>" class="btn btn-primary">
                    <i class="fas fa-eye"></i></a> 
                <a href="<?php echo e(route('productos.edit', $producto->idProducto)); ?>" class="btn btn-warning">
                    <i class="fas fa-pencil-alt"></i></a>
                
                    <button type="submit" class="btn btn-danger"
                                form="delete_<?php echo e($producto->idProducto); ?>"
                                onclick="return confirm('¿Estás seguro de eliminar el registro?')">
                                <i class="fas fa-trash"></i>
                                Eliminar
                            </button>
                        <form action="<?php echo e(route('productos.destroy', $producto->idProducto)); ?>"
                              id="delete_<?php echo e($producto->idProducto); ?>" method="post" enctype="multipart/form-data"
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
<?php if($productos->total() > 10): ?>
                    <?php echo e($productos->links()); ?>

                    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<!-- VA EN EL INDEX AL FINAL -->
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">

    $('#limit').on('change',function(){
        window.location.href = '<?php echo e(route('productos.index')); ?>?limit='+$(this).val()+'&search='+$('#search').val()
    })

    $('#search').on('keyup',function(e){
        if(e.keyCode== 13){
            window.location.href = '<?php echo e(route('productos.index')); ?>?limit='+$('#limit').val()+'&search='+$(this).val()
        }
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto-disi\resources\views/productos/index.blade.php ENDPATH**/ ?>