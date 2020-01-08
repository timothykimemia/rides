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
             <div class="row">                           
<div class="col-md-6 form-group">
<form role="form" action="<?php echo base_url(); ?>index.php/Bannermfood/tambahBannerMfood" method="POST" enctype="multipart/form-data">
                        <div class="input-group">
                          <div class="input-group-prepend bg-info">
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi-shield-outline"></i>
                            </span>
                          </div>
                          <input id="tags" class="form-control" name="namarestoran" type="text" name="userfile" class="form-control" placeholder="Resto Name" aria-label="Resto Name" aria-describedby="colored-addon1">
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
                                                
                                                <textarea name="keterangan" placeholder="Description" class="col-md-12 form-control" id="exampleTextarea" rows="3"></textarea>
                                                
                                                <br><br>
                                                <button type="submit" class="col-md-12 btn btn-success">Add</button>
                                            </form>
                                        </div>
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
														<th>Photo</th>
                                                        <th>Resto Name</th>
                                                        <th>File Name</th>
                                                        <th>Description</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
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
															<img src="<?php echo base_url() . "fotopromosimfood/" . $val->foto; ?>" class="img-responsive" alt="Cinque Terre">
															</td>
                                                            <td><?php echo $val->nama_resto; ?></td>
                                                            <td><?php echo $val->foto; ?></td>
                                                            <td><?php echo $val->keterangan; ?></td>
                                                            <td><?php
                                                            if ($val->is_show == 1) {
                                                                echo '<span class="label label-success">ON</span>';
                                                            } else {
                                                                echo '<span class="label label-danger">OFF</span>';
                                                            }
                                                                ?>
                                                            </td>

                                                            <td><?php
                                                            if ($val->is_show == 1) {
                                                                    ?>
                                                                    <a href="<?php echo base_url(); ?>index.php/Bannermfood/turnoff/<?php echo $val->id; ?>">
                                                                        <button type="button" class="btn btn-default btn-sm">
                                                                            Turn OFF
                                                                        </button>
                                                                    </a>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <a href="<?php echo base_url(); ?>index.php/Bannermfood/turnon/<?php echo $val->id; ?>">
                                                                        <button type="button" class="btn btn-default btn-sm">
                                                                            Turn ON
                                                                        </button>
                                                                    </a>
                                                                    <?php
                                                                }
                                                                ?>
																<a href="<?php echo base_url(); ?>index.php/Bannermfood/hapusBannerMfood/<?php echo $val->id; ?>/<?php echo $val->foto; ?>">
                                                                    <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete the Banner ?')">
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
        $( function() {
            var availableTags = [

                    
<?php
foreach ($restoran as $res) {
    echo "\"$res->nama_resto\",";
}
?>
            ""
        ];
        $( "#tags" ).autocomplete({
            source: availableTags
        });
    } );
    </script>






</body>
</html>
