<?php 
  $session_id = $this->session->userdata('form_isi');
  if($session_id == 1){
    ?>
      <script>
          alert('Registration Successful'); 
      </script>
    <?php
    $this->session->unset_userdata('form_isi'); 
    $this->session->set_userdata('form_isi', 0); 
  }
  else{
    $this->session->set_userdata('form_isi', 0);
  }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gorideme</title>
    <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="<?php echo base_url() ?>asset/theme/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Themefisher Font -->  
  <link href="<?php echo base_url() ?>asset/theme/plugins/themefisher-font/style.css" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="<?php echo base_url() ?>asset/theme/plugins/slick/slick.css" rel="stylesheet">
  <!-- Slick Carousel Theme -->
  <link href="<?php echo base_url() ?>asset/theme/plugins/slick/slick-theme.css" rel="stylesheet">
  
  <!-- CUSTOM CSS -->
  <link href="<?php echo base_url() ?>asset/theme/css/style.css" rel="stylesheet">
	
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style_drop_down.css" media="all" />  -->     
    <link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/Gorideme.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<?php
    include 'application/views/header.php'
?>
    <!--/#header-->
    <div class="body-wrapper"></div>
	
	<section id="layanan_isi-join">
    <div class="container" style="padding-bottom: 10px;">
      <div class="row">

			
				<div class="layanan_isi-join-judul" style="font-family:'Yanone Kaffeesatz', 'sans-serif';">
				    <br><br><br>
				</div>
				
				<div class="layanan_isi-join-judul2">
					
				</div>
				<div class="col-md-12">
					<div class="line1"></div>
				</div>
									
					
			</div>  
      
	  <div class="join_mmasage_form">
          <form role="form" action="<?php echo base_url()?>index.php/c_upload/upload_mservice" enctype="multipart/form-data" method="post">
          <input name="redirect" type="hidden" value="<?php echo base_url()?>index.php/c_utama/join_service" />
          <input name="job" type="hidden" value="5" />
          <div class="datadiri">
            
              <h1 style="font-weight:bold; font-size:35px; letter-spacing: 2px;">Data Diri</h1>
              <hr>
            <div class="row">
              <div class="col-md-6 form-group">
                <label>Full Name</label>
                <input type="text" placeholder="Full Name" class="form-control" name="nama_lengkap">
              </div>
            
               <div class="col-md-6 form-group">
                <label>ID.No</label>
                <input type="text" placeholder="ID.No" class="form-control" name="no_ktp">
              </div>
			</div>
			
			<div class="row">
               <div class="col-md-6 form-group">
                <label>ID Card<br>(Format File JPG Max: 1MB)</label>
                <input type="file" placeholder="nama akhir" class="form-control" accept="image/*" name="foto_ktp">
              </div>
              
               <div class="col-md-6 form-group">
                <label>Photo Profile<br>(Format File JPG Max: 1MB)</label>
                <input type="file" class="form-control" accept="image/*" name="foto_diri">
              </div>
			  </div>
			  
			  <div class="row">
              <div class="col-md-6 form-group">
                <label>Phone</label>
                <input type="tel" placeholder="phone" class="form-control" name="no_telepon">
              </div>

              <div class="col-md-6 form-group">
                <label>Email</label>
                <input type="email" placeholder="ex: dian@yahoo.com" class="form-control" name="email">
              </div>
			  </div>
          
            
              <div class="form-group">
                <label>Adress</label>
                <input type="text" placeholder="Address" class="form-control" name="alamat">
              </div>
			  
			  <div class="row">
               <div class="col-md-6 form-group">
                <label>districts</label>
                <input type="text" placeholder="districts" class="form-control" name="kecamatan">
              </div>

              <div class="col-md-6 form-group">
                <label>City</label>
                <input type="text" placeholder="City" class="form-control" name="kota">
              </div>
			  </div>
			  
			  <div class="row">
               <div class="col-md-6 form-group">
                <label>Place Of Birth</label>
                <input type="text" placeholder="Place Of Birth" class="form-control" name="tempat_lahir">
              </div>
          
            
              <div class="col-md-6 form-group">
                <label>DOB</label><br>
                <input style="margin: auto;" placeholder="DOB" type="date" class="tanggal form-control" name="tgl_lahir" />
              </div>
			  </div>
            
            <div class="row">
               <div class="col-md-6 form-group">
                    
                      <label>Equipment used</label>
                      
                
                    <div class="col-md-12">
                      <?php 
                      foreach ($jenis as $j) {
                        # code...
                        ?>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="checkbox" name="peralatan[]" value="<?php echo $j['id'] ?>"><?php echo $j['nama_peralatan'] ?>
                          </div>
                        <?php
                      }
                       ?>
                       
                
                    </div>
                
              </div>
              
              <div class="col-md-6 form-group">
                    
                      <label>Service Expertise</label>
                      
                
                    <div class="col-md-12">
                      <?php 
                      foreach ($keahlian as $k) {
                        # code...
                        ?>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="checkbox" name="keahlian[]" value="<?php echo $k['id'] ?>"><?php echo $k['jenis_service'] ?>
                          </div>
                        <?php
                      }
                       ?>
                       
                
                    </div>
                
              </div>
            </div>
            
              <div class="col-md-12 form-group">
                <label>Work Area</label>
                <select name="area_kerja" class="form-control">
                      <option value="0">select work area</option>
                    <?php foreach ($area as $a) {
                      ?>
                        <option value="<?php echo $a['id'] ?>"><?php echo $a['cabang_perusahaan'] ?></option>
                      <?php
                    } ?>
                </select>
               <!--  <input type="text" placeholder="area kerja" class="form-control" accept="image/*" name="area_kerja"> -->
              </div>
            
            
            
            
            
             <div class="col-md-12">
                 <div class="col-md-12 form-group" style="text-align:center; width:100%;">
                      <button type="submit" class="btn btn-main-rounded">Submit</button>
                 </div>
              </div>
            </div>  

					
						</form>
					</div>
			<div class="col-md-5 col-xs-12 col-sm-12 join_mservice_foto" style="">
              <!-- <div class="foto_mservice" style="background:url('<?php echo base_url()?>asset/images/service11.png') no-repeat center center / cover;
    height: 700px;
    padding: 20px;
    
    color: #9B9B9B;
    padding-bottom: 10px;
    border-radius: 5px;">
                
              </div> -->
              <img src="https://www.google.com/nexus/images/comparison/compare-6p.png" style="margin-top: 30px;">
          </div>	
			</div>
<?php
include 'application/views/footer.php'
?>
			
		</div>
	</section><!--/#explore-->
	


  
	<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.js"></script>
   <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/js/smoothscroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/coundown-timer.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.nav.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/main.js"></script>    

    <script src="<?php echo base_url() ?>asset/js/modernizr.custom.63321.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>asset/js/jquery.catslider.js"></script>

    <script>
			$(function() {

				$( '#mi-slider' ).catslider();

			});
		</script>

	 <script>

    var trigger = $('.hamburger'),
    overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
     	 overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
         overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    
    <script type="text/javascript">
            $(document).ready(function () {
                $('.tanggal').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
            });
        </script>
</body>
</html>