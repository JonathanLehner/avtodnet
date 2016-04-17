<?php 
    include 'header.php';
    
    $_SESSION['admin'] = 1;
    
    if ($_SESSION['admin'] == null)
        {
            header('Location: index.php');
        }
    
    $trol = "HRVASKA";
?>
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
	</head>
	<body class="right-sidebar">
		<div id="page-wrapper">
		

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">ADMIN TAB</div>
					<div id="main" class="container_2">
						<div class="row 100%">
							<div class="8u 12u(mobile)">

								<!-- Content -->
									<div id="content">
										
										<ul class="admin_ul">
											<a href="#" id="tabela_to" class="button style1">Tabela vseh avtomobilskih delov</a>
											<a href="#" id="graf_to" class="button style1">Graf</a>
										</ul>
											

									        

										
										<div class="xd" style="display: none">
										<table border="1" id="myTable" class="tablesorter"> 
					                                        <thead> 
					                                        <tr> 
					                                            <th>Last Name</th> 
					                                            <th>First Name</th> 
					                                            <th>Email</th> 
					                                            <th>Due</th> 
					                                            <th>Web Site</th> 
					                                        </tr> 
					                                        </thead> 
					                                        <tbody> 
					                                       		<?php
					                                       		
					                                       		for($x=1; $x<200; $x++)
					                                       		{
					                                       			echo "<tr> 
					                                            <td>Conway</td> 
					                                            <td>Tim</td> 
					                                            <td>tconway@earthlink.net</td> 
					                                            <td>$50.00</td> 
					                                            <td>http://www.timconway.com</td> 
					                                        </tr> ";
					                                       		}
					                                       		
					                                       		?>
					                                        </tbody> 
					                                        </table>
					                    </div>
      
					                    <div id="graf" style="min-width: 420px; height: 500px; max-width: 600px; margin: 0 auto; display: none;"></div>

									</div>

							</div>
						</div>
					</div>
				</div>
		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script> <!-- TULE SO FUL FAJN GRAF -->
			<script src="https://code.highcharts.com/modules/data.js"></script>
			
			
			<script type="text/javascript">
				$(document).ready(function(){
					    $('#myTable').DataTable();
					});
			</script>
			<script>
				$(document).ready(function(){
				    $("#tabela_to").click(function(){
				        $(".xd").toggle();
				        $("#graf").hide();
				    });
				});
				
				$(document).ready(function(){
				    $("#graf_to").click(function(){
				        $("#graf").toggle();
				        $(".xd").hide();
				    });
				});
			</script>
			
			
			<script>
				$(function () {
					
					    $(document).ready(function () {
					
					        // Build the chart
					        $('#graf').highcharts({
					            chart: {
					                plotBackgroundColor: null,
					                plotBorderWidth: null,
					                plotShadow: false,
					                type: 'pie'
					            },
					            title: {
					                text: 'Raznolikost '
					            },
					            tooltip: {
					                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
					            },
					            plotOptions: {
					                pie: {
					                    allowPointSelect: true,
					                    cursor: 'pointer',
					                    dataLabels: {
					                        enabled: false
					                    },
					                    showInLegend: true
					                }
					            },
					            series: [{
					                name: 'Brands',
					                colorByPoint: true,
					                data: [{
					                    name: 'Microsoft Internet Explorer',
					                    y: 56.33
					                }, {
					                    name: 'Chrome',
					                    y: 24.03,
					                    sliced: true,
					                    selected: true
					                }, {
					                    name: '<?php echo $trol; ?>',
					                    y: 10.38
					                }, {
					                    name: 'Safari',
					                    y: 4.77
					                }, {
					                    name: 'Opera',
					                    y: 0.91
					                }, {
					                    name: 'Proprietary or Undetectable',
					                    y: 0.2
					                }]
					            }]
					        });
					    });
					});
			</script>
			
            
            
            
            
            
	</body>
</html>