<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gorideme - Driver Withdraw</title>
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
                  <h4 class="card-title">Withdraw</h4>
                  <div class="table-responsive">
                    <table id="example1" class="table table-striped">
                      <thead>
                       <tr>
                                              <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Bank</th>
                                                <th>Acc.No</th>
                                                <th>Acc Name</th>
                                                <th>Amount (Rp)</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($withdraw as $key) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $key->id; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url(); ?>index.php/Listdriver/detilDriver/<?php echo $key->id ?>">
                                                            <?php echo $key->nama_depan . " " . $key->nama_belakang; ?>
                                                        </a>
                                                    </td>
                                                    <td><?php echo $key->no_telepon; ?></td> 
                                                    <td><?php echo $key->email; ?></td>
                                                    <td><?php echo $key->nama_bank; ?></td>
                                                    <td><?php echo $key->rekening_bank; ?></td>
                                                    <td><?php echo $key->atas_nama; ?></td>
                                                    <td><?php echo $key->jumlah; ?></td>
                                                    <td><?php echo $key->waktu; ?></td>

                                                    <td>
                                                        <a href="<?php echo base_url(); ?>index.php/Withdraw/approveWithdraw/<?php echo $key->id_withdraw; ?>/<?php echo $key->id; ?>/<?php echo $key->jumlah; ?>/<?php echo $key->status; ?>">
                                                            <button type="button" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda yakin melakukan approvel kepada withdraw driver tersebut ?')">Approve</button>
                                                        </a>
                                                        
                                                        <a href="<?php echo base_url(); ?>index.php/Withdraw/batalWithdraw/<?php echo $key->id_withdraw; ?>">
                                                            <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to cancel the driver withdrawal ?')">Delete</button>
                                                        </a>
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
