<?php echo csrf_field(); ?>
<div class="container-md">
  <div class="col-12">

    <div class="col-12"> <div form-group>
        <lavel for="">Razon Social</label>
        <input  type="decimal" class="form-control" name="razonSocial" value="<?php echo e((isset($factura))?$factura->razonSocial:old('razonSocial')); ?>" required>
    </div>

    </div>
        <div class="col-12"> <div form-group>
        <lavel for="">RFC</label>
        <input type="text" class="form-control" name="rfc" value="<?php echo e((isset($factura))?$factura->rfc:old('rfc')); ?>" oninput="calcularIVA()"required>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Venta</label>
            <select class="form-control" name="idventa">
                <option value="0">Seleccione una opcion</option>
                <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($venta->idventa); ?>" <?php if(isset($factura)): ?>
                <?php echo e(($factura->idVenta == $venta->idVenta)?'selected':""); ?>

                <?php endif; ?>><?php echo e($venta->idVenta); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>

    <!--<div class="col-12"> <div form-group>
        <lavel for="">total</label>
        <input id="total" type="decimal" class="form-control" name="total" value="<?php echo e(old('total')); ?>" required>
    </div>-->

    <div class="col-12"> <div form-group>
        <lavel for="resIVA">IVA</label>
        <input id="resIVA" type="int" class="form-control" name="iva" value="<?php echo e((isset($factura))?$factura->iva:old('iva')); ?>" required>
    </div>
        </div>
</div><?php /**PATH C:\xampp\htdocs\proyecto-disi\resources\views/facturas/partials/form.blade.php ENDPATH**/ ?>