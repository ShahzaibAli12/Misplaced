
<?php $__env->startSection('title','Categories list'); ?>
<?php $__env->startSection('style'); ?>
<style>

</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


  <main id="main" class="main">


    <section class="section dashboard">
      <div class="row bg-white shadow rounded-3">


      <div class="card-body">
        <div class="row m-3 ">
              <h5 class="card-title col">Category List</h5>
              <div class="col text-end">

              <a href="<?php echo e(route('category.add')); ?>" class=" btn btn-primary">Add New Category</a>
              </div>
              </div>
            <!-- Default Table -->
            <table id="category_table" class="mt-3 datatable table table-striped responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('AdminViews.Categories.subcategory_row', ['category' => $category, 'level' => 0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            <!-- End Default Table Example -->
            </table>
          </div>

      </div>
    </section>

  </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>
  $(document).ready(function() {
         $('.datatable').DataTable({
           "pageLength": 20
         });
       });

       function deleteCategory(btn) {
    if (confirm("Are you sure you want to delete this category?")) {
        var id = btn.dataset.id;

        var csrf_token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('/admin/delete_category/' + id, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': csrf_token
            },
        })
        .then(response => response.json())
        .then(data => {
          if(data.message){
            toastr.success(data.message);
            $(btn).closest('tr').fadeOut(500, function(){
                $(this).remove();
            });}
            else{
              toastr.error(data.error);

            }

        })
        .catch(error => {
            console.error(error);
            toastr.error("An error occurred while deleting the category."); // Display an animated error notification
        });
    }
}
 </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('AdminViews.Layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\xampp\htdocs\Misplaced\resources\views/AdminViews/Categories/category_list.blade.php ENDPATH**/ ?>