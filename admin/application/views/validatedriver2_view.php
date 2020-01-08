<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hostberkas = "http://gorideme.fun.COM/";
?>

<!DOCTYPE html>
<html>
     <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gorideme - Voucher Aktif</title>
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
                  <h4 class="card-title">Validation Driver</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                                                <tr>
                                                    <td><b>First Name </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['nama_depan']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Last Name </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['nama_belakang']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>ID.No </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['no_ktp']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Place of birth </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['tempat_lahir']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>DOB </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['tgl_lahir']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Phone </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['no_telepon']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Email </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['email']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Job </b></td>
                                                    <td><p class="text-left">: <?php echo $pendaftar[0]['driver_job']; ?></p></td>
                                                </tr>
                                            </table>
              
                  </div>
									<div class="row">
										<div class="col-md-6">
                                            <!--style="width: 100%; height: 100%; border: 3px; border-color: white;"-->

                                            <img src="<?php echo base_url(); ?>asset/berkas_driver/foto_diri/<?php echo $pendaftar[0]['foto_diri']; ?>" class="img-responsive img-thumbnail" alt="Cinque Terre">
                                            <h3 class="text-center">Photo Profile</h3>
                                        </div>
										<div class="col-md-6">
                                            <!--style="width: 100%; height: 100%; border: 3px; border-color: white;"-->

                                            <img src="<?php echo base_url(); ?>asset/berkas_driver/foto_ktp/<?php echo $pendaftar[0]['foto_ktp']; ?>" class="img-responsive img-thumbnail" alt="Cinque Terre">
                                            <h3 class="text-center">ID Card</h3>
                                        </div>
									</div>
										<div class="row">
										<div class="col-md-6">
                                            <!--style="width: 100%; height: 100%; border: 3px; border-color: white;"-->

                                            <img src="<?php echo base_url(); ?>asset/berkas_driver/foto_sim/<?php echo $pendaftar[0]['foto_sim']; ?>" class="img-responsive img-thumbnail" alt="Cinque Terre">
                                            <h3 class="text-center">Driver License</h3>
                                        </div>	
										<div class="col-md-6">
                                            <!--style="width: 100%; height: 100%; border: 3px; border-color: white;"-->

                                           <img src="<?php echo base_url(); ?>asset/berkas_driver/foto_stnk/<?php echo $pendaftar[0]['foto_stnk']; ?>" class="img-responsive img-thumbnail" alt="Cinque Terre">
                                            <h3 class="text-center">Vehicle License</h3>
                                        </div>											
									</div>
									
				  </div>
				  <div class="row">
                                            <a class="col-md-6 btn btn-primary" href="<?php echo base_url() ?>index.php/Validatedriver/validationDriver/<?php echo $pendaftar[0]['nomor']; ?>/<?php echo "$tittle";?>" role="button" onclick="return confirm('Are you sure to validate the registration of the driver ?')">Validate</a>
											<a class="col-md-6 btn btn-danger" href="<?php echo base_url() ?>index.php/Validatedriver/tolakDriver/<?php echo $pendaftar[0]['nomor']; ?>/<?php echo "$tittle";?>" role="button" onclick="return confirm('Are you sure to cancel the registration of the driver ?')">Decline</a>
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

