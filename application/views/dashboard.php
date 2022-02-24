

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
	<h1 style="color:red;font-size:40px;">Overview</h1> 
	<b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"></i> Home</a></li>
        <li class="active">Overview</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <?php if($is_admin == true): ?>

        <div class="row">
          <div class="col-lg-2 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red	">
              <div class="inner">
                <h3><?php echo $total_products ?></h3>

                <p>Products</p>
              </div>
              <div class="icon">
              </div>
              <a href="<?php echo base_url('products/') ?>" class="small-box-footer">More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $total_paid_orders ?></h3>

                <p>Paid Orders</p>
              </div>
              <div class="icon">
                
              </div>
              <a href="<?php echo base_url('orders/') ?>" class="small-box-footer">More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $total_users; ?></h3>

                <p>Users</p>
              </div>
              <div class="icon">
           
              </div>
              <a href="<?php echo base_url('users/') ?>" class="small-box-footer">More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $total_stores ?></h3>

                <p>Stores</p>
              </div>
              <div class="icon">
             
              </div>
              <a href="<?php echo base_url('stores/') ?>" class="small-box-footer">More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
	</br>
      <?php endif; ?>
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#dashboardMainMenu").addClass('active');
    }); 
  </script>
