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
				<div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
					  
					  <div class="card">
                            <div class="card">
                                <div class="card-header with-border">
                                    <h3 class="text-center">Add Box Service</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="card-body">
                                    
                                        <!--box 2--> 
             
<form action="<?php echo base_url(); ?>index.php/Layananbox/insertLayanan" method="POST" role="form" enctype="multipart/form-data">
                        <div class="row">                           
					<div class="col-md-4 form-group">
                        <div class="input-group">
                          <input name="jenis_kendaraan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Service" value="">
                        </div>
                      </div>	
					<div class="col-md-4 form-group">
                        <div class="input-group">
                          <input name="harga" type="text" class="form-control" id="exampleInputEmail1" placeholder="Price" value="">
                        </div>
                      </div>					  
					<div class="col-md-4 form-group">
                        <div class="input-group">
                          <input type="text" name="hargaminimum_mbox" class="form-control" placeholder="Min.Price" value="">
                        </div>
                      </div>
					  </div>
					  <div class="row">                           
					<div class="col-md-4 form-group">
                        <div class="input-group">
                          <input name="dimensi_kendaraan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Dimension (example: 200x200x200)" value="">
                        </div>
                      </div>	
					<div class="col-md-4 form-group">
                        <div class="input-group">
                          <input name="maxweight_kendaraan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Max/Weight" value="">
                        </div>
                      </div>					  
					<div class="col-md-4 form-group">
                        <div class="input-group">
                          <input type="file" name="userfile" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="colored-addon1">
                        </div>
                      </div>
					  </div>
                                                <button type="submit" class="col-md-12 btn btn-success">Add</button>
                                            </form>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
							
							
                        </div>
                    </div>
                  </div>
                <div class="grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
				<div class="box-header with-border">
                  <div class="table-responsive">
                    <table id="example1" class="table table-striped">
                      <thead>
                        <tr>
                                                    <th>Service</th>
													<th>Price</th>
													<th>Min.Price</th>
													<th>Dimension</th>
													<th>Max/Weight</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                      </thead>
					 <tbody>
                                                <?php
                                                foreach ($layananbox as $key) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $key->jenis_kendaraan; ?></td>
														<td><?php echo $key->harga; ?></td>
														<td><?php echo $key->hargaminimum_mbox; ?></td>
														<td><?php echo $key->dimensi_kendaraan; ?></td>
														<td><?php echo $key->maxweight_kendaraan; ?></td>
                                                        <td><img src="<?php echo base_url() . "foto_kendaraan/" . $key->foto_kendaraan; ?>" class="img-responsive img-thumbnail" alt="Cinque Terre"></td>
                                                        <td>
                                                            <a href="<?php echo base_url(); ?>index.php/Layananbox/editLayananForm/<?php echo $key->id; ?>"><button type="button" class="btn btn-primary btn-fw">Edit</button></a>
															<a href="<?php echo base_url();?>index.php/Layananbox/hapusLayanan/<?php echo $key->id; ?>/<?php echo $key->foto_kendaraan; ?>">
                                                                        <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure ?')">
                                                                            Delete
                                                                        </button>
                                                                    </a><!--<a href="#"><button type="button" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin untuk menghapus kategori restoran tersebut ?')">Hapus</button></a>-->
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
