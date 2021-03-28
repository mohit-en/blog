<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <a href="<?php echo base_url(); ?>admin/post_list" class="small-box bg-info">
            <div class="inner">
              <h3> <?php echo $data['total_posts'];?> </h3>

              <p>Total Posts</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <div class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></div>
          </a>
        </div>
        
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <a href="<?php echo base_url(); ?>admin/user_list" class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $data['total_users'];?></h3>

              <p>User List</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <div class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></div>
          </a>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <a href="<?php echo base_url(); ?>admin/panding_request" class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $data['total_request'];?></h3>

              <p>Pending Requests</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <div class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></div>
          </a>
        </div>


        <!-- ./col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->