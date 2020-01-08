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
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>DOB</th>
                                                <th>Address</th>
                                                <th>Detail</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $no = 1;
//                                            var_dump($pendaftar);
                                            foreach ($pendaftar as $d) {
                                                ?>
                                                <tr>
                                                    <td><p class="text-center"><?php echo $no;
                                            $no++ ?></p></td>
                                                    <td><?php echo "$d->nama_lengkap"; ?></td>
                                                    <td><?php echo "$d->nomor_telepon"; ?></td>
                                                    <td><?php echo "$d->email"; ?></td>
                                                    <td><?php echo "$d->tanggal_lahir"; ?></td>
                                                    <td><?php echo "$d->alamat_tinggal , $d->kecamatan_tinggal , $d->kota_tinggal "; ?></td>
                                                    <td><a href="<?php echo base_url() ?>index.php/Validatedriver/detilPelamarMservice/<?php echo "$d->nomor"; ?>"><button type="button" class="btn btn-default btn-sm">Lihat Detil Lamaran</button></a></td>
                                                    <td>
                                                        <a href="<?php echo base_url() ?>index.php/Validatedriver/validationMservice/<?php echo "$d->nomor"; ?>"><button type="button" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure to validate the registration of the driver ?')">Validation</button></a>
                                                        <a href="<?php echo base_url() ?>index.php/Validatedriver/tolakMservice/<?php echo "$d->nomor"; ?>"><button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to cancel the registration of the driver ?')">Decline</button></a>
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

