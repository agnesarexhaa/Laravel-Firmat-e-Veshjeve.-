
<?php $__env->startSection('content'); ?>
<br>
<div class="card" style="margin: 15px;" >
  <div class="card-header" style="background-color: #3b9cc6; color: #fff; padding: 0px; text-align: center; ">
  <h4 style="font-size: 25px; margin: 17px 0; ">Forma per Shtimin e Aplikacioneve per Pune </h4>
</div>
  <div class="card-body">
    
      <form action="<?php echo e(url('aplikacionPune')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label style="margin-bottom: 8px;">Aplikuesi</label></br>
        <input type="text" name="aplikuesi_umap" id="aplikuesi_umap" class="form-control"></br>
        <label style="margin-bottom: 8px;">Pozita Aplikuar</label></br>
        <input type="text" name="pozitaAplikuar_umap" id="pozitaAplikuar_umap" class="form-control"></br>
        <label style="margin-bottom: 8px;">Statusi Aplikacionit</label></br>
        <input type="text" name="statusiAplikacionit_umap" id="statusiAplikacionit_umap" class="form-control"></br>
        <input type="submit" value="Ruaj" style="padding: 4px 26px; border-radius: 10px; background-color:  #429559;" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('aplikacionePune.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Desktop\xampp\htdocs\laravel_crud\resources\views/aplikacionePune/create.blade.php ENDPATH**/ ?>