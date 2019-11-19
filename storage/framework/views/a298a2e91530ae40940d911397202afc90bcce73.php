<?php $__env->startSection('title'); ?>
Health Life is Possible | About
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
                    About us
                </div>
                <div class="card-body">
                    <p>Health life is the best health care care clinic in Durban, we have the best medical practices and 
                        our doctors are the best. Try us today for awesome health care. 
                    </p>
                </div>


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>