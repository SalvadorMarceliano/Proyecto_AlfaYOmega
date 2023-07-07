
<?php $__env->startSection('content'); ?>

<div class="card mt-3">
    <div>
        <h2>Categorias</h2>
        <a href="<?php echo e(route ('categorias.create')); ?>" class="btn btn-primary" <i class="fa-solid fa-plus"></i> Agregar </a>
        <a href="" class="btn btn-info" <i class="fa-solid fa-file-pdf"></i> Exportar PDF </a>
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
                <?php if($categorias->total() > 10): ?>
                <?php echo e($categorias->links()); ?>

                <?php endif; ?>
            </div>


    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
            </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($categoria->idCategoria); ?></th>
            <td><?php echo e($categoria->Nombre); ?></td>
            <td><?php echo e($categoria->Descripcion); ?></td>
            <td></td>
            <td>
                <a href="<?php echo e(route('categorias.show', $categoria->idCategoria)); ?>">
                    <i class="fas fa-eye"></i></a> 
                <a href="<?php echo e(route('categorias.edit', $categoria->idCategoria)); ?>">
                    <i class="fas fa-pencil-alt"></i></a>
                
                    <button type="submit" class="btn btn-danger"
                                form="delete_<?php echo e($categoria->idCategoria); ?>"
                                onclick="return confirm('¿Estás seguro de eliminar el registro?')">
                                <i class="fas fa-trash"></i>
                                Eliminar   
                            </button>
                        <form action="<?php echo e(route('categorias.destroy', $categoria->idCategoria)); ?>"
                              id="delete_<?php echo e($categoria->idCategoria); ?>" method="post" enctype="multipart/form-data"
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
<?php if($categorias->total() > 10): ?>
                    <?php echo e($clientes->links()); ?>

                    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">

    $('#limit').on('change',function(){
        window.location.href = '<?php echo e(route('categorias.index')); ?>?limit='+$(this).val()+'&search='+$('#search').val()
    })

    $('#search').on('keyup',function(e){
        if(e.keyCode== 13){
            window.location.href = '<?php echo e(route('categorias.index')); ?>?limit='+$('#limit').val()+'&search='+$(this).val()
        }
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto-disi\resources\views/categorias/index.blade.php ENDPATH**/ ?>