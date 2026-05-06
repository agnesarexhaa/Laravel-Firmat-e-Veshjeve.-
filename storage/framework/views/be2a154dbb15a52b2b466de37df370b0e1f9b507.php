    
    <?php $__env->startSection('content'); ?>
        <div class="container" style="margin: 15px;">
            <div class="row" >
                <div class="col-md-12" ><br>
                    <div class="card">
                        <div class="card-header" style="background-color: #3b9cc6; color: #fff; padding: 5px; text-align: center; ">
                            <h2 style="font-size: 26px; margin: 20px 0;">Uebaplikacioni per Menaxhimin e Firmave te Veshjes (UMFV)</h2>
                        </div>
                        <div class="card-body" style="padding: 25px;" >
                            <a href="<?php echo e(url('/firmaeVeshjes/create')); ?>" class="btn btn-success btn-sm"  style="padding: 8px 15px; border-radius: 10px ;  border: 1px solid #429559; background-color: #429559; " title="Shto Firmat e Veshjeve">
                                <i class="fa fa-plus" aria-hidden="true"></i> Shto Frimat e Veshjeve 
                            </a>
                            <br/>
                            <br/>
                            <div class="table-responsive"  >
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Firma Veshjes</th>
                                            <th>Produkti Veshjes</th>
                                            <th>Qmimi Veshjes</th>
                                            <th>Funksionet</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $firmaeVeshjeve; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($item->FirmaVeshjes_umfv); ?></td>
                                            <td><?php echo e($item->ProduktiVeshjes_umfv); ?></td>
                                            <td><?php echo e($item->CmimiVeshjes_umfv); ?></td>
                                            <td>
                                                
                                                <a href="<?php echo e(url('/firmaeVeshjes/' . $item->id . '/edit')); ?>" title="Modifiko Firmat e Veshjes"><button style="padding: 4px 10px; border-radius: 10px; background-color: #2885ff; " class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifiko</button></a>
                                                <form method="POST" action="<?php echo e(url('/firmaeVeshjes' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                    <?php echo e(method_field('DELETE')); ?>

                                                    <?php echo e(csrf_field()); ?>

                                                    <button type="submit" style="padding: 4px 10px; border-radius: 10px; background-color: #f22626;" class="btn btn-danger btn-sm" title="Fshi Firmat e Veshjes" onclick="return confirm(&quot;Jeni të sigurt që dëshironi ta fshini këtë firma e veshjes?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Fshije</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('firmaeVeshjeve.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_crud\resources\views/firmaeVeshjeve/index.blade.php ENDPATH**/ ?>