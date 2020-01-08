<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gorideme - Detail Informasi Driver</title>
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
                  <h4 class="card-title">Information</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                                            
                                                <tr>
												<div class="row">
                                                    <td><b>ID </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['id']; ?></p></td>
													<td><b>Id.No </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['no_ktp']; ?></p></td>
													</div>
                                                </tr>
                                                <tr>
												<div class="row">
                                                    <td><b>Name</b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['nama_depan']; ?> <?php echo $driver[0]['nama_belakang']; ?></p></td>
													<td><b>Phone </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['no_telepon']; ?></p></td>
													</div>
                                                </tr>
                                                <tr>
												<div class="row">
                                                    <td><b>Place Of Birth </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['tempat_lahir']; ?></p></td>
													<td><b>DOB </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['tgl_lahir']; ?></p></td>
													</div>
                                                </tr>
                                                <tr>
                                                    <td><b>Ballance </b></td>
                                                    <td><p class="text-left">: $ <?php echo $saldo[0]['saldo']; ?></p>
                                                    </td>
                                                     <td><b>Date </b></td>
                                                    <td><p class="text-left">: <?php echo $saldo[0]['update_at']; ?></p></td>
                                                </tr>
												
                                                <tr>
												<td><b>Email </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['email']; ?></p></td>
                                                    <td><b>Job </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['driver_job']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Rating </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['rating']; ?></p></td>
													<td><b>Status :</b></td>
                                                    <td><p class="text-left">: 
                                                            <?php
                                                            if ($driver[0]['status_user'] == 'Aktif') {
                                                                echo '<span class="label label-success">Aktif</span>';
                                                            } else if ($driver[0]['status_user'] == 'Non Aktif') {
                                                                echo '<span class="label label-info">Non Aktif</span>';
                                                            } else if ($driver[0]['status_user'] == 'Banned') {
                                                                echo '<span class="label label-danger">Banned</span>';
                                                            }
                                                            ?>
                                                        </p>
                                                        
                                                    </td>
                                                </tr>
                                            </table>
              
                  </div>
										
				  </div>
				</div>
            </div>
			
          
        </div>
		<div class="row">
		<div class="col-md-6 grid-margin stretch-card">
		<div class="card">
                <div class="card-body">
				<div class="box-header with-border">
                  <h4 class="card-title">Transportation</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                                                <tr>
                                                    <td><b>Transportation Type</b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['jenis_kendaraan']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Vehicle Type</b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['tipe']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Vehicle No </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['nomor_kendaraan']; ?></p></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Color </b></td>
                                                    <td><p class="text-left">: <?php echo $driver[0]['warna']; ?></p></td>
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
                  <h4 class="card-title">Photo Profile</h4>
                  <div class="table-responsive">
                                            <img src="<?php echo base_url() . "fotodriver/" . $driver[0]['foto'] ?>" class="img-responsive img-thumbnail" alt="Cinque Terre">

                                        </div>
										</div>
										</div>
										</div>
										</div>
										
		
                <!-- /.content -->
            </div>
			<a  href="<?php echo base_url(); ?>index.php/Listdriver/editStatusForm/<?php echo $driver[0]['id']; ?>" class="col-md-12 btn btn-primary" href="#" role="button">Edit Status Driver</a>
			<div class="grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
				<div class="box-header with-border">
                  <h4 class="card-title">Transaction</h4>
                  <div class="table-responsive">
                    <table id="example1" class="table table-striped">
                      <thead>
                       <tr>
                                                        <th>ID</th>
                                                        <th>Order Feature</th>
                                                        <th>Customer</th>
                                                        <th>Status</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($transaksi as $value) { ?>
                                                        <tr>
                                                            <td><?php echo $value->id; ?></td>
                                                            <td><?php echo $value->fitur; ?></td>
                                                            <td><?php echo $value->nama_depan . " " . $value->nama_belakang; ?></td>
                                                            <td>
                                                                <?php
                                                            switch ($value->status_transaksi) {
                                                                case 'mencari':
                                                                    echo '<span class="btn btn-dark btn-sm">Serching</span>';
                                                                    break;
                                                                case 'Menawarkan':
                                                                    echo '<span class="label label-info">Menawarkan</span>';
                                                                    break;
                                                                case 'accept':
                                                                    echo '<span class="btn btn-primary btn-sm">Accept</span>';
                                                                    break;
                                                                case 'cancel':
                                                                    echo '<span class = "btn btn-danger btn-sm">Canceled</span>';
                                                                    break;
                                                                case 'reject':
                                                                    echo '<span class = "btn btn-danger btn-sm">Reject</span>';
                                                                    break;
                                                                case 'finish':
                                                                    echo '<span class="btn btn-success btn-sm">Finish</span>';
                                                                    break;
                                                                case 'start':
                                                                    echo '<span class="btn btn-primary btn-sm">Start</span>';
                                                                    break;
                                                                default:
                                                                    break;
                                                            }
                                                            ?>

                                                            </td>
                                                            <td>
                                                                <div class = "sparkbar" data-color = "#00a65a" data-height = "20"><?php echo $value->waktu; ?></div>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ;
                                                    ?>

                                                </tbody>
                      
                    </table>
              
                  </div>
				  </div>
				</div>
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

