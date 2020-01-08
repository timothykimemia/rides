<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Go Ride Me - Driver Topup</title>
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
				<div class="row">
                <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
				<div class="box-header with-border">
                  <div class="table-responsive">
                    <table class="table table-striped">
                                                <h4 class="text-center">Detil Driver</h4>
                                                <tr>
                                                    <td><b>Name </b></td>
                                                    <td><p class="text-left">: <?php echo $detailtopup[0]['nama_depan'] . " " . $detailtopup[0]['nama_belakang']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Email </b></td>
                                                    <td><p class="text-left">: <?php echo $detailtopup[0]['email']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Phone </b></td>
                                                    <td><p class="text-left">: <?php echo $detailtopup[0]['no_telepon']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>ID Card </b></td>
                                                    <td><p class="text-left">: <?php echo $detailtopup[0]['no_ktp']; ?></p></td>
                                                </tr>
                                            </table>
              
                  </div>
										
				  </div>
				</div>
            </div>
			
          
        </div>
		
		<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
				<div class="box-header with-border">
                  <div class="table-responsive">
                    <table class="table table-striped">
                                                <h4 class="text-center">Detil Topup</h4>

                                            <table class="table table-striped">  
                                                <tr>
                                                    <td><b>Date </b></td>
                                                    <td><p class="text-left">: <?php echo $detailtopup[0]['waktu']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Acc No </b></td>
                                                    <td><p class="text-left">: <?php echo $detailtopup[0]['no_rekening']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Bank </b></td>
                                                    <td><p class="text-left">: <?php echo $detailtopup[0]['bank']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Acc Name </b></td>
                                                    <td><p class="text-left">: <?php echo $detailtopup[0]['atas_nama']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Amount</b></td>
                                                    <td><p class="text-left">: <?php echo $detailtopup[0]['jumlah']; ?></p></td>
                                                </tr>
                                            </table>
              
                  </div>
										
				  </div>
				</div>
            </div>
			
          
        </div>
		</div>
		<div class="col-md-12 ">
                                            <a href="<?php echo "http://" . $_SERVER['HTTP_HOST'] . "/asset/berkas_topup/driver/" . $detailtopup[0]['bukti']; ?>">
                                                <img src="<?php echo "http://" . $_SERVER['HTTP_HOST'] . "/asset/berkas_topup/driver/" . $detailtopup[0]['bukti']; ?>" class="img-responsive img-thumbnail col-md-12" alt="Cinque Terre">
                                            </a>

                                        </div>	
										<br><br>
										<div class="row">
                                            <a class="col-md-6 btn btn-primary" href="<?php echo base_url(); ?>index.php/drivertopup/validationTopup/<?php echo $detailtopup[0]['nomor']; ?>/<?php echo $detailtopup[0]['id_user']; ?>" role="button" onclick="return confirm('Are you sure to do varification with the Topup ?')">Verification</a>
											<a class="col-md-6 btn btn-danger" href="<?php echo base_url();?>index.php/Usertopup/batalTopup/<?php echo $detailtopup[0]['nomor'];?>" role="button" onclick="return confirm('Are you sure to cancel the registration of the driver ?')">Decline</a>
                                        </div>
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
