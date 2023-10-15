
<?php $__env->startSection('title','Dashboard'); ?>
<?php $__env->startSection('style'); ?>
<style>

</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


  <main id="main" class="main">


    <section class="section dashboard">
      <div class="row">
        <div class="col-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total Lost</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-patch-question"></i>
                    </div>
                    <div class="ps-3">
                      <h6> <?php echo e(number_format($totalLost)); ?></h6>
                      
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">



                <div class="card-body">
                  <h5 class="card-title">Total Found </span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-hand-thumbs-up-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6> <?php echo e(number_format($totalFound)); ?></h6>
                      
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-md-4">

              <div class="card info-card customers-card">



                <div class="card-body">
                  <h5 class="card-title">Total Users</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo e(number_format($totalCustomer)); ?></h6>
                      

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->


            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Items Recovered</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-check2-circle"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo e(number_format($recovered)); ?></h6>
                      
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">



                <div class="card-body">
                  <h5 class="card-title">Itesm UnRecovered </span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-emoji-frown-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo e(number_format($unrecovered)); ?></h6>
                      
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-md-4">

              <div class="card info-card customers-card">



                <div class="card-body">
                  <h5 class="card-title">Total Earinings</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Rs <?php echo e(number_format($totalProfit)); ?></h6>
                      

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->


            <div>
              <canvas id="myChart"></canvas>
            </div>
            <div>
              <canvas id="userChart"></canvas>
            </div>
      </div>
    </section>

  </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('AdminViews.Layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ZeeshanFYP\fyp\resources\views/AdminViews/Dashboard/index.blade.php ENDPATH**/ ?>