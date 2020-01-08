<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gorideme - Edit Status Mmassage</title>
        <!-- Tell the browser to be responsive to screen width -->
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
                  <div class="table-responsive">
                    <div class="col-md-12">
                                            <!--form start--> 
                                   <form action="<?php echo base_url(); ?>index.php/Listdriver/editStatusMservice" method="POST" role="form" enctype="multipart/form-data">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Driver ID</label>
                                                        <input name="idmservice" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['id']; ?>">
                                                        <input type="text" class="form-control" placeholder="" value="<?php echo $driver[0]['id']; ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Sure Name</label>
                                                        <input name="namalengkap" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['nama_depan']; ?>">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">ID CARD</label>
                                                        <input name="ktp" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['no_ktp']; ?>">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Place Of Birth</label>
                                                        <input name="tempatlahir" type="text" class="form-control" placeholder="" value="<?php echo $driver[0]['tempat_lahir']; ?>">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">DOB (mm/dd/yyyy)</label>
                                                        <input name="DOB" class="form-control" type="date" data-date="" data-date-format="DD MMMM YYYY" value="<?php echo $driver[0]['tgl_lahir']; ?>">
                                                        <!--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['tgl_lahir']; ?>" disabled>-->
                                                    </div>
                                                </div>


                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Phone</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['no_telepon']; ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="">Job</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $driver[0]['driver_job']; ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select name="status" class="form-control" id="sel1">
                                                            <option value="1">Active</option>
                                                            <option value="2">Nonactive</option>
                                                            <option value="3">Banned</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                            </div>
                                            <div class="col-md-12">
                                                <!--style="width: 100%; height: 100%; border: 3px; border-color: white;"-->
                                                <img src="<?php echo base_url() . "fotomservice/" . $driver[0]['foto'] ?>" class="col-md-12 img-responsive img-thumbnail" alt="Cinque Terre">

                                                <br>
                                                <div class="box-body">
                                                    <div class="form-group"><br>
                                                        <label for="">Edit Photo</label>
                                                        <input name="foto" type="hidden" value="<?php echo $driver[0]['foto']; ?>">
                                                        <input type="file" name="userfile" accept=".png, .jpg, .jpeg, .gif">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <div class="col-md-12">
                                            <button type="submit" class="col-md-12 btn btn-primary">Edit</button>
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

