<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Go Ride Me - Set Cost</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/vendor.bundle.addons.css">
  
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" />
</head>
   <body>
    <div class="container-scroller">
<div class="container-fluid page-body-wrapper">
<?php include 'SIDEBAR.php'; ?>



            <!-- Content Wrapper. Contains page content -->
            <div class="main-panel">
        <div class="content-wrapper">

                <!-- Main content -->
                <div class="grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
				<div class="box-header with-border">
                  <h4 class="card-title">Set Cost <?php echo "$tittle"; ?></h4>
                  <div class="table-responsive">
                    <div class="col-md-12">
                                            <!--form start--> 
                                            <form role="form" action="<?php echo base_url(); ?>index.php/setcost/set<?php echo $f; ?>" method="post">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="row">
                                            <?php echo "$message"; ?>
                                            <div class="col-md-6">
                                                <h3 class="text-center">Partner</h3>
                                                <div class="box-body">

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Cost ($)</label>
                                                        <input name="biaya_p" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$biaya_p"; ?>">
                                                    </div><br>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Minimum Cost($)</label>
                                                        <input name="biayaminimum_p" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$biayaminimum_p"; ?>">
                                                    </div><br>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Description</label>
                                                        <input name="keterangan_biaya_p" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$keterangan_biaya_p"; ?>" disabled>
                                                    </div><br>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!--form start--> 
                                                <h3 class="text-center">Non Partner</h3>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Cost ($)</label>
                                                        <input name="biaya" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$biaya"; ?>">
                                                    </div><br>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Minimum ($)</label>
                                                        <input name="biayaminimum" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$biayaminimum"; ?>">
                                                    </div><br>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Description</label>
                                                        <input name="keterangan_biaya" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$keterangan_biaya"; ?>" disabled>
                                                    </div><br>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Comission (%)</label>
                                                        <input name="id" type="hidden" value="<?php echo "$id"; ?>">
                                                        <input name="persentase" type="number" min="1" max="100" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$persentase"; ?>">
                                                    </div><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="col-md-12 btn btn-primary pull-right">Submit</button>
                                    </div>
                                    <!-- /.box-body -->
                                </form>
                                        </div>
              
                  </div>
				  </div>
				</div>
            </div>
          
        </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


            <?php
    include 'application/views/footer.php'
?>

            

            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>

        </div>
        <!-- ./wrapper -->

         <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
        <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>
    </body>
</html>
