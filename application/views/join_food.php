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
    <title>JOIN FOOD | Gorideme</title>

    <script data-require="angular.js@*" data-semver="1.2.4" src="http://code.angularjs.org/1.2.3/angular.js"></script>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
   <!--  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> -->
     <script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyCc6f-P5mqAhjKsca2KZefZRucUdq2xNgY&sensor=false&libraries=places'></script>
     <script src="<?php echo base_url();?>asset/js/locationpicker.jquery.js"></script>

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
<section id="layanan_isi-join" style="margin-top: 50px;">
    <div class="container" style="padding-bottom: 10px;">
      <div class="row">
		</div>
        <div class="col-md-12">
          <div class="line1"></div>
        </div>
         <div class="col-md-12 col-sm-12 col-xs-12 join_mmasage_form">
          <form role="form" enctype="multipart/form-data" method="post" id="form_unenter" action="<?php echo base_url() ?>index.php/c_upload/upload_mfood">
          <input type="hidden" name="redirect" value="<?php echo base_url()?>index.php/c_utama/join_food">
          <input type="hidden" name="jenis_lapak" value="1">
          <div class="datadiri">
            
             <h1 style="font-weight:bold; font-size:35px; letter-spacing: 2px;">Informasi Umum</h1>
              <hr>
            <div class="row">
				<div class="col-md-6 form-group">
                <label>Owner Name</label>
                <input type="text" placeholder="Owner Name" class="form-control" name="nama_pemilik_restoran">
				</div>
            
				<div class="col-md-6 form-group">
                <label>The name of the person in charge</label>
                <input type="text" placeholder="The name of the person in charge" name="nama_penanggung_jawab" class="form-control">
				</div>
			  
			</div>
			
			<div class="row">
              <div class="col-md-6 form-group">
                <label>identity(ID Card,Driving License,PASPORT)</label>
                <select name="jenis_identitas" class="form-control">
                    <option default>Pilih Tipe</option>
                    <option>ID CARD</option>
                    <option>Driving License</option>
                    <option>PASPORT</option>
                </select>
                <!-- <input type="text" placeholder="nama akhir" class="form-control" name="nama_belakang" required> -->
              </div>
			  
              <div class="col-md-6 form-group">
                <label>ID.No</label>
                <input type="text" placeholder="no.identitas" name="no_identitas" class="form-control" >
              </div>
			</div>
			
			<div class="row">
              <div class="col-md-6 form-group">
                   <label>Password</label>
                   <input type="password" class="form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off">
                </div>
                <div class="col-md-6 form-group">
                  <label>Retype Password</label>
                  <input type="password" name="password2" class="form-control" id="password2" placeholder="Repeat Password" autocomplete="off">
                  <span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Passwords Match
                </div>
			</div>

              </div>
				<div class="row">
				<div class="col-md-6 form-group">
                <label>Company Address</label>
                <input type="text" placeholder="Company Address" name="alamat_pemilik" class="form-control">
              </div>
				
				<div class="col-md-6 form-group">
                <label>City</label>
                <input type="text" placeholder="City" name="kota" class="form-control">
              </div>
			  </div>
			
			<div class="row">
				<div class="col-md-6 form-group">
                <label>Phone</label>
                <input type="tel" placeholder="phone" name="telepon_penanggung_jawab" class="form-control">
              </div>

              <div class="col-md-6 form-group">
                <label>Email</label>
                <input type="email" placeholder="email" name="email_penanggung_jawab" class="form-control">
              </div>
            </div>
            
              
            
            
              <div class="col-md-6 form-group">
                <div></div>
              </div>
            </div>  

          <div class="datakendaraan">
            <h1 style="font-weight:bold; font-size:35px; letter-spacing: 2px;">Restaurant Information</h1>
            <hr>
          
		  <div class="row">
              <div class="col-md-6 form-group">
                <label>Restaurant Name</label>
                <input type="text" placeholder="Restaurant Name" class="form-control" name="nama_restoran">
              </div>
			  
			  <div class="col-md-6 form-group">
                <label>Category</label>
                
                <select name="kategori" class="form-control">
                  <option default>Select Category Restaurant</option>
                  <?php foreach ($jenis as $j) {
                    ?>
                      <option value="<?php echo $j['id'] ?>"><?php echo $j['kategori'] ?></option>
                    <?php
                    # code...
                  } ?>
                 <!--  <option value="2">Restoran Padang</option>
                  <option value="1">Restoran Mahal</option> -->
                
                </select>
              </div>
			  </div>

            <div class="row">
               <div class="col-md-4 form-group">
                <label>Phone</label>
                <input type="tel" placeholder="Phone" name="telepon_restoran" class="form-control">
              </div>
				
				<div class="col-md-4 form-group">
                <label>Opening</label>
                  <!--<input type="time" class="form-control" name="jam_buka">-->
                  <select class="form-control" name="jam_buka">
                      <option value="01:00">01:00</option>
                      <option value="01:30">01:30</option>

                      <option value="02:00">02:00</option>
                      <option value="02:30">02:30</option> 

                      <option value="03:00">03:00</option>
                      <option value="03:30">03:30</option>
                      
                      <option value="04:00">04:00</option>
                      <option value="04:30">04:30</option>
                      
                      <option value="05:00">05:00</option>
                      <option value="05:30">05:30</option>
                      
                      <option value="06:00">06:00</option>
                      <option value="06:30">06:30</option>
                      
                      <option value="07:00">07:00</option>
                      <option value="07:30">07:30</option>
                      
                      <option value="08:00">08:00</option>
                      <option value="08:30">08:30</option>
                      
                      <option value="09:00">09:00</option>
                      <option value="09:30">09:30</option>
                      
                      <option value="10:00">10:00</option>
                      <option value="10:30">10:30</option>
                      
                      <option value="11:00">11:00</option>
                      <option value="11:30">11:30</option>
                      
                      <option value="12:00">12:00</option>
                      <option value="12:30">12:30</option>
                      
                      <option value="13:00">13:00</option>
                      <option value="13:30">13:30</option>
                      
                      <option value="14:00">14:00</option>
                      <option value="14:30">14:30</option>
                      
                      <option value="15:00">15:00</option>
                      <option value="15:30">15:30</option>
                      
                      <option value="16:00">16:00</option>
                      <option value="16:30">16:30</option>
                      
                      <option value="17:00">17:00</option>
                      <option value="17:30">17:30</option>
                      
                      <option value="18:00">18:00</option>
                      <option value="18:30">18:30</option>
                      
                      <option value="19:00">19:00</option>
                      <option value="19:30">19:30</option>
                      
                      <option value="20:00">20:00</option>
                      <option value="20:30">20:30</option>
                      
                      <option value="21:00">21:00</option>
                      <option value="21:30">21:30</option>
                      
                      <option value="22:00">22:00</option>
                      <option value="22:30">22:30</option>
                      
                      <option value="23:00">23:00</option>
                      <option value="23:30">23:30</option>
                      
                      <option value="23:59">23:59</option>
                  </select>
              </div>

              <div class="col-md-4 form-group">
                <label>Closed</label>
                  <!--<input type="time" class="form-control" name="jam_tutup">-->
                  <select class="form-control" name="jam_tutup">
                      <option value="01:00">01:00</option>
                      <option value="01:30">01:30</option>

                      <option value="02:00">02:00</option>
                      <option value="02:30">02:30</option> 

                      <option value="03:00">03:00</option>
                      <option value="03:30">03:30</option>
                      
                      <option value="04:00">04:00</option>
                      <option value="04:30">04:30</option>
                      
                      <option value="05:00">05:00</option>
                      <option value="05:30">05:30</option>
                      
                      <option value="06:00">06:00</option>
                      <option value="06:30">06:30</option>
                      
                      <option value="07:00">07:00</option>
                      <option value="07:30">07:30</option>
                      
                      <option value="08:00">08:00</option>
                      <option value="08:30">08:30</option>
                      
                      <option value="09:00">09:00</option>
                      <option value="09:30">09:30</option>
                      
                      <option value="10:00">10:00</option>
                      <option value="10:30">10:30</option>
                      
                      <option value="11:00">11:00</option>
                      <option value="11:30">11:30</option>
                      
                      <option value="12:00">12:00</option>
                      <option value="12:30">12:30</option>
                      
                      <option value="13:00">13:00</option>
                      <option value="13:30">13:30</option>
                      
                      <option value="14:00">14:00</option>
                      <option value="14:30">14:30</option>
                      
                      <option value="15:00">15:00</option>
                      <option value="15:30">15:30</option>
                      
                      <option value="16:00">16:00</option>
                      <option value="16:30">16:30</option>
                      
                      <option value="17:00">17:00</option>
                      <option value="17:30">17:30</option>
                      
                      <option value="18:00">18:00</option>
                      <option value="18:30">18:30</option>
                      
                      <option value="19:00">19:00</option>
                      <option value="19:30">19:30</option>
                      
                      <option value="20:00">20:00</option>
                      <option value="20:30">20:30</option>
                      
                      <option value="21:00">21:00</option>
                      <option value="21:30">21:30</option>
                      
                      <option value="22:00">22:00</option>
                      <option value="22:30">22:30</option>
                      
                      <option value="23:00">23:00</option>
                      <option value="23:30">23:30</option>
                      
                      <option value="23:59">23:59</option>
                  </select>
              </div>
			</div>
              
			  <div class="row">
				<div class="col-md-6 form-group">
                <label>Address</label>
                <input type="text" placeholder="Address" name="alamat_restoran" class="form-control">
              </div>
			  
              <div class="col-md-6 form-group">
                
                  <label>Location</label>
                  <input type="text" class="form-control" id="us3-address" placeholder="isi lokasi anda" />
              
              </div>
			  </div>
			  
			  <div class="row">
			  <div class="col-md-6 form-group">
                  <label>Latitude</label>
                  <input type="text" name="latitude" class="form-control" id="us3-lat" />
                </div>

                 <div class="col-md-6 form-group">
                   <label>Longitude</label>
                   <input type="text" name="longitude" class="form-control" id="us3-lon"/>
                </div>
				</div>

              <div class="col-md-12 form-group">
                  <div id="us3" style="width: 100%; height: 400px;"></div>
              </div>

                
               <!--  <div class="col-md-6">
                  <label>Radius</label>
                  <input type="text" class="form-control" id="us3-radius" />
                </div> -->
       <!--  </div>
        <div id="us3" style="width: 550px; height: 400px;"></div>
        <div class="clearfix">&nbsp;</div>
        <div class="m-t-small">
            <label class="p-r-small col-sm-1 control-label">Lat.:</label>

            <div class="col-sm-3">
                <input type="text" class="form-control" style="width: 110px" id="us3-lat" />
            </div>
            <label class="p-r-small col-sm-2 control-label">Long.:</label>

            <div class="col-sm-3">
                <input type="text" class="form-control" style="width: 110px" id="us3-lon" />
            </div>
        </div> -->
              <!-- </div> -->

              

              

               <div class="form-group">
                <label>Description Restaurant</label>
                  <textarea placeholder="message" name="deskripsi_resto" rows="6" style="resize:none;" class="form-control"></textarea>
              </div>
              




              <div class="form-group">
                <label>Photo<br>(Format File JPG Max: 1MB)</label>
                <input type="file" placeholder="foto_restoran" class="form-control" accept="image/*" name="foto_restoran">
              </div>

              <div class="col-md-12">
                 <div class="col-md-12 form-group" style="text-align:center; width:100%;">
                      <button type="submit" class="btn btn-main-rounded">Submit</button>
                 </div>
              </div>
              <!-- <div class="col-md-6 form-group">
                <div></div>
              </div> -->
            </div>



            
            </form>
          </div>


            
            
          
          
              
        

        
        
      </div>
  <?php
