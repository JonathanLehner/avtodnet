<?php 
    include 'header.php';
    
    $_SESSION['admin'] = 1;
    
    if ($_SESSION['admin'] == null)
        {
            header('Location: index.php');
        }
?>
<head>
    		<link rel="stylesheet" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
</head>



			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Preglednica uvoženih delov</div>
					<div id="main" class="container">
						<div class="row 150%">
							<div class="8u 12u(mobile)">

								<!-- Content -->
									<div id="content">
										<article class="box post">
											<header class="style1">
												<h2>ČE SI ADMIN</h2>
												<p>lahko tule vidiš ful velik, če pa nisi pa jebi ga</p>
											</header>
										</article>
									</div>

							</div>
							<div class="4u 12u(mobile)">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="box">
											<header>
												<h2>Vitae turpis consequat</h2>
											</header>
											<ul class="style2">
												<li>
													<article class="box post-excerpt">
														<a href="#" class="image left"><img src="images/pic08.jpg" alt="" /></a>
														<h3><a href="#">Diam odio lorem</a></h3>
														<p>Duis odio diam, luctus et vulputate vitae, vehicula ac dolor. Pellentesque at urna eget tellus sed etiam.</p>
													</article>
												</li>
												<li>
													<article class="box post-excerpt">
														<a href="#" class="image left"><img src="images/pic09.jpg" alt="" /></a>
														<h3><a href="#">Sed duis consequat</a></h3>
														<p>Duis odio diam, luctus et vulputate vitae, vehicula ac dolor. Pellentesque at urna eget tellus sed etiam.</p>
													</article>
												</li>
												<li>
													<article class="box post-excerpt">
														<a href="#" class="image left"><img src="images/pic10.jpg" alt="" /></a>
														<h3><a href="#">Tellus nulla volutpat</a></h3>
														<p>Duis odio diam, luctus et vulputate vitae, vehicula ac dolor. Pellentesque at urna eget tellus sed etiam.</p>
													</article>
												</li>
											</ul>
											<a href="#" class="button style1">Archives</a>
										</section>
									</div>

							</div>
						</div>
					</div>
				</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title">The Endorsements</div>
					<div id="highlights" class="container">
						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
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
                                        <tr> 
                                            <td>Smith</td> 
                                            <td>John</td> 
                                            <td>jsmith@gmail.com</td> 
                                            <td>$50.00</td> 
                                            <td>http://www.jsmith.com</td> 
                                        </tr> 
                                        <tr> 
                                            <td>Bach</td> 
                                            <td>Frank</td> 
                                            <td>fbach@yahoo.com</td> 
                                            <td>$50.00</td> 
                                            <td>http://www.frank.com</td> 
                                        </tr> 
                                        <tr> 
                                            <td>Doe</td> 
                                            <td>Jason</td> 
                                            <td>jdoe@hotmail.com</td> 
                                            <td>$100.00</td> 
                                            <td>http://www.jdoe.com</td> 
                                        </tr> 
                                        <tr> 
                                            <td>Conway</td> 
                                            <td>Tim</td> 
                                            <td>tconway@earthlink.net</td> 
                                            <td>$50.00</td> 
                                            <td>http://www.timconway.com</td> 
                                        </tr> 
                                        </tbody> 
                                        </table> 
								</section>
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
			<script type="text/javascript">
				$(document).ready(function(){
					    $('#myTable').DataTable();
					});
			</script>
            
            
            
            
            
	</body>
</html>