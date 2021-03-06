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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/iconfonts/font-awesome/css/font-awesome.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" />
</head>
<div class="container-scroller">
<div class="container-fluid page-body-wrapper">
<?php include 'SIDEBAR.php'; ?>
<div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Customer</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $jumlahPelanggan1[0]['jumlah'] + $jumlahPelanggan2[0]['jumlah'] + $jumlahPelanggan3[0]['jumlah']; ?></h3>
                      </div>
					  <span class="text-muted mt-3 mb-0 center">
                    <span class="btn btn-success btn-md"><?php echo $jumlahPelanggan1[0]['jumlah']; ?></span> 
                    <span class="btn btn-dark btn-md"><?php echo $jumlahPelanggan2[0]['jumlah']; ?></span>
                    <span class="btn btn-danger btn-md"><?php echo $jumlahPelanggan3[0]['jumlah']; ?> </span> 
                  </span>
                    </div>
                  </div>
				</div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-car text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Driver</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $jumlahDriver1[0]['jumlah'] + $jumlahDriver2[0]['jumlah'] + $jumlahDriver3[0]['jumlah']; ?></h3>
                      </div>
					  <span class="text-muted mt-3 mb-0 center">
                    <span class="btn btn-success btn-md"><?php echo $jumlahDriver1[0]['jumlah']; ?></span> 
                    <span class="btn btn-dark btn-md"><?php echo $jumlahDriver2[0]['jumlah']; ?></span>
                    <span class="btn btn-danger btn-md"><?php echo $jumlahDriver3[0]['jumlah']; ?> </span> 
                  </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Transactions</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $transaksiBulan[0]['jumlah']; ?></h3>
                      </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Monthly Transactions
                  </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="box-header with-border">
                                    <h3 class="text-center">Monthly Recap Transaction</h3>

                                   </div>
                                <!-- /.box-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="chart-container">
                                                <!-- Sales Chart Canvas -->
                                                <canvas id="salesChart" style="height: 200px;"></canvas>
                                            </div>
                                            <!-- /.chart-responsive -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- ./box-body -->

                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->


                        <div class="col-md-4">
                            <div class="card">
                                <div class="box-header with-border">
                                    <h3 class="text-center">Detail Transaction</h3>

                                    
                                </div>
                                <!-- /.box-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <canvas id="pieChart" style="height: 200px; width: 339px;" height="152" width="305"></canvas>
                                            <br>
                                            <p class="text-center">
                                                Details Transaction <?php echo date('F'); ?><br> 
                                                Total Transaction : <b><?php echo $transaksiBulan[0]['jumlah']; ?></b>
                                            </p>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- ./box-body -->

                            </div>
                            <!-- /.box -->
                        </div>


                    </div>
					
          <div class="grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
				<div class="box-header with-border">
                  <h4 class="card-title">Latest Transaction</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Feature</th>
                          <th>Customer</th>
                          <th>Phone</th>
                          <th>Driver</th>
                          <th>Status</th>
                          <th>Payment</th>
                          <th>Date</th>
                        </tr>
                      </thead>
					  <tbody>

                                                <?php
                                                // var_dump($transaksiDriver)
                                                foreach ($transaksiDriver as $value) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $value->nomor; ?></td>
                                                        <td><?php echo $value->fitur; ?></td>
                                                        <td><?php echo $value->nama_depan . " " . $value->nama_belakang; ?></td>
                                                        <td><?php echo $value->no_telepon; ?></td>
                                                        <td>
                                                            <?php
                                                            if ($value->id_driver == 'D0') {
                                                                echo '-';
                                                            } else if (strpos($value->id_driver, 'M') !== FALSE) {
                                                                ?>
                                                                <a href="<?php echo base_url(); ?>index.php/Listdriver/detilMmassage/<?php echo $value->id_driver ?>">
                                                                    <?php echo $value->id_driver ?>
                                                                </a>
                                                                <?php
                                                            } else if (strpos($value->id_driver, 'T') !== FALSE) {
                                                                ?>
                                                                <a href="<?php echo base_url(); ?>index.php/Listdriver/detilMservice/<?php echo $value->id_driver ?>">
                                                                    <?php echo $value->id_driver ?>
                                                                </a>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <a href="<?php echo base_url(); ?>index.php/Listdriver/detilDriver/<?php echo $value->id_driver ?>">
                                                                    <?php echo $value->id_driver ?>
                                                                </a>
                                                                <?php
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            switch ($value->status_transaksi) {
                                                                case 'mencari':
                                                                    echo '<span class="btn btn-dark btn-sm">Serching</span>';
                                                                    break;
                                                                case 'Menawarkan':
                                                                    echo '<span class="label label-info">Menawarkan</span>';
                                                                    break;
                                                                case 'accept':
                                                                    echo '<span class="btn btn-primary btn-sm">Accept</span>';
                                                                    break;
                                                                case 'cancel':
                                                                    echo '<span class = "btn btn-danger btn-sm">Canceled</span>';
                                                                    break;
                                                                case 'reject':
                                                                    echo '<span class = "btn btn-danger btn-sm">Reject</span>';
                                                                    break;
                                                                case 'finish':
                                                                    echo '<span class="btn btn-success btn-sm">Finish</span>';
                                                                    break;
                                                                case 'start':
                                                                    echo '<span class="btn btn-primary btn-sm">Start</span>';
                                                                    break;
                                                                default:
                                                                    break;
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if ($value->pakai_mpay == '0') {
                                                                echo 'cash';
                                                            } else {
                                                                echo 'mpay';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <div><?php echo $value->waktu; ?></div>
                                                        </td>
                                                    </tr> 
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                      
                    </table>
              
                  </div>
				  
					
				<div class="box-footer clearfix">

                                    <!--<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>-->
                                    <a href="<?php echo base_url(); ?>index.php/Dashboard/allTransaction" class="btn btn-primary btn-fw">View All Transaction</a>
                                    <a href="<?php echo base_url(); ?>index.php/Dashboard/cancelTransaction" class="btn btn-danger btn-fw">Cancel Order</a>
                                </div>
                </div>
				</div>
            </div>
          
        </div>
		
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
			
          <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2018
              <a>Balqis Studio</a><i class="mdi mdi-heart text-danger"></i>. All rights reserved.</span>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
	  
    
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url(); ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
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
  <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/misc.js"></script>
 <script>
            $(function () {

                'use strict';

                /* ChartJS
                 * -------
                 * Here we will create a few charts using ChartJS
                 */

                //-----------------------
                //- MONTHLY SALES CHART -
                //-----------------------

                // Get context with jQuery - using jQuery's .get() method.
                var salesChartCanvas = $("#salesChart").get(0).getContext("2d");
                // This will get the first returned node in the jQuery collection.
                var salesChart = new Chart(salesChartCanvas);

                var salesChartData = {
                    labels: ["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"],
                    datasets: [
                        {
                            label: "2016",
                            fillColor: "rgba(0,0,255,0.8)",
                            strokeColor: "rgba(0,0,255,0.5)",
                            pointColor: "#3b8bba",
                            pointStrokeColor: "0,0,255,0.5)",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(0,0,255,0.5)",
                            data: [
<?php echo $bln1[0]['jumlah']; ?>, 
<?php echo $bln2[0]['jumlah']; ?>, 
<?php echo $bln3[0]['jumlah']; ?>, 
<?php echo $bln4[0]['jumlah']; ?>, 
<?php echo $bln5[0]['jumlah']; ?>, 
<?php echo $bln6[0]['jumlah']; ?>, 
<?php echo $bln7[0]['jumlah']; ?>, 
<?php echo $bln8[0]['jumlah']; ?>, 
<?php echo $bln9[0]['jumlah']; ?>, 
<?php echo $bln10[0]['jumlah']; ?>, 
<?php echo $bln11[0]['jumlah']; ?>, 
<?php echo $bln12[0]['jumlah']; ?>
                    ]
                }
            ]
        };

        var salesChartOptions = {
            //Boolean - If we should show the scale at all
            showScale: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: false,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - Whether the line is curved between points
            bezierCurve: true,
            //Number - Tension of the bezier curve between points
            bezierCurveTension: 0.3,
            //Boolean - Whether to show a dot for each point
            pointDot: false,
            //Number - Radius of each point dot in pixels
            pointDotRadius: 4,
            //Number - Pixel width of point dot stroke
            pointDotStrokeWidth: 1,
            //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            pointHitDetectionRadius: 20,
            //Boolean - Whether to show a stroke for datasets
            datasetStroke: true,
            //Number - Pixel width of dataset stroke
            datasetStrokeWidth: 2,
            //Boolean - Whether to fill the dataset with a color
            datasetFill: true,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%=datasets[i].label%></li><%}%></ul>",
            //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true
        };

        //Create the line chart
        salesChart.Line(salesChartData, salesChartOptions);

        //---------------------------
        //- END MONTHLY SALES CHART -
        //---------------------------

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
            {
                value: <?php echo $Menawarkan[0]['jumlah']; ?>,
                color: "#00a65b",
                highlight: "#E3F2E1",
                label: "Menawarkan"
            },
            {
                value: <?php echo $Mencari[0]['jumlah']; ?>,
                color: "#46514f",
                highlight: "#E3F2E1",
                label: "Mencari"
            },
            {
                value: <?php echo $Berhasil[0]['jumlah']; ?>,
                color: "#3a5068",
                highlight: "#E3F2E1",
                label: "Berhasil"
            },
            {
                value: <?php echo $Ditolak[0]['jumlah']; ?>,
                color: "#fc2000",
                highlight: "#E3F2E1",
                label: "Ditolak"
            },
            {
                value: <?php echo $Dibatalkan[0]['jumlah']; ?>,
                color: "#fc2000",
                highlight: "#E3F2E1",
                label: "Dibatalkan"
            },
            {
                value: <?php echo $Memulai[0]['jumlah']; ?>,
                color: "#38a0b9",
                highlight: "#E3F2E1",
                label: "Memulai"
            },
            {
                value: <?php echo $Selesai[0]['jumlah']; ?>,
                color: "#00d129",
                highlight: "#E3F2E1",
                label: "Selesai"
            }
        ];
        var pieOptions = {
            //Boolean - Whether we should show a stroke on each segment
            segmentShowStroke: true,
            //String - The colour of each segment stroke
            segmentStrokeColor: "#fff",
            //Number - The width of each segment stroke
            segmentStrokeWidth: 1,
            //Number - The percentage of the chart that we cut out of the middle
            percentageInnerCutout: 50, // This is 0 for Pie charts
            //Number - Amount of animation steps
            animationSteps: 100,
            //String - Animation easing effect
            animationEasing: "easeOutBounce",
            //Boolean - Whether we animate the rotation of the Doughnut
            animateRotate: true,
            //Boolean - Whether we animate scaling the Doughnut from the centre
            animateScale: false,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true,
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: false,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
            //String - A tooltip template
            tooltipTemplate: "<%=value %> <%=label%>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);
        //-----------------
        //- END PIE CHART -
        //-----------------

        /* jVector Maps
         * ------------
         * Create a world map with markers
         */
        $('#world-map-markers').vectorMap({
            map: 'world_mill_en',
            normalizeFunction: 'polynomial',
            hoverOpacity: 0.7,
            hoverColor: false,
            backgroundColor: 'transparent',
            regionStyle: {
                initial: {
                    fill: 'rgba(210, 214, 222, 1)',
                    "fill-opacity": 1,
                    stroke: 'none',
                    "stroke-width": 0,
                    "stroke-opacity": 1
                },
                hover: {
                    "fill-opacity": 0.7,
                    cursor: 'pointer'
                },
                selected: {
                    fill: 'yellow'
                },
                selectedHover: {}
            },
            markerStyle: {
                initial: {
                    fill: '#3a5068',
                    stroke: '#111'
                }
            },
            markers: [
                {latLng: [41.90, 12.45], name: 'Vatican City'},
                {latLng: [43.73, 7.41], name: 'Monaco'},
                {latLng: [-0.52, 166.93], name: 'Nauru'},
                {latLng: [-8.51, 179.21], name: 'Tuvalu'},
                {latLng: [43.93, 12.46], name: 'San Marino'},
                {latLng: [47.14, 9.52], name: 'Liechtenstein'},
                {latLng: [7.11, 171.06], name: 'Marshall Islands'},
                {latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis'},
                {latLng: [3.2, 73.22], name: 'Maldives'},
                {latLng: [35.88, 14.5], name: 'Malta'},
                {latLng: [12.05, -61.75], name: 'Grenada'},
                {latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines'},
                {latLng: [13.16, -59.55], name: 'Barbados'},
                {latLng: [17.11, -61.85], name: 'Antigua and Barbuda'},
                {latLng: [-4.61, 55.45], name: 'Seychelles'},
                {latLng: [7.35, 134.46], name: 'Palau'},
                {latLng: [42.5, 1.51], name: 'Andorra'},
                {latLng: [14.01, -60.98], name: 'Saint Lucia'},
                {latLng: [6.91, 158.18], name: 'Federated States of Micronesia'},
                {latLng: [1.3, 103.8], name: 'Singapore'},
                {latLng: [1.46, 173.03], name: 'Kiribati'},
                {latLng: [-21.13, -175.2], name: 'Tonga'},
                {latLng: [15.3, -61.38], name: 'Dominica'},
                {latLng: [-20.2, 57.5], name: 'Mauritius'},
                {latLng: [26.02, 50.55], name: 'Bahrain'},
                {latLng: [0.33, 6.73], name: 'São Tomé and Príncipe'}
            ]
        });

        /* SPARKLINE CHARTS
         * ----------------
         * Create a inline charts with spark line
         */

        //-----------------
        //- SPARKLINE BAR -
        //-----------------
        $('.sparkbar').each(function () {
            var $this = $(this);
            $this.sparkline('html', {
                type: 'bar',
                height: $this.data('height') ? $this.data('height') : '30',
                barColor: $this.data('color')
            });
        });

        //-----------------
        //- SPARKLINE PIE -
        //-----------------
        $('.sparkpie').each(function () {
            var $this = $(this);
            $this.sparkline('html', {
                type: 'pie',
                height: $this.data('height') ? $this.data('height') : '90',
                sliceColors: $this.data('color')
            });
        });

        //------------------
        //- SPARKLINE LINE -
        //------------------
        $('.sparkline').each(function () {
            var $this = $(this);
            $this.sparkline('html', {
                type: 'line',
                height: $this.data('height') ? $this.data('height') : '90',
                width: '100%',
                lineColor: $this.data('linecolor'),
                fillColor: $this.data('fillcolor'),
                spotColor: $this.data('spotcolor')
            });
        });
    });
    
        </script>
    </body>
</html>
