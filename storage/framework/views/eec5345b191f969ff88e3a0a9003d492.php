
<?php $__env->startSection('title','Add Category'); ?>
<?php $__env->startSection('style'); ?>
<style>
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main id="main" class="main">
   <section class="section dashboard">
      <div class="row bg-white shadow rounded-3">
       <div class="col-md-7 mx-auto my-4">
         <h1 class="text-center">Add Category</h1>
         <?php if($category): ?>

            <form action="<?php echo e(route('category.update', $category->id)); ?>" method="POST">
               <?php echo method_field('PUT'); ?>

            <?php else: ?>
            <form action="<?php echo e(route('category.create')); ?>" method="POST">


         <?php endif; ?>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo e($category?$category->name:old('name')); ?>" required>
               </div>

            <div class="form-group">
                <label for="icon">Icon Class</label>
                <input type="text" class="form-control" name="icon" id="icon" value="<?php echo e($category?$category->icon:old('icon')); ?>" >
               </div>
               <div class="form-group">
                   <label for="parent_id">Parent Category</label>
                   <select class="form-control" name="parent_id" id="parent_id">
                       <option value="">No Parent</option>
                       <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parentCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($parentCategory->id); ?>" <?php echo e($category && $parentCategory->id == $category->parent_id ? 'selected' : ''); ?>><?php echo e($parentCategory->name); ?></option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </select>
               </div>
               <div class="d-flex">

                  <button type="submit" class="btn mx-auto my-4 btn-primary">Save Changes</button>
               </div>           </form>
       </div>
      </div>
   </section>
</main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('AdminViews.Layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\xampp\htdocs\Misplaced\resources\views/AdminViews/Categories/add_category.blade.php ENDPATH**/ ?>