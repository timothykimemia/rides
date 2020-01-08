<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gorideme - Voucher Aktif</title>
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
                                                <th>No</th>
                                                <th>Voucher</th>
                                                <th>Feature</th>
                                                <th>Voucher type</th>
                                                <th>Value</th>
                                                <th>Desc</th>
                                                <th>Kuota</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($voucher as $key) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $no;
                                            $no++; ?></td>
                                                    <td><?php echo $key->voucher; ?></td>
                                                    <td><?php echo $key->fitur; ?></td>
                                                    <td><?php echo $key->tipe_voucher ?></td>
                                                    <td>
                                                        <?php
                                                        if ($key->tipe_voucher == 'diskon persen') {
                                                            echo "$key->nilai %";
                                                        } else {
                                                            echo "$ $key->nilai";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $key->keterangan ?></td>
                                                    <td><?php echo $key->count_to_use ?></td>
                                                    <td>
                                                        <button class="btn btn-warning" data-toggle="modal" data-target="#modal<?= $key->id; ?>">Edit</button>
                                                    <a href="<?php echo base_url(); ?>index.php/Voucher/hapusVoucher/<?php echo $key->id; ?>"><button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete the voucher ?')">Delete</button></a>
                                                    </td>
                                                </tr>
                                               

                                                <!-- modal edit -->
                                                <div id="modal<?= $key->id; ?>" class="modal fade" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-sm" role="document" style="margin-top:20vh">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Voucher</h4>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <form action="<?php echo base_url(); ?>index.php/Voucher/editVoucher/" method="post">
                                                                <div class="col-md-12">
                                                                    <p>Voucher Name</p>
                                                                    <input name="namavoucher" type="text" value="<?= $key->voucher; ?>" maxlenght="20" class="form-control" width="100%" style="margin-top:-10px" disabled>
                                                                </div>

                                                                <div class="col-md-12" style="margin-top:2vh">
                                                                    <p>Feature</p>
                                                                    <select name="fiturvoucher" class="form-control" width="100%" style="margin-top:-10px">
                                                                        <?php foreach ($fiturVoucher as $fitur) { ?>
                                                                            <option value="<?= $fitur->id; ?>" <?php if($key->fitur == $fitur->fitur){echo "selected";} ?>><?= $fitur->fitur; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-12" style="margin-top:2vh">
                                                                    <p>Type</p>
                                                                    <select name="tipevoucher" class="form-control" width="100%" style="margin-top:-10px">
                                                                        <?php foreach ($tipeVoucher as $tipe) { ?>
                                                                            <option value="<?= $tipe->id; ?>" <?php if($key->tipe_voucher == $tipe->tipe_voucher){echo "selected";} ?> ><?= $tipe->tipe_voucher; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-12" style="margin-top:2vh">
                                                                    <p>Value (only nominal without '%')</p>
                                                                    <input name="nilaivoucher" type="text" value="<?= $key->nilai; ?>" class="form-control" width="100%" style="margin-top:-10px">
                                                                </div>

                                                                <div class="col-md-12" style="margin-top:2vh">
                                                                    <p>Desc</p>
                                                                    <input name="ketvoucher" type="text" value="<?= $key->keterangan; ?>" maxlenght="100" class="form-control" width="100%" style="margin-top:-10px" disabled>
                                                                </div>

                                                                <div class="col-md-12" style="margin-top:2vh">
                                                                    <p>Kuota</p>
                                                                    <input name="kuotavoucher" type="text" value="<?= $key->count_to_use; ?>" class="form-control" width="100%" style="margin-top:-10px" disabled>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="idvoucher" value="<?= $key->id;?>">
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                        </form>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->





                                                <!-- end modal -->
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
