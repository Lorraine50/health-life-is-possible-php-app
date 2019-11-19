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
                    Add Booking
                </div>
                <div class="card-body">
                    <!-- display success and error messages -->
                    <?php echo $__env->make('includes.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <strong>You may add a booking below.</strong>

                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('postBooking')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="service" class="col-md-4 control-label">Health Service to Book</label>

                            <div class="col-md-6">
                                <select name="service" id="service" class="form-control">
                                    <?php foreach($services as $s): ?>
                                    <option value="<?php echo e($s->id); ?>"><?php echo e($s->c_name); ?> @ R<?php echo e($s->c_price); ?>.00</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="hcp" class="col-md-4 control-label">Preferred Doctor</label>

                            <div class="col-md-6">
                                <select name="hcp" id="hcp" class="form-control">
                                    <?php foreach($hcps as $s): ?>
                                    <option value="<?php echo e($s->id); ?>"><?php echo e($s->hcp_name); ?> - <?php echo e($s->hcp_spec); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                                <label for="time" class="col-md-4 control-label">Time</label>
    
                                <div class="col-md-6">
                                    <select name="time" id="service" class="form-control">
                                        <option value="9:00">9:00AM</option>
                                        <option value="11:00">11:00AM</option>
                                        <option value="13:00">1:00PM</option>
                                        <option value="15:00">3:00PM</option>
                                    </select>
                                </div>
                            </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-edit"></i> Book
                                </button>
                            </div>
                        </div>
                    </form>

                </div>

                <!-- Previous bookings -->

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>