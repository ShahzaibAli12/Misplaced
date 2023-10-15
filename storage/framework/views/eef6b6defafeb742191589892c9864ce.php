<tr>
    <td><?php echo e($category->id); ?></td>
    <td>
        <?php for($i = 0; $i < $level; $i++): ?>
            &nbsp;&nbsp;&nbsp;
        <?php endfor; ?>

       <i class="<?php echo e($category->icon); ?>"></i>
        <?php echo e($category->prefix." ".$category->name ." ". $category->suffix); ?>

    </td>
    <td>
        <a href="<?php echo e(route('category.add', $category->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
        <button type="button" data-id="<?php echo e($category->id); ?>" onclick="deleteCategory(this)" class="btn btn-sm btn-danger">Delete</button>

    </td>
</tr>
<?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $__env->make('AdminViews.Product.manage_categories.subcategory_row', ['category' => $subcategory, 'level' => $level + 1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\ZeeshanFYP\fyp\resources\views/AdminViews/Product/manage_categories/subcategory_row.blade.php ENDPATH**/ ?>