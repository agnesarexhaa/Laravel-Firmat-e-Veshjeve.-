
<?php $__env->startSection('content'); ?>
<br>
<div class="card"  style="margin: 15px;" >
  <div class="card-header" style="background-color: #3b9cc6; color: #fff; padding: 0px; text-align: center;">
  <h4 style="font-size: 25px; margin: 17px 0px;"> Forma per Modifikimin e Firma te Veshjeve </h4>
</div>
  
  <div class="card-body">
      
      <form action="<?php echo e(url('firmaeVeshjes/' .$firmaeVeshjeve->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($firmaeVeshjeve->id); ?>"  id="id"/>
        <label style="margin-bottom: 8px;">Firma Veshjes</label></br>
        <input type="text" name="FirmaVeshjes_umfv" id="FirmaVeshjes_umfv" value="<?php echo e($firmaeVeshjeve->FirmaVeshjes_umfv); ?>" class="form-control"></br>
        <label style="margin-bottom: 8px;">Produkti Veshjes</label></br>
        <input type="text" name="ProduktiVeshjes_umfv" id="ProduktiVeshjes_umfv" value="<?php echo e($firmaeVeshjeve->ProduktiVeshjes_umfv); ?>" class="form-control"></br>
        <label style="margin-bottom: 8px;">Statusi Aplikacionit</label></br>
        <input type="text" name="CmimiVeshjes_umfv" id="CmimiVeshjes_umfv" value="<?php echo e($firmaeVeshjeve->CmimiVeshjes_umfv); ?>" class="form-control"></br>
        <input type="submit" value="Modifiko" style="padding: 4px 10px; border-radius: 10px; background-color:  #429559;"class="btn btn-success"></br>
    </form>

  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('firmaeVeshjeve.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_crud\resources\views/firmaeVeshjeve/edit.blade.php ENDPATH**/ ?>