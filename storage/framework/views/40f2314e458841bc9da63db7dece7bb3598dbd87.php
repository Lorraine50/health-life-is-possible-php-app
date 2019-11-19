<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-body padding">
                  <?php echo $__env->make('includes.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Booking Date</th>
                      <th>Booking Time</th>
                      <th>Patient</th>
                      <th>Doctor</th>
                      <th>Consultation</th>
                      <th>Status</th>
                      <th>Amount</th>
                      <th>&nbsp;</th>
                      <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
					
                        <?php foreach($bookings as $book): ?>
                        <tr>
                                <td><?php echo e($book->booking_date); ?></td>
                                <td><?php echo e($book->booking_time); ?></td>
                                <td><?php echo e(App\User::where('id', $book->user_id)->value('name')); ?></td>
                                <td><?php echo e(App\Hcp::where('id', $book->hcp_id)->value('hcp_name')); ?></td>
                                <td><?php echo e(App\Consultation::where('id', $book->consultation_id)->value('c_name')); ?></td>
                                <td><?php echo e($book->status); ?></td>
                                <td>R<?php echo e($book->booking_total); ?>.00</td>
                                <td><a href="<?php echo e(route('getCompleted', ['id' => $book->id])); ?>" class="btn btn-warning btn-outline-primary">Completed</a></td>
                                <td><a href="<?php echo e(route('getDelete', ['id' => $book->id])); ?>" class="btn btn-danger btn-outline-primary">Delete</a></td>
                              </tr>
                        <?php endforeach; ?>
                    
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /. box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>