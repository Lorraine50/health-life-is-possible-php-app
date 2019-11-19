<?php if(count($errors) > 0): ?>
    <?php foreach($errors->all() as $error): ?>
        <div class="alert alert-danger" role="alert">
          <h4 class="alert-heading"></h4>
          <p><?php echo e($error); ?></p>
          <p class="mb-0"></p>
        </div>
    <?php endforeach; ?>
<?php endif; ?>  

<?php if(session('success')): ?>
    <div class="alert alert-success" role="alert">
        <p><?php echo e(session('success')); ?></p>
    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger" role="alert">
        <p><?php echo e(session('error')); ?></p>
    </div>
<?php endif; ?>