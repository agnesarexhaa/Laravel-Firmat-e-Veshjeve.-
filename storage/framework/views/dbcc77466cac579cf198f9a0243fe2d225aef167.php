
<?php $__env->startSection('content'); ?>
<br>
<div class="card" style="margin: 15px;" >
  <div class="card-header" style="background-color:rgb(59, 172, 198); color: #fff; padding: 0px; text-align: center; ">
  <h4 style="font-size: 25px; margin: 17px 0; ">Forma per Shtimin e të Dhënave të Firmave të Veshjes </h4>
</div>
  <div class="card-body">
    
      <form action="<?php echo e(url('firmateVeshjes')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label style="margin-bottom: 8px;">FirmaVeshjes_umfv</label></br>
        <input type="text" name="FirmaVeshjes_umfv" id="FirmaVeshjes_umfv" class="form-control"></br>
        <label style="margin-bottom: 8px;">ProduktiVeshjes_umfv</label></br>
        <input type="text" name="ProduktiVeshjes_umfv" id="ProduktiVeshjes_umfv" class="form-control"></br>
        <label style="margin-bottom: 8px;">CmimiVeshjes_umfv</label></br>
        <input type="text" name="CmimiVeshjes_umfv" id="CmimiVeshjes_umfv" class="form-control"></br>
        <input type="submit" value="Ruaj" style="padding: 4px 26px; border-radius: 10px; background-color:rgb(66, 107, 149);" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('firmateVeshjeve.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_crud\resources\views/firmateVeshjeve/create.blade.php ENDPATH**/ ?>