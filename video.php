<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Avtod.NET | Video player</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		
		<!-- JS ZA VIDEO -->
    	<script type="text/javascript" src="assets/js/jquery.js"></script>
	    <script type="text/javascript" src="botr/upload.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
  
	</head>
	<body class="right-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
			
			<?php
				include 'header.php'
				
			?>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Video Player</div>
					<div id="main" class="container_2">
						<div class="row 100%">
							<div class="8u 12u(mobile)">

								<!-- Content -->
									<div id="content">
											<header class="style1">
												<h2>Video</h2>
											</header>
<?php
if (isset($_REQUEST['upload']))
{
$name=$_FILES['uploadvideo']['name'];
 $type=$_FILES['uploadvideo']['type'];
//$size=$_FILES['uploadvideo']['size'];
$cname=str_replace(" ","_",$name);
$tmp_name=$_FILES['uploadvideo']['tmp_name'];
$target_path="video/";
$target_path=$target_path.basename($cname);
if(move_uploaded_file($_FILES['uploadvideo']['tmp_name'],$target_path))
{
echo $sql="INSERT INTO tbl_video(name,type) VALUE('".$cname."','".$type."')"; 
$result=mysql_query($sql);
echo "Your video ".$cname." has been successfully uploaded";
}
}
?>
<form name="video" enctype="multipart/form-data" method="post" action="">
<input name="MAX_FILE_SIZE" value="100000000000000"  type="hidden"/>
<input type="file" name="uploadvideo" />
<input type="submit" name="upload" value="SUBMIT" />
</form>


			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

									</div>
								</div>
							</div>
						</div>
					</div>
	</body>
</html>