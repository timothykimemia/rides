<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Go Ride Me Validation Driver</title>
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
                                              <th>Name Resto</th>
                                                <th>Address Resto</th>
                                                <th>Owner Name</th>
                                                <th>Email</th>
                                                <th>Owner Address</th>
                                                <th>Owner Phone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $no = 1;
//                                            var_dump($pendaftar);
                                            foreach ($pendaftarmitra as $key) {
                                                ?>
                                                <tr>
                                                    <!--<td><?php // echo $key->idmitra; ?></td>-->
                                                    <td><?php echo $key->nama_resto; ?></td>
                                                    <td><?php echo $key->alamat; ?></td>
                                                    <td><?php echo $key->nama_pemilik; ?></td>
                                                    <td><?php echo $key->email_penanggung_jawab; ?></td>
                                                    <td><?php echo $key->alamat_pemilik; ?></td>
                                                    <td><?php echo $key->telepon_penanggung_jawab; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url()."index.php/Validatedriver/validationMfood/$key->idmitra/$key->idresto"; ?>"><button type="button" class="btn btn-primary btn-sm">Validation</button></a>
                                                        <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#tolak">Decline</button>
                                                    </td>


                                            <div class="modal fade" id="tolak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Tolak Pendaftaran</h4>
                                                        </div>
                                                        <form method="POST" action="<?php echo base_url(); ?>index.php/Validatedriver/tolakMfood">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="email" value="<?php echo $key->email_penanggung_jawab; ?>">
                                                                <input type="hidden" name="idmitra" value="<?php echo $key->idmitra; ?>">
                                                                <input type="hidden" name="idresto" value="<?php echo $key->idresto; ?>">
                                                                <label>Enter Reason for Rejection of Registration :</label>
                                                                <textarea class="form-control" rows="4" id="alasan" name="alasan"></textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <input class="btn btn-primary" type="submit" value="Tolak Pendaftaran">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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

