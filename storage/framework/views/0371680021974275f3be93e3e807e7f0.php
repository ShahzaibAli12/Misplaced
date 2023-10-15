
<?php $__env->startSection('title','Create New Account'); ?>
<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class=" section">
    <div class="container">
    <div class="row d-flex justify-content-center">
    <div class="col-lg-8   col-md-10  col-12">

      <form class="card shadow-lg rounded-3 border-0  login-form mt-5 mb-5 needs-validation" action="<?php echo e(url('signup')); ?>" method="POST" novalidate>
        <?php echo csrf_field(); ?>
        <div class="card-body ">
    <div class="title text-center">
    <h3>Create New Account</h3>
    </div>

    <div class="row">
      <?php if($errors->any()): ?>
      <div class="alert alert-danger">
          <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
      </div>
  <?php endif; ?>

      <div class="form-group col-md-6">
          <label for="f_name">First Name</label>
          <input class="form-control" type="text" id="f_name" name="first_name" placeholder="Enter First Name" value="<?php echo e(old('first_name')); ?>" required="">
          <div class="invalid-feedback">
              First Name is required.
          </div>
      </div>

      <div class="form-group col-md-6">
          <label for="l_name">Last Name</label>
          <input class="form-control" type="text" id="l_name" name="last_name" placeholder="Enter Last Name" value="<?php echo e(old('last_name')); ?>" required="">
          <div class="invalid-feedback">
              Last Name is required.
          </div>
      </div>
  </div>
  <div class="row">
      <div class="form-group col-md-6">
          <label for="email">Email</label>
          <input class="form-control" type="email" id="email" name="email" placeholder="Enter Email" value="<?php echo e(old('email')); ?>" required="">
          <div class="invalid-feedback">
              Email is required.
          </div>
      </div>
      <div class="form-group col-md-6">
          <label for="number">Phone</label>
          <input class="form-control" type="number" id="number" name="phone" placeholder="Enter Phone Number" value="<?php echo e(old('phone')); ?>" required="">
          <div class="invalid-feedback">
              Phone Number is required.
          </div>
      </div>
  </div>
  <div class="row">
      <div class="form-group col-md-6">
          <label for="password">Password</label>
          <input class="form-control" type="password" id="password1" name="password" placeholder="Enter Password" required="">
          <div class="invalid-feedback">
              Password is required.
          </div>
      </div>
      <div class="form-group col-md-6">
          <label for="password">Confirm Password</label>
          <input class="form-control" type="password" id="password2" name="password_confirmation" placeholder="Confirm Password" required>
          <div class="invalid-feedback">
              Confirm password not matched.
          </div>
      </div>
  </div>
    <div class="d-flex flex-wrap justify-content-between bottom-content">
    <div class="form-check">
    <input type="checkbox"  class="form-check-input width-auto" required id="exampleCheck1">
    <label class="form-check-label">Accept Terms and Conditions</label>
    </div>
    <a class="lost-pass text-primary" href="<?php echo e(route('password.forgot')); ?>">Forgot password?</a>
    </div>
    <div class="button">
    <button class="btn btn-khas-primary" type="submit">Create A New Account</button>
    </div>
    <p class="outer-link">Already have an account? <a class="text-primary" href="<?php echo e(url('login')); ?>">Login here </a>
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
checkPasswordMatch();
      form.classList.add('was-validated')
    }, false)
  })
})()
function checkPasswordMatch() {
  const password1 = document.getElementById('password1');
  const password2 = document.getElementById('password2');

  if (password1.value !== password2.value) {
    password2.setCustomValidity('Passwords do not match.');
  } else {
    password2.setCustomValidity('');
  }
}

document.getElementById('password1').addEventListener('input', checkPasswordMatch);
document.getElementById('password2').addEventListener('input', checkPasswordMatch);

</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('Layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ZeeshanFYP\fyp\resources\views/Registration/signup.blade.php ENDPATH**/ ?>