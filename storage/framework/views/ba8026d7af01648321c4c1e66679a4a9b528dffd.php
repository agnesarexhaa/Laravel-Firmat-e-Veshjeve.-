
<?php $__env->startSection('content'); ?>
    <div class="container" style="margin: 15px;">
        <div class="row">
            <div class="col-md-12" ><br>
                <div class="card">
                    <div class="card-header" style="background-color: #f5f5f7; padding: 10px; text-align: center;">
                        <h2 style="margin:0;">Uebaplikacioni per Menaxhimin e Aplikacioneve per Pune (UMAP)</h2>
                    </div>
                    <div class="card-body" style="padding: 25px;">
                        <a href="<?php echo e(url('/aplikacionPune/create')); ?>" class="btn btn-success btn-sm"  style="padding: 5px 10px; border-radius: 3px;" title="Shto Aplikacion Pune">
                            <i class="fa fa-plus" aria-hidden="true"></i> Shto Aplikacion Pune
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Aplikuesi</th>
                                        <th>Pozita Aplikuar</th>
                                        <th>Statusi Aplikacionit</th>
                                        <th>Funksionet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $aplikacionePune; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->aplikuesi_umap); ?></td>
                                        <td><?php echo e($item->pozitaAplikuar_umap); ?></td>
                                        <td><?php echo e($item->statusiAplikacionit_umap); ?></td>
                                        <td>
                                            
                                            <a href="<?php echo e(url('/aplikacionPune/' . $item->id . '/edit')); ?>" title="Modifiko Aplikacione Pune"><button style="padding: 4px 10px; border-radius: 3px;" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifiko</button></a>
                                            <form method="POST" action="<?php echo e(url('/aplikacionPune' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" style="padding: 4px 10px; border-radius: 3px;" class="btn btn-danger btn-sm" title="Fshi Aplikacione Pune" onclick="return confirm(&quot;Jeni të sigurt që dëshironi ta fshini këtë aplikacion pune?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Fshije</button>
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
<?php echo $__env->make('aplikacionePune.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Desktop\xampp\htdocs\UMAP\laravel_crud\resources\views/aplikacionePune/index.blade.php ENDPATH**/ ?>