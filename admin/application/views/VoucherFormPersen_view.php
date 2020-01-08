<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Voucher Persen</title>
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
                  <h4 class="card-title"><?php echo "$tittle"; ?></h4>
                  <div class="table-responsive">
                    <div class="col-md-12">
                                            <!--form start--> 
                                            <?php echo $message; ?>
                                    <form role="form" action="<?php echo base_url(); ?>index.php/Voucher/insertDiskonPersen" method="post">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Voucher Name</label>
                                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Feature</label><br>

                                                <table>
                                                    <tr>
                                                        <td><input name="fitur[]" style="margin : 10px;" type="checkbox"  value="1"> Ride</td>
                                                        <td><input name="fitur[]" style="margin : 10px;"type="checkbox"  value="2"> Car</td>
                                                        <td><input name="fitur[]" style="margin : 10px;"type="checkbox"  value="3"> Food</td>
                                                        <td><input name="fitur[]" style="margin : 10px;"type="checkbox"  value="4"> Mart</td>
                                                    
                                                        <td><input name="fitur[]" style="margin : 10px;" type="checkbox"  value="5"> Send</td>
                                                        <td><input name="fitur[]" style="margin : 10px;"type="checkbox"  value="6"> Massage</td>
                                                        <td><input name="fitur[]" style="margin : 10px;"type="checkbox"  value="7"> Box</td>
                                                        <td><input name="fitur[]" style="margin : 10px;"type="checkbox" value="8"> Service</td>
                                                    </tr>
                                                </table>


                                              <!--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="">-->
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Percent (%)</label>
                                                <input name ="nilai" type="number" max="100" class="form-control" id="exampleInputEmail1" placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Kuota</label>
                                                <input name="kuota" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="">
                                            </div>
                                        </div>

                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Desc</label>
                                                <textarea class="form-control" name="keterangan" rows="3"> </textarea>
                                            </div>
                                        </div>


                                        <div class="box-footer">
                                            <button name="btnSubmit" type="submit" class="col-md-12 btn btn-primary">Add</button>
                                        </div>
                                    </form>
                                        </div>
              
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
