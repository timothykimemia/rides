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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/iconfonts/font-awesome/css/font-awesome.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" />
</head>
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo">
          <img src="<?php echo base_url(); ?>assets/images/logo500.png" alt="logo"/>
        </a>
        <a class="navbar-brand brand-logo-mini">
          <img src="<?php echo base_url(); ?>assets/images/ic_launcher.png" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        
        <ul class="navbar-nav navbar-nav-right">
          
          
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, Admin !</span>
              <img class="img-xs rounded-circle" src="<?php echo base_url(); ?>assets/images/character_driver.png" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              
              <a href="<?php echo base_url(); ?>index.php/manageadmin" class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a href="<?php echo base_url(); ?>index.php/signout" class="dropdown-item ">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
	
	

<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="<?php echo base_url(); ?>assets/images/character_driver.png" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Admin</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/dashboard">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon fa fa-car"></i>
              <span class="menu-title">Validation Driver</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/validatedriver/driverMotor">Ride</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/validatedriver/mcar">Car</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/validatedriver/mbox">Box</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/validatedriver/mmassage">Massage</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/validatedriver/mservice">Service</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/validatedriver/mfood">Food</a>
                </li>
              </ul>
            </div>
			
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/Listpelanggan">
              <i class="menu-icon fa fa-user-circle"></i>
              <span class="menu-title">Customer</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-driver" aria-expanded="false" aria-controls="ui-driver">
              <i class="menu-icon fa fa-car"></i>
              <span class="menu-title">Driver</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-driver">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/listdriver/mride">Ride</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/listdriver/mcar">Car</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/listdriver/mservice">Service</a>
                </li>
				
              </ul>
            </div>
			</li>
			
			<li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-massage" aria-expanded="false" aria-controls="ui-massage">
              <i class="menu-icon fa fa-user"></i>
              <span class="menu-title">Massage</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-massage">
              <ul class="nav flex-column sub-menu">
				<li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/listdriver/mmassage">Vendor</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/Layananpijat">Service</a>
                </li>
				
              </ul>
            </div>
			</li>
			
			<li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-box" aria-expanded="false" aria-controls="ui-box">
              <i class="menu-icon fa fa-road"></i>
              <span class="menu-title">Box</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-box">
              <ul class="nav flex-column sub-menu">
				<li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/listdriver/mbox">Driver</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/Layananbox">Service</a>
                </li>
				
              </ul>
            </div>
			</li>
			
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/promotion">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Promotion</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/helpcenter">
              <i class="menu-icon mdi mdi-sticker"></i>
              <span class="menu-title">Help Center</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#vendor" aria-expanded="false" aria-controls="vendor">
              <i class="menu-icon fa fa-cutlery"></i>
              <span class="menu-title">Vendor Food</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="vendor">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/listmitramfood"> Vendor </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/kategoriresto"> Category </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/bannermfood"> Banner </a>
                </li>
              </ul>
            </div>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/Withdraw">
              <i class="menu-icon fa fa-money"></i>
              <span class="menu-title">Driver Withdraw</span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#mt" aria-expanded="false" aria-controls="mt">
              <i class="menu-icon fa fa-usd"></i>
              <span class="menu-title">Manual Transactions</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="mt">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/Manualtransaction/driver"> Driver </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/Manualtransaction/pelanggan"> Customer </a>
                </li>
              </ul>
            </div>
          </li>
		  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#mpay" aria-expanded="false" aria-controls="mpay">
              <i class="menu-icon fa fa-university"></i>
              <span class="menu-title">MPAY</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="mpay">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/drivertopup"> Driver </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/usertopup"> Customer </a>
                </li>
              </ul>
            </div>
          </li>
		  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#setcost" aria-expanded="false" aria-controls="setcost">
              <i class="menu-icon fa fa-money"></i>
              <span class="menu-title">Set Cost</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="setcost">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/setcost/mride/m-ride">Ride</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/setcost/mcar/m-car">Car</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/setcost/mbox/m-box">Box</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/setcost/mmassage/m-massage">Massage</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/setcost/mservice/m-service">Service</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/setcost/mfood/m-food">Food</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/setcost/msend/m-send">Send</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/setcost/mmart/m-mart">Mart</a>
                </li>
              </ul>
            </div>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/Voucher">
              <i class="menu-icon fa fa-ticket"></i>
              <span class="menu-title">Voucher</span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#addvo" aria-expanded="false" aria-controls="addvo">
              <i class="menu-icon fa fa-plus-square"></i>
              <span class="menu-title">Add Voucher</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="addvo">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/Voucher/tambahVoucherDiskonPersen">Discount Persen</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/Voucher/tambahVoucherDiskonNominal">Discount Nominal</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/Voucher/tambahVoucherDapatSaldo">Get Wallet</a></li>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>


<!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url(); ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>plugins/fastclick/fastclick.js"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="<?php echo base_url(); ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- ChartJS 1.0.1 -->
        <script src="<?php echo base_url(); ?>plugins/chartjs/Chart.min.js"></script>
