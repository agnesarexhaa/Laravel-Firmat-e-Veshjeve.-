
<?php $__env->startSection('content'); ?>
<br>
<div class="card"  style="margin: 15px;" >
  <div class="card-header" style="background-color: #f5f5f7; padding: 10px; text-align: center;">
  <h4 style="margin:0;"> Forma per Modifikimin e Aplikacioneve per Pune</h4>

</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('aplikacionPune/' .$aplikacionePune->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($aplikacionePune->id); ?>"  id="id"/>
        <label style="margin-bottom: 8px;">Aplikuesi</label></br>
        <input type="text" name="aplikuesi_umap" id="aplikuesi_umap" value="<?php echo e($aplikacionePune->aplikuesi_umap); ?>" class="form-control"></br>
        <label style="margin-bottom: 8px;">Pozita Aplikuar</label></br>
        <input type="text" name="pozitaAplikuar_umap" id="pozitaAplikuar_umap" value="<?php echo e($aplikacionePune->pozitaAplikuar_umap); ?>" class="form-control"></br>
        <label style="margin-bottom: 8px;">Statusi Aplikacionit</label></br>
        <input type="text" name="statusiAplikacionit_umap" id="statusiAplikacionit_umap" value="<?php echo e($aplikacionePune->statusiAplikacionit_umap); ?>" class="form-control"></br>
        <input type="submit" value="Modifiko" style="padding: 4px 10px; border-radius: 3px;"class="btn btn-success"></br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('aplikacionePune.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Desktop\xampp\htdocs\UMAP\laravel_crud\resources\views/aplikacionePune/edit.blade.php ENDPATH**/ ?>