include 'application/views/footer.php'
?>    
    </div>
  </section><!--/#explore-->
  



  

 
  <!--  <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/js/smoothscroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/coundown-timer.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.nav.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/main.js"></script>    

    <script src="<?php echo base_url() ?>asset/js/modernizr.custom.63321.js"></script>
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
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
 <script>
            $('#us3').locationpicker({
                location: {
                    latitude: -6.2087634,
                    longitude: 106.84559899999999
                },
                radius: 300,
                inputBinding: {
                    latitudeInput: $('#us3-lat'),
                    longitudeInput: $('#us3-lon'),
                    radiusInput: $('#us3-radius'),
                    locationNameInput: $('#us3-address')
                },
                enableAutocomplete: true,
                onchanged: function (currentLocation, radius, isMarkerDropped) {
                    // Uncomment line below to show alert on each Location Changed event
                    //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
                }
            });
        </script>

<script type="text/javascript">
$("input[type=password]").keyup(function(){
    var ucase = new RegExp("[A-Z]+");
  var lcase = new RegExp("[a-z]+");
  var num = new RegExp("[0-9]+");

  
  if($("#password1").val() == $("#password2").val()){
    $("#pwmatch").removeClass("glyphicon-remove");
    $("#pwmatch").addClass("glyphicon-ok");
    $("#pwmatch").css("color","#00A41E");
  }else{
    $("#pwmatch").removeClass("glyphicon-ok");
    $("#pwmatch").addClass("glyphicon-remove");
    $("#pwmatch").css("color","#FF0004");
  }
});
</script>

<script type="text/javascript">
  $('#form_unenter').keypress(
    function(event){
     if (event.which == '13') {
        event.preventDefault();
      }


});
</script>

</body>
</html>