
<?php $__env->startSection('title','Email Verification'); ?>
<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">

                <form class="card shadow-lg rounded-3 border-0 login-form mt-5 mb-5" action="<?php echo e(url('verify_email')); ?>" method="POST" novalidate>
                    <?php echo csrf_field(); ?>
                    <input type="hidden" id="timestamp" value="<?php echo e(time()); ?>">
                    <div class="card-body">
                        <div class="title text-center">
                            <h3>Email Verification</h3>
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
                            <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="alert alert-success">
                          Verification Email Has Been Sent
                        </div>

                        </div>
                      <form action="<?php echo e(route('verification.send')); ?>" method="post">
                        <p class="outer-link">Didn't receive the code? <button type="submit" id="resend-link">Resend</button>
                            <span id="countdown" class="text-muted"></span>
                        </p>
                    </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
// ...

// Countdown timer
const resendLink = document.getElementById('resend-link');
const countdownElement = document.getElementById('countdown');
const timestampElement = document.getElementById('timestamp');
const waitTime = 60; // Time to wait in seconds

function updateCountdown() {
  const currentTime = Math.floor(Date.now() / 1000);
  const sentTime = parseInt(timestampElement.value);
  const elapsedTime = currentTime - sentTime;
  const remainingTime = waitTime - elapsedTime;

  if (remainingTime > 0) {
    resendLink.style.pointerEvents = 'none';
    resendLink.style.opacity = '0.5';
    countdownElement.innerHTML = `(${remainingTime} seconds)`;
    setTimeout(updateCountdown, 1000);
  } else {
    resendLink.style.pointerEvents = 'auto';
    resendLink.style.opacity = '1';
    countdownElement.innerHTML = '';
  }
}

updateCountdown();

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ZeeshanFYP\fyp\resources\views/Registration/email_verification.blade.php ENDPATH**/ ?>