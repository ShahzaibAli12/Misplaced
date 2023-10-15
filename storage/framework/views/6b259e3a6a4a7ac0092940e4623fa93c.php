
<?php $__env->startSection('title','Login to Your Account'); ?>
<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class=" section">
    <div class="container">
    <div class="row ">
    <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
      <form class="card shadow-lg rounded-3 border-0 login-form mt-5 mb-5 needs-validation" action="<?php echo e(url('login')); ?>" method="POST" novalidate>
        <?php echo csrf_field(); ?>

        <div class="card-body ">
    <div class="title text-center">
    <h3>Login Into Your Account</h3>
    </div>

    <div class="form-group">
      <?php if($errors->any()): ?>
      <div class="alert alert-danger">

              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php echo e($error); ?>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
  <?php endif; ?>

  <?php if(session('status')): ?>
  <div class="alert alert-success">
      <?php echo e(session('status')); ?>

  </div>
<?php endif; ?>
    <label for="email">Email</label>
    <input class="form-control" type="email" id="email" value="<?php echo e(old('email')); ?>" name="email" required="">
        <div class="invalid-feedback">
        Email is required.
      </div>
</div>
    <div class="form-group">
    <label for="password">Password</label>
    <input class="form-control" type="password" id="password" name="password" required="">
    <div class="invalid-feedback">
        Password is required.
      </div>
</div>
    <div class="d-flex flex-wrap justify-content-between bottom-content">
    <div class="form-check">
      <input type="checkbox" class="form-check-input width-auto" id="remember" name="remember">
      <label class="form-check-label">Remember me</label>
    </div>
    <a class="lost-pass text-primary" href="<?php echo e(url('forgot_password')); ?>">Forgot password?</a>
    </div>
    <div class="button">
    <button class="btn btn-khas-primary" type="submit">Login</button>
    </div>
    <p class="outer-link">Don't have an account? <a class="text-primary" href="<?php echo e(url('signup')); ?>">Create here </a>
    </p>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('Layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ZeeshanFYP\fyp\resources\views/Registration/login.blade.php ENDPATH**/ ?>