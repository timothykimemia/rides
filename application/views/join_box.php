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

  }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Go Ride Me</title>
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
    <link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/gorideme.png">
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
          <form role="form" action="<?php echo base_url()?>index.php/c_upload/upload" enctype="multipart/form-data" method="post">
           <input name="redirect" type="hidden" value="<?php echo base_url()?>index.php/c_utama/join_box" />
           <input name="job" type="hidden" value="4" />
          <div class="datadiri">
            
               <h1 style="font-weight:bold;font-size: 35px;letter-spacing: 2px;">Personal Info</h1>
              <hr>
			  
			<div class="row">
              <div class="col-md-6 form-group">
                <label>First Name</label>
                <input type="text" placeholder="First Name" class="form-control" name="nama_depan">
              </div>
            
            
              <div class="col-md-6 form-group">
                <label>Last Name</label>
                <input type="text" placeholder="Last Name" class="form-control" name="nama_belakang">
              </div>
			</div>
			
			<div class="row">
              <div class="col-md-6 form-group">
                <label>Email</label>
                <input type="email" placeholder="email" class="form-control" name="email">
              </div>

              <div class="col-md-6 form-group">
                <label>Phone</label>
                <input type="tel" placeholder="Phone" class="form-control" name="no_telepon">
              </div>
			</div>
            
			<div class="row">
              <div class="col-md-6 form-group">
                <label>Place Of Birth</label>
                <input type="text" placeholder="Place Of birth" class="form-control" name="tempat_lahir">
              </div>
          
            
              <div class="col-md-6 form-group">
                <label>DOB</label>
                 <input style="margin: auto;" placeholder="DOB" type="date" class="tanggal form-control" name="tgl_lahir" />
              </div>
            </div>
            
			<div class="row">
              <div class="col-md-6 form-group">
                <label>ID No</label>
                <input type="text" placeholder="ID.No" class="form-control" name="no_ktp">
              </div>
            
            
              <div class="col-md-6 form-group">
                <label>ID Card (Format File JPG Max: 1MB)</label>
                <input type="file" placeholder="nama akhir" class="form-control" accept="image/*" name="foto_ktp">
              </div>
            </div>
            
			<div class="row">
              <div class="col-md-4 form-group">
                <label>Vehicle License<br>(Format File JPG Max: 1MB)</label>
                <input type="file" placeholder="nama akhir" class="form-control" accept="image/*" name="foto_stnk">
              </div>
            
            
              <div class="col-md-4 form-group">
                <label>Driving License<br>(Format File JPG Max: 1MB)</label>
                <input type="file" placeholder="nama akhir" class="form-control" accept="image/*" name="foto_sim">
              </div>
            
            
              <div class="col-md-4 form-group">
                <label>Photo Profile<br>(Format File JPG Max: 1MB)</label>
                <input type="file" placeholder="nama akhir" class="form-control" accept="image/*" name="foto_diri">
              </div>
            </div>
            
            
              <div class="col-md-6 form-group">
                <div></div>
              </div>
            </div>  

             <div class="datakendaraan">
            <h1 style="font-weight:bold;font-size: 35px;letter-spacing: 2px;">Transportation Data</h1>
            <hr>
          <div class="row">
              <div class="col-md-6 form-group">
                <label>Brand</label>
                <input type="text" placeholder="contoh : Hino, Fuso, Daihatsu" class="form-control" name="merk">
              </div>

				<div class="col-md-6 form-group">
                <label>Transportation Type</label>
                <input type="text" placeholder="contoh : Dutro, L300" class="form-control" name="tipe">
              </div>
			</div>
            
			<div class="row">
              <div class="col-md-4 form-group">
                <label>Vehicle Type</label>
              
               <select name="jenis" class="form-control">
                <option default>Select Transportation Type</option>
                <?php 
                  foreach ($jenis as $j) {
                    ?>
                       <option value="<?php echo $j['id'] ?>"><?php echo $j['jenis_kendaraan'] ?></option>
                    <?php
                    # code...
                  }
                 ?>  
                </select>
              </div>
            
              <!-- <div class="col-md-6 form-group">
                <label>Jenis Kendaraan</label>
                
                <select name="jenis" class="form-control">
                  <option default>Pilih Jenis Kendaraan</option>
                  <option value="2">Mobil</option>class="form-control"
                  <option value="1">Motor</option>
                </select>
              </div> -->

              <div class="col-md-4 form-group">
                <label>Vehicle No</label>
                <input type="text" placeholder="Vehicle No" class="form-control" name="nomor_kendaraan">
              </div>

              <div class="col-md-4 form-group">
                <label>Color</label>
                <input type="text" placeholder="Color" class="form-control" name="warna">
              </div>
			</div>

              <div class="col-md-12" style="float: left;">
                 <div class="col-md-6 form-group" style="margin-left:-25px;width:100%;">
                      <button type="submit" class="btn btn-main-rounded">Submit</button>
                 </div>
              </div>
            </div>
               </form>
          </div>

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