
<?php $__env->startSection('title','Forgot Password'); ?>
<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">

                <form class="card shadow-lg rounded-3 border-0 login-form mt-5 mb-5 needs-validation" action="<?php echo e(url('forgot_password')); ?>" method="POST" novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="title text-center">
                            <h3>Forgot Password</h3>
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
                            <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                            <?php endif; ?>
                            <div class="form-group col-12">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Enter Your Email Address" required>
                                <div class="invalid-feedback">
                                    Email is required.
                                </div>
                            </div>
                        </div>
                        <div class="button">
                            <button class="btn btn-khas-primary" type="submit">Send Password Reset Link</button>
                        </div>
                        <p class="outer-link">Remembered your password? <a href="<?php echo e(url('login')); ?>">Login</a>
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

  const forms = document.querySelectorAll('.needs-validation')

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

<?php echo $__env->make('Layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ZeeshanFYP\fyp\resources\views/Registration/forgot_password.blade.php ENDPATH**/ ?>