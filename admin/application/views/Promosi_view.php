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
            <!-- Content Wrapper. Contains page content -->
			<div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
					  
					  <div class="card">
                            <div class="card">
                                <div class="card-header with-border">
                                    <h3 class="box-title">Add Banner</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="card-body">
                                    
                                        <!--box 2--> 
             
<form role="form" action="<?php echo base_url(); ?>index.php/Promotion/tambahPromosi" method="POST" enctype="multipart/form-data">
                        <div class="row">                           
<div class="col-md-6 form-group">
						<div class="input-group">
                          <div class="input-group-prepend bg-info">
						  
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi-shield-outline"></i>
                            </span>
							<select name="fiturpromosi">
                                                    <!--<option value="general">General</option>-->
                                                    <option value="1">Ride</option>
                                                    <option value="2">Car</option>
                                                    <option value="3">Food</option>
                                                    <option value="4">Mart</option>
                                                    <option value="5">Send</option>
                                                    <option value="6">Massage</option>
                                                    <option value="7">Box</option>
                                                    <option value="8">Service</option>
                                                </select>
                          </div>
                        </div>
                      </div>						
					<div class="col-md-6 form-group">
                        <div class="input-group">
                          <div class="input-group-prepend bg-info">
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi-camera text-white"></i>
                            </span>
                          </div>
                          <input type="file" name="userfile" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="colored-addon1">
                        </div>
                      </div>
					  </div>
                      <br><br>
                                                <button type="submit" class="col-md-12 btn btn-success">Add</button>
                                            </form>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                  </div>
			
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
				<div class="card-header with-border">
                  <h3 class="box-title">Banner</h3>
				   </div>
                  <div class="table-responsive">
				  
                    <table class="table table-bordered">
                                                <thead>
                                                   <tr>
                                                            <th>No</th>
															<th>photo</th>
                                                            <th>File Name</th>
                                                            <th>Feature</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        foreach ($promosi as $val) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?php
                                                                    echo $no;
                                                                    $no++;
                                                                    ?>
                                                                </td>
																<td>
															<img src="<?php echo base_url(); ?>fotopromosi/<?php echo $val->foto; ?>" class="img-responsive" alt="Cinque Terre">
															</td>
                                                                <td><?php echo $val->foto; ?></td>
                                                                <td><?php echo $val->fitur; ?></td>
                                                                <td>                                                    
                                                                    <a href="<?php echo base_url();?>index.php/Promotion/hapusPromosi/<?php echo $val->id; ?>/<?php echo $val->foto; ?>">
                                                                        <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you deleted the promotion ?')">
                                                                            Delete
                                                                        </button>
                                                                    </a>
                                                                </td>
                                                            </tr> 
                                                            <?php
                                                        }
                                                        ?>

                                                    </tbody>
                                            </table>
					<div>&nbsp;</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.content-wrapper -->
             <?php
    include 'application/views/footer.php'
?>

            <!-- Control Sidebar -->
            
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
		</div>
        <!-- ./wrapper -->

         <!-- container-scroller -->
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
        
    </body>
    <!-- ./wrapper -->

    <!-- page script -->
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
