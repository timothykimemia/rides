<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
     <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gorideme</title>
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
                  <h4 class="card-title">Cancel Order</h4>
                  <div class="table-responsive">
                    <table id="example1" class="table table-striped">
                      <thead>
                        <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Feature</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Subject</th>
                                                <th>Description</th>
                                            </tr>
                      </thead>
					 <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($help as $help) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $no; $no++; ?></td>
                                                    <td><?php echo $help->nama_depan." ".$help->nama_belakang; ?></td>
                                                    <td><?php echo $help->fitur_promosi ?></td>
                                                    <td><a href="mailto:<?php echo $help->email; ?>?Subject=Jawaban%20komplain%20gorideme.fun" target="_top"><?php echo $help->email; ?></td>
                                                    <td><?php echo $help->no_telepon; ?></td>
                                                    <td><?php echo $help->subjek; ?></td>
                                                    <td><?php echo $help->isi_bantuan; ?></td>
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
