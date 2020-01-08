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
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Ballance</th>
                                                <th>Action</th>
                                            </tr>
                      </thead>
					 <tbody>

                                            <?php
                                            $no = 1;
                                            foreach ($saldodriver as $d) {
                                                ?>
                                                <tr>
                                                    <td><p class="text-center"><?php
                                            echo $no;
                                            $no++
                                                ?></p></td>
                                                    <td><?php echo "$d->nama_depan $d->nama_belakang"; ?></td>
                                                    <td><?php echo "$d->email"; ?></td>
                                                    <td><?php echo "$d->no_telepon"; ?></td>
                                                    <td><?php echo "Rp $d->saldo"; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah<?php echo $no; ?>">+</button>
                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#kurang<?php echo $no; ?>">-</button>
                                                    </td>

                                                    <!-- Modal Penambahan -->
                                            <div class="modal fade" id="tambah<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form method="POST" action="<?php echo base_url(); ?>index.php/Manualtransaction/penambahanDriver">
                                                            <div class="modal-header">
                                                               <h4 class="modal-title" id="myModalLabel">Penambahan Saldo <?php echo "$d->nama_depan $d->nama_belakang"; ?></h4>
															    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Name  &nbsp;= &nbsp;&nbsp;&nbsp;<b><?php echo "$d->nama_depan $d->nama_belakang"; ?>  </b>   
                                                                <br>
                                                                Ballance &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= &nbsp;&nbsp;&nbsp;<b><?php echo "Rp $d->saldo"; ?>  </b>                                                                
                                                                <hr>
                                                                <div class="form-group">
                                                                    <label for="">Nominal ($)</label>
                                                                    <input name="nominal" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="" required>
                                                                    <input name="id" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$d->id"; ?>">
                                                                    <input name="saldo" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$d->saldo"; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <input class="btn btn-primary" type="submit" value="Tambah">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Pengurangan -->
                                            <div class="modal fade" id="kurang<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form method="POST" action="<?php echo base_url(); ?>index.php/Manualtransaction/penguranganDriver">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel">Pengurangan Saldo &nbsp;&nbsp;<?php echo "$d->nama_depan $d->nama_belakang"; ?></h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
															</div>
                                                            <div class="modal-body">
                                                                Name  &nbsp;= &nbsp;&nbsp;&nbsp;<b><?php echo "$d->nama_depan $d->nama_belakang"; ?>  </b>   
                                                                <br>
                                                                Ballance &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= &nbsp;&nbsp;&nbsp;<b><?php echo "$ $d->saldo"; ?>  </b>                                                                
                                                                <hr>
                                                                <div class="form-group">
                                                                    <label for="">Nominal ($)</label>
                                                                    <input name="nominal" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="" required>
                                                                    <input name="id" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$d->id"; ?>">
                                                                    <input name="saldo" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$d->saldo"; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <input class="btn btn-primary" type="submit" value="Kurang">
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

