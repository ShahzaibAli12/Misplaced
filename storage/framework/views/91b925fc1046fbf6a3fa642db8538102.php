
    <!-- ======= Header ======= -->

  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <i class="bi me-2 bi-list toggle-sidebar-btn"></i>
      <a href="<?php echo e(route('dashboard.view')); ?>" class="logo d-flex align-items-center">
        <h1><span class="text-secendory">Mis</span><span class="text-primary">Placed</span></h1>

      </a>
    </div><!-- End Logo -->


    <div class="pagetitle">
        <h1><?php echo $__env->yieldContent('title'); ?></h1>
    </div>
    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <?php if(auth()->guard('admin')->check()): ?>
            <img src=<?php echo e(url(auth()->guard('admin')->user()->photo)); ?> alt="Profile" class="rounded-circle" >

            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo e(auth()->guard('admin')->user()->name); ?></span>
                      <?php endif; ?>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <?php if(auth()->guard('admin')->check()): ?>
    <h6><?php echo e(auth()->guard('admin')->user()->name); ?></h6>


              <span><?php echo e(auth()->guard('admin')->user()->role); ?></span>
              <?php endif; ?>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('admin.settings')); ?>">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('admin.logout')); ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
<?php /**PATH I:\xampp\htdocs\Misplaced\resources\views/AdminViews/Layout/header.blade.php ENDPATH**/ ?>