<?php $__env->startSection('title'); ?>
Health Life is Possible | Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <br>
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Your previous bookings with Health life is Possible
                </div>
                <div class="card-body">
                    <!-- display success and error messages -->
                    <?php echo $__env->make('includes.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <strong>Welcome to your profile area.</strong>
                    <hr>
                        <a href="<?php echo e(route('getBooking')); ?>" class="btn btn-success btn-secondary btn-outline-danger text-white">Make an appointment</a>
                    <hr>

                    <?php foreach($bookings as $book): ?>
                        <div class="card card-body bg-light">
                            <p><?php echo e(App\Consultation::where('id', $book->consultation_id)->value('c_name')); ?> by Dr. <?php echo e(App\Hcp::where('id', $book->hcp_id)->value('hcp_name')); ?> on <b><?php echo e($book->booking_date); ?></b></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>