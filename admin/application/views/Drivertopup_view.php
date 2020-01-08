<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Go Ride Me</title>
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
                  <div class="table-responsive">
                    <table id="example1" class="table table-striped">
                      <thead>
                        <tr>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Acc.No</th>
                                                <th>Bank</th>
                                                <th>Acc Name</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                      </thead>
					 <tbody>
                                            <?php
                                            foreach ($topupdriver as $key) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $key->nama_depan . " " . $key->nama_belakang; ?></td>
                                                    <td><?php echo $key->waktu; ?></td>
                                                    <td><?php echo $key->no_rekening; ?></td>
                                                    <td><?php echo $key->bank; ?></td>
                                                    <td><?php echo $key->atas_nama; ?></td>
                                                    <td><?php echo $key->jumlah; ?></td>
                                                    <td>
                                                        <!--belum terverifikasi , sukses, gagal-->
                                                        <?php
                                                        echo '<span class="btn btn-dark btn-sm">unverified</span>'
//                                                        if ($key->status == 'aktif') {
//                                                            echo '<span class="label label-success">Aktif</span>';
//                                                        } else if ($key->status_user == 'non aktif') {
//                                                            echo '<span class="label label-info">Non Aktif</span>';
//                                                        } else if ($key->status_user == 'banned') {
//                                                            echo '<span class="label label-danger">Banned</span>';
//                                                        }
                                                        ?>

                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url();?>index.php/drivertopup/validationTopupForm/<?php echo $key->nomor;?>/<?php echo $key->id_user;?>"><button type="button" class="btn btn-primary btn-sm">Verification</button></a>
                                                        <a href="<?php echo base_url();?>index.php/drivertopup/batalTopup/<?php echo $key->nomor;?>"><button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to cancel the top up ?')">Delete</span></button></a>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
											</tbody>
                      
                    </table>
              
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
