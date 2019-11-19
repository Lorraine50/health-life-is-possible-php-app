<?php $__env->startSection('title'); ?>
Health Life is Possible | Consultation
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
                    Service Details
                </div>
                <div class="card-body">
                    <h5><?php echo e($consultation->c_name); ?></h5>
                    <div class="card-text">
                        <?php echo $consultation->c_desc; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>