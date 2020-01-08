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
                  <div class="table-responsive">
                    <table id="example1" class="table table-striped">
                      <thead>
                        <tr>
                         <th>ID</th>
                         <th>Resto Name</th>
                         <th>Resto Address</th>
                         <th>Owner Name</th>
                         <th>Email</th>
                         <th>Owner Address</th>
                         <th>Phone Owner</th>
                         <th>Status</th>
                         <th>Action</th>
                        </tr>
                      </thead>
					 <tbody>
                                            <?php
                                            foreach ($mitra as $key) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $key->idmitra; ?></td>
                                                    <td><?php echo $key->nama_resto; ?></td>
                                                    <td><?php echo $key->alamat; ?></td>
                                                    <td><?php echo $key->nama_pemilik; ?></td>
                                                    <td><?php echo $key->email_penanggung_jawab; ?></td>
                                                    <td><?php echo $key->alamat_pemilik; ?></td>
                                                    <td><?php echo $key->telepon_penanggung_jawab; ?></td>

                                                    <td>
                                                        <?php
                                                        if ($key->is_valid == '1') {
                                                            echo '<span class="label label-success">Aktif</span>';
                                                        } else if ($key->is_valid == 2) {
                                                            echo '<span class="label label-danger">Non Aktif</span>';
                                                        } else {
                                                            echo '<span class="label label-danger">Banned</span>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#status<?php echo $key->idmitra; ?>">Change Status</button>
                                                    </td>
                                                </tr>

                                            <div class="modal fade" id="status<?php echo $key->idmitra; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form method="POST" action="<?php echo base_url(); ?>index.php/Listmitramfood/editStatus">
                                                            
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel">Ubah Status Mitra</h4>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= &nbsp;&nbsp;&nbsp;<b><?php echo $key->idmitra; ?><br></b>
                                                                Name  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= &nbsp;&nbsp;&nbsp;<b><?php echo $key->nama_pemilik ?>  </b>   
                                                                <br>
                                                                Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= &nbsp;&nbsp;&nbsp;<b><?php
                                                    if ($key->is_valid == '1') {
                                                        echo 'Aktif';
                                                    } else if ($key->is_valid == 2) {
                                                        echo 'Non Aktif';
                                                    } else {
                                                        echo 'Banned';
                                                    }
                                                        ?>  </b>                                                                
                                                                <hr>
                                                                <input type="hidden" name="idmitra" value="<?php echo $key->idmitra; ?>">
                                                                <input type="hidden" name="idresto" value="<?php echo $key->idresto; ?>">
                                                                <div class="form-group">
                                                                    <label>Status</label>
                                                                    <select name="status" class="form-control" id="sel1">
                                                                        <option value="1">Active</option>
                                                                        <option value="2">Nonactive</option>
                                                                        <option value="3">Delete</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <input class="btn btn-primary" type="submit" value="Edit">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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
