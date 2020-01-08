<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gorideme Validation Driver</title>
  <title>Gorideme Validation Driver</title>
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
                    <table id="example1" class="table table-striped">
                      <thead>
                       <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Job</th>
                                                <th>Transportation Type</th>
                                                <th>Vehicle No</th>
                                                <th>Phone</th>
                                                <th>Detail</th>
                                                <th>Action</th>
                                            </tr>
                      </thead>
					<tbody>

                                            <?php
                                            $no = 1;
                                            foreach ($pendaftar as $d) {
                                                ?>
                                                <tr>
                                                    <td><p class="text-center"><?php echo $no;
                                            $no++ ?></p></td>
                                                    <td><?php echo "$d->nama_depan $d->nama_belakang"; ?></td>
                                                    <td><?php echo "$d->driver_job"; ?></td>
                                                    <td><?php echo "$d->jenis_kendaraan"; ?></td>
                                                    <td><?php echo "$d->nomor_kendaraan"; ?></td>
                                                    <td><?php echo "$d->no_telepon"; ?></td>
                                                    <td><a href="<?php echo base_url() ?>index.php/Validatedriver/detilPelamarDriver/<?php echo "$d->nomor"; ?>/<?php echo "$tittle";?>"><button type="button" class="btn btn-default btn-sm">Lihat Detil Lamaran</button></a></td>
                                                    <td>
                                                        <a href="<?php echo base_url() ?>index.php/Validatedriver/validationDriver/<?php echo "$d->nomor"; ?>/<?php echo "$tittle";?>"><button type="button" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure to validate the registration of the driver ?')">validation</button></a>
                                                        <a href="<?php echo base_url() ?>index.php/Validatedriver/tolakDriver/<?php echo "$d->nomor"; ?>/<?php echo "$tittle";?>"><button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to cancel the registration of the driver ?')">Delete</button></a>
                                                    </td>
                                                </tr>
<?php }
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

