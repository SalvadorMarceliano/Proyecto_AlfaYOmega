
<?php $__env->startSection('content'); ?>
<div class="card-mt-3">
<div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <a class="navbar-brand">Buscar</a>
                            <input class="form-control mr-sm-2" type="search" id="search" placeholder="Search" aria-label="Search"
                            value="<?php echo e((isset($_GET['search']))?$_GET['search']:''); ?>">  
                        </div>
                </div>    
                        <div class="col-8">
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
                    <div>
                    <?php if($facturas->total() > 5): ?>
                    <?php echo e($facturas->links()); ?>

                    <?php endif; ?>
                </div>
    </div>
    <div class ="col-9"> 
        <h1>Facturas</h1>
    <a href="<?php echo e(route('home')); ?>" class="btn btn-primary">
        Volver
    </a>
    <a href="<?php echo e(route('facturas.create')); ?>" class="btn btn-primary">
    Crear factura </a>
</div >
</div>
<div class="card-body">
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col"> id</th>
        <th scope="col"> rfc</th>
        <th scope="col"> razon Social</th>
        <th scope="col"> produbto</th>
        <th scope="col"> total </th> 
        <th scope="col"> IVA</th>
        <th> acciones </th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $facturas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $factura): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($factura->idfactura); ?></th>
            <td><?php echo e($factura->rfc); ?></td>
            <td width="40%"><?php echo e($factura->razonSocial); ?></td>
            <td>id-<?php echo e($factura->idventa); ?></td>
            <td><?php echo e($factura->total); ?></td>
            <td><?php echo e($factura->iva); ?></td>
            <td>
            <a href="<?php echo e(route('facturas.show',$factura->idfactura)); ?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>
            <a href="<?php echo e(route('facturas.edit',$factura->idfactura)); ?>" class="btn btn-success"><i class="fas fa-file"></i></a>
            <button type="submit" class="btn btn-danger"
                                        form="delete_<?php echo e($factura->idfactura); ?>"
                                        onclick="return confirm('¿Estás seguro de eliminar el registro?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <form action="<?php echo e(route('facturas.destroy', $factura->idfactura)); ?>"
                                        id="delete_<?php echo e($factura->idfactura); ?>" method="post" enctype="multipart/form-data"
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
<div class="card-foother" >
<?php if($facturas->total() > 10): ?>
    <?php echo e($facturas->links()); ?>

    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">

    $('#limit').on('change',function(){
        window.location.href = '<?php echo e(route('facturas.index')); ?>?limit='+$(this).val()+'&search='+$('#search').val()
    })

    $('#search').on('keyup',function(e){
        if(e.keyCode== 13){
            window.location.href = '<?php echo e(route('facturas.index')); ?>?limit='+$('#limit').val()+'&search='+$(this).val()
        }
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto-disi\resources\views/facturas/index.blade.php ENDPATH**/ ?>