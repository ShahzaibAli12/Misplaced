<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <title><?php echo $__env->yieldContent('title'); ?></title>
      <!-- Favicons -->
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Google Fonts -->
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
      <link href="<?php echo e(asset('simple-datatables/style.css')); ?>" rel="stylesheet">
      <!-- Icon File -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
      <!-- DataTables CSS -->
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"/>
      <!-- DataTables Buttons CSS -->
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css"/>
      <!-- Toastr CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
      <!-- Include Select2 CSS -->
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <!-- Main CSS File -->
      <link href="<?php echo e(asset('admin/css/style.css')); ?>" rel="stylesheet">
      <style>
      </style>
      <?php echo $__env->yieldContent('style'); ?>
   </head>
   <body>
      <?php echo $__env->make('AdminViews.Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('AdminViews.Layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="notification-wrapper">
         <?php if(session('admin_status')): ?>
         <div class="alert m-0 notification-alert  rounded-0  alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('admin_status')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         <?php endif; ?>
         <?php if(session('admin_error')): ?>
         <div class="alert m-0 notification-alert  rounded-0 alert-danger alert-dismissible fade show" role="alert">
            <?php echo e(session('admin_error')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         <?php endif; ?>
         <?php if($errors->any()): ?>
         <div class="alert m-0 notification-alert  rounded-0  alert-dismissible fade show alert-danger">
            <ul>
               <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li><?php echo e($error); ?></li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         <?php endif; ?>
      </div>
      <?php echo $__env->yieldContent('content'); ?>
      <?php echo $__env->make('AdminViews.Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      <!-- JS Files -->
      <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
      <!-- DataTables -->
      <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
      <!-- DataTables Buttons -->
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
      <!-- JSZip (required for Excel export) -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <!-- PDFMake (required for PDF export) -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <!-- DataTables Buttons HTML5 export -->
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <!-- Main JS File -->
      <!-- Toastr JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <!-- Include Select2 JS -->
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script src="<?php echo e(asset('admin/js/main.js')); ?>"></script>
      <script>
         $(document).ready(function() {
            $('select').select2();
         });
      </script>
      <?php echo $__env->yieldContent('script'); ?>
   </body>
   <?php if(session('success')): ?>
   <script>
      toastr.success('<?php echo e(session('success')); ?>');
   </script>
   <?php endif; ?>
   <?php if(session('error')): ?>
   <script>
      toastr.error('<?php echo e(session('error')); ?>');
   </script>
   <?php endif; ?>
   <?php if(session('error_msg')): ?>
   <script>
      toastr.error('<?php echo e(session('error_msg')); ?>');
   </script>
   <?php endif; ?>
   <?php if(session('info')): ?>
   <script>
      toastr.info('<?php echo e(session('info')); ?>');
   </script>
   <?php endif; ?>
   <?php if(session('warning')): ?>
   <script>
      toastr.warning('<?php echo e(session('warning')); ?>');
   </script>
   <?php endif; ?>
</html><?php /**PATH D:\ZeeshanFYP\fyp\resources\views/AdminViews/Layout/layout.blade.php ENDPATH**/ ?>