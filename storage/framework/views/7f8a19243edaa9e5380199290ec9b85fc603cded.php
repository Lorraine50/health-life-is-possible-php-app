<?php $__env->startSection('title'); ?>
    Health Life is Possible | Register
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-12">
                <div class="card">
                        <div class="card-header">
                            Register with us.
                        </div>

                        <div class="card-body">
                            <!-- display success and error messages -->
                            <?php echo $__env->make('includes.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                            <div class="card-text">
                                <strong>Your health is in safe hands. Registering with is the beginning of second-to-none health 
                                    care services. 
                                </strong>
                            </div>
                            <br>
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('registerUser')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Your Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Telephone (Home)</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tel_h" placeholder="Home Phone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Telephone (Work)</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tel_w" placeholder="Work Phone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Telephone (Cell)</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tel_c" placeholder="Cell Phone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="reference" class="col-md-4 control-label">Reference</label>

                            <div class="col-md-6">
                                <select name="reference" id="reference" class="form-control">
                                    <option value="Facebook">Facebook</option>
                                    <option value="Friends">Friends</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Twitter">Twitter</option>
                                    <option value="Internet">Internet</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" placeholder="dd-MM-yyyy">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="addr" class="col-md-4 control-label">Home Address</label>

                            <div class="col-md-6">
                                <input id="addr" type="text" class="form-control" name="addr" placeholder="Flat 99 Church Gardens, 99 Bourke Street, Pinetown">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-md-4 control-label">Gender</label>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="M" checked>
                                    <label class="form-check-label" for="male">
                                      Male
                                    </label>
                                  </div>

                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="F">
                                    <label class="form-check-label" for="female">
                                      Female
                                    </label>
                                  </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="example@example.com">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="confirm_password" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="confirm_password" type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>