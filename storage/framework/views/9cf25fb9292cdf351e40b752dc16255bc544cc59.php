<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-body padding">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Home Tel</th>
                      <th>Work Tel</th>
                      <th>Cell Tel</th>
                      <th>Reference</th>
                      <th>DOB</th>
                      <th>Address</th>
                      <th>Gender</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                        <tr>
                                <td><?php echo e($user->id); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->tel_h); ?></td>
                                <td><?php echo e($user->tel_w); ?></td>
                                <td><?php echo e($user->tel_c); ?></td>
                                <td><?php echo e($user->reference); ?></td>
                                <td><?php echo e($user->dob); ?></td>
                                <td><?php echo e($user->addr); ?></td>
                                <td><?php echo e($user->gender); ?></td>
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