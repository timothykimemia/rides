<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gorideme - Set Cost</title>
        <!-- plugins:css -->
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
                                                <div class="box-body">
                                                    <?php echo "$message"; ?>
                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Cost($)</label>
                                                                <input name="biaya" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$biaya"; ?>">
                                                            </div><br>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Minimum Cost ($)</label>
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
                                                    <br><hr><br>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h3 class="text-center">Cost Fare</h3>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Split 1.5 - 2 PK </label>
                                                                <input name="k1" type="number" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$k1"; ?>">
                                                            </div><br>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Split 0.5 - 1 PK</label>
                                                                <input name="k2" type="number" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$k2"; ?>">
                                                            </div><br>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Inverter 0.5 - 1 PK</label>
                                                                <input name="k3" type="number" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$k3"; ?>">
                                                            </div><br>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Inverter 1.5 - 2 PK</label>
                                                                <input name="k4" type="number" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$k4"; ?>">
                                                            </div><br>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Cassete</label>
                                                                <input name="k5" type="number" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$k5"; ?>">
                                                            </div><br>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Standing</label>
                                                                <input name="k6" type="number" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$k6"; ?>">
                                                            </div><br>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Central</label>
                                                                <input name="k7" type="number" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$k7"; ?>">
                                                            </div><br>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h3 class="text-center">Cost Service</h3>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Washing ($)</label>
                                                                <input name="l1" type="number" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$l1"; ?>">
                                                            </div><br>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Service ($)</label>
                                                                <input name="l2" type="number" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$l2"; ?>">
                                                            </div><br>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Wash & Service ($)</label>
                                                                <input name="l3" type="number" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$l3"; ?>">
                                                            </div><br>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Install ($)</label>
                                                                <input name="l4" type="number" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$l4"; ?>">
                                                            </div><br>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Unload ($)</label>
                                                                <input name="l5" type="number" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$l5"; ?>">
                                                            </div><br>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Relocation ($)</label>
                                                                <input name="l6" type="number" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$l6"; ?>">
                                                            </div><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.box-body--> 

                                                <div class="box-footer">
                                                    <button type="submit" class="col-md-12 btn btn-primary pull-right">Submit</button>
                                                </div>

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
