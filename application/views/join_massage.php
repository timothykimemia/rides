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
          <form role="form" action="<?php echo base_url()?>index.php/c_upload/upload_mmassage" enctype="multipart/form-data" method="post">
           <input name="redirect" type="hidden" value="<?php echo base_url()?>index.php/c_utama/join_massage" />
           <input name="job" type="hidden" value="3" />
          <div class="datadiri">
            
              <h1 style="font-weight:bold; font-size:35px; letter-spacing: 2px;">Personal data</h1>
              <hr>
            <div class="row">
              <div class="col-md-6 form-group">
                <label>Full Name</label>
                <input type="text" placeholder="Full Name" class="form-control" name="nama_lengkap">
              </div>
            
            
              <div class="col-md-6 form-group">
                <label>Gender</label>
                <select class="form-control" name="jk">
                  <option default></option>
                  <option value="2">Male</option>
                  <option value="1">Female</option>
                </select>
              </div>
			</div>
			
			<div class="row">
              <div class="col-md-6 form-group">
                <label>Phone</label>
                <input type="tel" placeholder="Phone" class="form-control" name="no_hp">
              </div>
			  
			  <div class="col-md-6 form-group">
                <label>Email</label>
                <input type="email" placeholder="email" class="form-control" name="email">
              </div>
			  
			  </div>
			
			<div class="row">
              <div class="col-md-6 form-group">
                <label>Place Of Birth</label>
                <input type="text" placeholder="Place Of Birth" class="form-control" name="tempat_lahir">
              </div>
          
            
              <div class="col-md-6 form-group">
                <label>DOB</label>
                <input style="margin: auto;" placeholder="DOB" type="date" class="tanggal form-control" name="tgl_lahir" />
              </div>
            </div>

               <!-- <div class="col-md-6 form-group">
                <label>Status</label>
                <select class="form-control">
                  <option default></option>
                  <option> Menikah</option>
                  <option> Belum Menikah</option>
                  <option> Pernah Menikah</option>
                </select>
              </div>
 -->
               <!-- <div class="col-md-6 form-group">
                <label>Nama Ibu Kandung</label>
                <input type="text" Placeholder="nama ibu kandung" class="form-control">
              </div> -->
              
             <!--  <div class="col-md-6 form-group">
                <label>Ukuran Seragam</label>
                <select class="form-control">
                  <option default></option>
                  <option> S</option>
                  <option> M</option>
                  <option> L</option>
                  <option> XL</option>
                  <option> XXL</option>
                  <option> XXXL</option>
                </select>
              </div>

              <div class="col-md-6 form-group">
                <label>Apakah Anda Memiliki Android</label>
                <select class="form-control">
                  <option default></option>
                  <option> Ya</option>
                  <option> Tidak</option>
                </select>
              </div> -->
            
			<div class="row">
              <div class="col-md-6 form-group">
                <label>ID.No</label>
                <input type="text" placeholder="ID.No" class="form-control" name="no_ktp">
              </div>
			  
               <div class="col-md-3 form-group">
                <label>ID CARD (Format File JPG Max: 1MB)</label>
                <input type="file" placeholder="nama akhir" class="form-control" accept="image/*" name="foto_ktp">
              </div>
			
               <div class="col-md-3 form-group">
                <label>Photo Profile (JPG Max: 1MB)</label>
                <input type="file" class="form-control" accept="image/*" name="foto_diri">
              </div>
            </div>  
		</div>
          <div class="datadiri">
            <h1 style="font-weight:bold; font-size:35px; letter-spacing: 2px;">Alamat Tinggal Sekarang</h1>
            <hr>
          
              <div class="form-group">
                <label>Address</label>
                <input type="text" placeholder="Example: Street Kemang No.05 Malang " class="form-control" name="alamat_tinggal">
              </div>
          
            <div class="row">
              <div class="col-md-6 form-group">
                <label>District</label>
                <input type="text" placeholder="Example: Malang" class="form-control" name="kecamatan">
              </div>
            

              <div class="col-md-6 form-group">
                <label>City</label>
                <input type="text" placeholder="City" class="form-control" name="kota">
              </div>
			</div>
              <div class="col-md-6 form-group">
                <!-- <label>Status Rumah yang Ditempati</label>
                
                <select class="form-control">
                  <option default></option>
                  <option>Sendiri</option>
                  <option>Orang Tua</option>
                  <option>Kontrak</option>
                </select> -->
                  <div></div>
              </div>

            </div>

            <div class="datadiri">
            <h1 style="font-weight:bold; font-size:35px; letter-spacing: 2px;">Additional data</h1>
            <hr>
          
              <div class="form-group">
                <label>Massage Experience</label>
                <select class="form-control" name="pengalaman">
                  <option value="1"> < 1 Year / Not</option>
                   <option value="2">  1 - 2 Year </option>
                    <option value="3"> 2 - 3 Year</option>
                     <option value="4"> > 3 Year</option>
                </select>
              </div>
          
            <div class="row">
              <div class="col-md-6 form-group">
                <label>Last Field of Work</label>
                <input type="text" placeholder="Example: spa" class="form-control" name="pekerjaan_terakhir">
              </div>
            

              <div class="col-md-6 form-group">
                <label>Family Phone Number</label>
                <input type="tel" placeholder="Family Phone" class="form-control" name="telepon_keluarga">
              </div>
			</div>
			
              <div class="col-md-6 form-group">
               <div></div>
              </div>

            </div>

            <div class="datadiri">
            <h1 style="font-weight:bold; font-size:35px; letter-spacing: 2px;">Massage Type</h1>
            <hr>
               <div class="col-md-12 form-group">
               <div class="col-md-12">
                  <label>The service you choose (may choose more than one)</label>
               </div>
                <?php 
                foreach ($jenis as $j) {
                  # code...?>
                    <div class="col-md-3">
                        <input type="checkbox" name="jenis_pijat[]" value="<?php echo $j['id'] ?>"><?php echo $j['layanan']; ?>
                    </div>
                  <?php
                }
                 ?>
               <div class="form-group">
                <label>Work Area</label>
                <select name="area_kerja" class="form-control">
                      <option value="0">Select Work Area</option>
                    <?php foreach ($area as $a) {
                      ?>
                        <option value="<?php echo $a['id'] ?>"><?php echo $a['cabang_perusahaan'] ?></option>
                      <?php
                    } ?>
                </select>
               
              </div>
               <!--  <div class="col-md-3">
                  <input type="checkbox">Full Body message<br>
                  <input type="checkbox">Full Body message
                </div>
                 <div class="col-md-3">
                  <input type="checkbox">Full Body message<br>
                  <input type="checkbox">Full Body message
                </div>
                 <div class="col-md-3">
                  <input type="checkbox">Full Body message<br>
                  <input type="checkbox">Full Body message
                </div>
                 <div class="col-md-3">
                  <input type="checkbox">Full Body message<br>
                  <input type="checkbox">Full Body message
                </div>
              </div> -->
              <div class="col-md-12">
                 <div class="col-md-12 form-group" style="margin-left:-28px;width:100%;">
                      <button type="submit" class="btn btn-main-rounded">Submit</button>
                 </div>
              </div>


            
            </form>
          </div>
          
      </div>
      

  </section><!--/#explore-->
	

	
<!--footer-->
    <?php
include 'application/views/footer.php'
?>

  
  
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