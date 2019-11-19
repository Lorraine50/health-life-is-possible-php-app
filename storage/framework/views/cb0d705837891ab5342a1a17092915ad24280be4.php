<?php $__env->startSection('title'); ?>
Health Life is Possible
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-4">
            <?php echo $__env->make('layouts.side', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

        <div class="col-md-8">
            <!-- display success and error messages -->
            <?php echo $__env->make('includes.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <h3>Health life is Possible, Best Health Clinic in Durban.</h3>
            
            <div class="card">
                <div class="card-header">
                    Welcome
                </div>
                
                <div class="card-body">
                    <img src="<?php echo e(URL::to('/src/images/wall.jpg')); ?>" alt="Banner" class="img-responsive" width="100%"
                        height="auto">
                    <br>
                    <blockquote class="blockquote mb-0">
                        <p>
                            You are welcome to the best clinic in town. Health Life is Possible is the leader in health
                            care provisions and
                            treatment. Our doctors are the best and we use the best health care practices in diagnosing
                            our patients.
                        </p>

                        <p>Services offered</p>
                        <ul>
                            <li>Family medicine</li>
                            <li>Private laboratory services</li>
                            <li>Check-up and consultation</li>
                            <li>Menopause and andropause treatment</li>
                            <li>Screening for sexually transmissible and blood-borne infections (STD / STBBI)</li>
                            <li>Liquid-based Pap Test (vaginal cytology), HPV screening</li>
                            <li>Treatment for erectile dysfunction</li>
                            <li>Screening and treatment of sleep disorders</li>
                            <li>Vaccination</li>
                            <li>Genetic profiling</li>
                            <li>Psychology</li>
                            <li>Ear cleaning</li>
                            <li>Dental services</li>
                        </ul>
                        <footer class="blockquote-footer">Health is Wealth <cite title="Source Title"> Mahatma
                                Gandhi</cite></footer>
                    </blockquote>
                </div>


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>