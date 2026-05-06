
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Persons Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('person')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label>FullName</label></br>
        <input type="text" name="FullName" id="FullName" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="Email" id="Email" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="Phone" id="Phone" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('persons.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2. WebFrameworks - COmputing SYstem\WORLD WIDE WEB\CRUD Applications\CRUD Applications\laravel_crud\resources\views/persons/create.blade.php ENDPATH**/ ?>