
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('person/' .$persons->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($persons->id); ?>" id="id" />
        <label>FullName</label></br>
        <input type="text" name="FullName" id="FullName" value="<?php echo e($persons->FullName); ?>" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="Email" id="Email" value="<?php echo e($persons->Email); ?>" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="Phone" id="Phone" value="<?php echo e($persons->Phone); ?>" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('persons.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2. WebFrameworks - COmputing SYstem\WORLD WIDE WEB\CRUD Applications\CRUD Applications\laravel_crud\resources\views/persons/edit.blade.php ENDPATH**/ ?>