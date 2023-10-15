
<?php $__env->startSection('title','Add User'); ?>
<?php $__env->startSection('style'); ?>
<style>
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main id="main" class="main">
   <section class="section dashboard">
      <div class="row bg-white shadow rounded-3">
         <div class="col-md-10 m-auto">
            <div class="card-body  ">
               <h5 class="card-title w-100 text-center display-3">Add user</h5>
               <!-- Add user -->
               <form action="<?php echo e(route('users.create')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <div class="row  mb-3">
                      <div class="col-md-6">
                          <label for="inputText"  class="col-sm-12 col-form-label">First Name</label>
                          <div class="col-sm-12">
                              <input type="text" name="first_name" class="form-control" value="<?php echo e(old('first_name')); ?>">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <label for="inputText"  class="col-sm-12 col-form-label">Last Name</label>
                          <div class="col-sm-12">
                              <input type="text" name="last_name" class="form-control" value="<?php echo e(old('last_name')); ?>">
                          </div>
                      </div>
                  </div>
                  <div class="row  mb-3">
                      <div class="col-md-6">
                          <label for="inputText" class="col-sm-12 col-form-label">Phone</label>
                          <div class="col-sm-12">
                              <input type="number" name="phone" class="form-control" value="<?php echo e(old('phone')); ?>">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <label for="inputEmail" class="col-sm-12 col-form-label">Email</label>
                          <div class="col-sm-12">
                              <input type="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>">
                          </div>
                      </div>
                  </div>
                  <div class="row mb-3">
                      <div class="col-sm-12 text-center">
                          <button type="submit" class="btn btn-khas-primary">Add</button>
                      </div>
                  </div>
              </form>

               <!-- End General Form Elements -->
            </div>
         </div>
      </div>
   </section>
</main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminViews.Layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ZeeshanFYP\fyp\resources\views/AdminViews/ManageUsers/addusers.blade.php ENDPATH**/ ?>