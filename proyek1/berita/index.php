<html>
	<head>
		
		<title>AKN KAJEN MENJADI PILIHAN CERDAS!</title>
		<link rel="icon" href="logo.ico" type="image/x-icon">
		
		<!-- Bootstrap -->
    	<link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
    	<link href="./css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    	<link href="./css/bootswatch.css" rel="stylesheet" media="screen">
    	<script type="text/javascript">
    		function printValue(sliderID, textbox) {
            var x = document.getElementById(textbox);
            var y = document.getElementById(sliderID);
            x.value = y.value;
        }
    	</script>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="brand" href="index.php">Berita AKN Kajen</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li><a class="brand" style="margin-left:85px;">Menjadi Pilihan Cerdas!</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	    <div class="container-fluid">
			<div class="row-fluid">
				<div class="span3">
					<?php include("menuBerita.php");?>
                </div><!--/span-->
                <div class="span9">
                	<!--letak konten-->
                    <?php
						if(empty($_GET['link']))
                    		include "lihatBerita.php";
						else
							include($_GET['link']);						
					?>
				</div><!--/span-->
			</div><!--/row-->
			<hr>
			<footer>
			<p>AKN Kajen (2017) &copy; PDD POLBAN</p>
			</footer>
	    </div><!--/.fluid-container-->
	    <script src="./js/latest.js"></script>
	    <script src="./js/bootstrap.min.js"></script>
	</body>
</html>