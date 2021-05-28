<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <h1>Lotes</h1>
                        <table class="table table-hover table-bordered" id="demo">
                            <thead>
                            <tr>

                                <th>Protocolo</th>
                                <th>Data</th>
                                <th>Valor</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $lotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($lote->protocolo); ?></td>
                                    <td><?php echo e($lote->data); ?></td>
                                    <td><?php echo e($lote->valor); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </tbody>
                        </table>




                    </div>
                </div>
                <?php echo e($lotes->links()); ?>

            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/grid.blade.php ENDPATH**/ ?>