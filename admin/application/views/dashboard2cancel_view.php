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
                  <h4 class="card-title">Cancel Order</h4>
                  <div class="table-responsive">
                    <table id="example1" class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Feature</th>
                          <th>Customer</th>
                          <th>Phone</th>
                          <th>Driver</th>
                          <th>Status</th>
                          <th>Payment</th>
                          <th>Date</th>
                        </tr>
                      </thead>
					 <tbody>
                                            <?php
                                            // var_dump($transaksiDriver)
                                            foreach ($transaksi as $value) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $value->nomor; ?></td>
                                                    <td><?php echo $value->fitur; ?></td>
                                                    <td><?php echo $value->nama_depan . " " . $value->nama_belakang; ?></td>
                                                    <td><?php echo $value->no_telepon; ?></td>
                                                    <td>
                                                        <?php
                                                        if ($value->id_driver == 'D0') {
                                                            echo '-';
                                                        } else {
                                                            ?>
                                                            <a href="<?php echo base_url(); ?>index.php/Listdriver/detilDriver/<?php echo $value->id_driver ?>">
                                                                <?php echo $value->id_driver ?>
                                                            </a>
                                                            <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        switch ($value->status_transaksi) {
                                                            case 'mencari':
                                                                    echo '<span class="label label-info">Serching</span>';
                                                                    break;
                                                                case 'Menawarkan':
                                                                    echo '<span class="label label-info">Menawarkan</span>';
                                                                    break;
                                                                case 'accept':
                                                                    echo '<span class="label label-info">Accept</span>';
                                                                    break;
                                                                case 'cancel':
                                                                    echo '<span class = "label label-danger">Canceled</span>';
                                                                    break;
                                                                case 'reject':
                                                                    echo '<span class = "label label-danger">Reject</span>';
                                                                    break;
                                                                case 'finish':
                                                                    echo '<span class="label label-success">Finish</span>';
                                                                    break;
                                                                case 'start':
                                                                    echo '<span class="label label-info">Start</span>';
                                                                    break;
                                                                default:
                                                                    break;
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#3a5068" data-height="20"><?php echo $value->waktu; ?></div>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url(); ?>index.php/Dashboard/cancelTransactionProcess/<?php echo $value->nomor; ?>/<?php echo $value->id_transaksi; ?>/<?php echo $value->id_driver; ?>/<?php echo $value->id_pelanggan; ?>" class="btn btn-sm btn-default btn-xs" onclick="return confirm('Are you sure to cancel the transaction ?')">Cancel Order</a>
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
                $("#example1").DataTable(
                {
                    "aaSorting": [[ 0, "desc" ]]
                }    
            );
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": false,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>
    </body>
</html>
