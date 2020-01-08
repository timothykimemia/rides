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
                  <div class="box-body">
                                    <div class="col-md-12">
                                        <h3 class="text-center"> Edit Category</h3>
                                        <form action="<?php echo base_url(); ?>index.php/Kategoriresto/editKategori" method="POST" role="form" enctype="multipart/form-data">
                                            <?php // var_dump($kategori)?>
                                            <div class="form-group">
                                                <label for="">Category :</label>
                                                <input name="kategori" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $kategori[0]['kategori']; ?>">
                                            </div>
                                            <img src="<?php echo base_url() . "/fotokategoriresto/" . $kategori[0]['foto']; ?>" class="img-responsive img-thumbnail col-md-12" alt="Cinque Terre"><br>

                                            <div class="form-group"><br>
                                                <label for="">Image :</label>
                                                <input type="hidden" name="idkategori" value="<?php echo $kategori[0]['id']; ?>" >
                                                <input type="hidden" name="fotolama" value="<?php echo $kategori[0]['foto']; ?>" >
                                                <input name="userfile" type="file"  accept=".png, .jpg, .jpeg, .gif">
                                            </div>
                                            <input type="submit" class="btn btn-primary col-md-12" value="Edit">
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
