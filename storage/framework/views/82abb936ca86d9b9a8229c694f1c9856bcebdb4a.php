
<?php $__env->startSection('content'); ?>
<div class="card" style= "background-color:rgb(59, 179, 198);" >
  <div class="card-header">Forma per Shfaqjen e Firmat e Veshjeve</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">FirmaVeshjes_umfv : <?php echo e($firmateVeshjeve->FirmaVeshjes_umfv); ?></h5>
        <p class="card-text">ProduktiVeshjes_umfv : <?php echo e($firmateVeshjeve->ProduktiVeshjes_umfv); ?></p>
        <p class="card-text">CmimiVeshjes_umfv : <?php echo e($firmateVeshjeve->CmimiVeshjes_umfv); ?></p>
  </div>
      
    </hr>
    
  </div>
</div>
<?php echo $__env->make('firmateVeshjeve.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_crud\resources\views/firmateVeshjeve/show.blade.php ENDPATH**/ ?>