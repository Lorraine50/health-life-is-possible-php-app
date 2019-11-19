<?php $__env->startSection('title'); ?>
Health Life is Possible | Booking
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <br>
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Booking Details
                </div>
                <div class="card-body">
                    <?php echo $__env->make('includes.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php if(Session::has('booking')): ?>
                    <strong>Your booking details.</strong>
                    <div class='row'>
                        <div class='col'><b>Booking</b></div>
                        <div class='col'><b>Doctor</b></div>
                        <div class='col'><b>Time</b></div>
                        <div class='col'><b>Date</b></div>
                        <div class='col'><b>Price(R)</b></div>
                        <div class='col'><b>Delete</b></div>
                    </div>
                    
                    <div class='row'>
                        <div class='col'><?php echo e(session('name')); ?></div>
                        <div class='col'><?php echo e(session('doctor')); ?></div>
                        <div class='col'><?php echo e(Session::get('booking')["time"]); ?></div>
                        <div class='col'><?php echo e(Session::get('date')); ?></div>
                        <div class='col'>R<?php echo e(session('price')); ?>.00</div>
                    <div class='col'><a href="<?php echo e(route('deleteBooking')); ?>" class="btn btn-danger btn-sm">Delete</a></div>
                    </div>

                    <div class="row">
                        <div class="col"><a href="<?php echo e(route('insertBooking')); ?>" class="btn btn-secondary">Confirm Booking</a></div>
                    </div>
                    
                    <?php else: ?>
                        <h1 class="display-4">No booking.</h1>
                    <?php endif; ?>
                    <br>
                    
                </div>

                <!-- Previous bookings -->

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>