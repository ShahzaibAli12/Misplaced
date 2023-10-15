


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

       <li class="nav-item">
        <a class="nav-link " href="<?php echo e(route('dashboard.view')); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#users" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people-fill"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li>
            <a href="<?php echo e(route('users.list')); ?>">
              <i class="bi bi-person-lines-fill"></i><span>User List</span>
            </a>
          </li>

       <li>
            <a href="<?php echo e(route('users.report')); ?>">
              <i class="bi bi-pie-chart-fill"></i><span>Report</span>
            </a>
          </li>


        </ul>
      </li>
      <li class="nav-item sub-menu-dropdown" id="category-parent">
        <a class="nav-link collapsed" data-bs-target="#category" data-bs-toggle="collapse" href="#">
          <i class="bi bi-tag-fill"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="category" class="nav-content collapse" data-bs-parent="#category-parent">

          <li>
            <a href="<?php echo e(url('admin/add_category')); ?>">
              <i class="bi bi-file-plus-fill"></i><span>Add Category</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(url('admin/category_list')); ?>">
              <i class="bi bi-list-task"></i><span>Category List</span>
            </a>
          </li>

        </ul>
      </li>

    </ul>

  </aside><!-- End Sidebar-->
<?php /**PATH I:\xampp\htdocs\Misplaced\resources\views/AdminViews/Layout/sidebar.blade.php ENDPATH**/ ?>