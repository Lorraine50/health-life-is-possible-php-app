<?php $__env->startSection('title'); ?>
Health Life is Possible | Fees
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-4">
            <?php echo $__env->make('layouts.side', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Our fees
                </div>
                <div class="card-body">
                    <h5 class="card-title">Our Consultation Fees</h5>
                    <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php foreach($consultations as $con): ?>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne"><?php echo e($con->c_name); ?></a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p class="text-muted">Price: R<?php echo e($con->c_price); ?>.00<p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <p class="text-muted">NB: Our prices are subject to change without prior notice.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>