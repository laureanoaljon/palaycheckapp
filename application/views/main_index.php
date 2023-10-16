<!DOCTYPE html>
<html lang="en">
  	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link rel="icon" href="<?php echo base_url(); ?>assets/PalayCheckApp.png" type="image/x-icon">

		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<!-- Material ui icons - google web fonts -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
		
		<!-- FA icon -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome-4.7.0/css/font-awesome.min.css">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">


    <title>PalayCheck App</title>
	</head>
	<body>
		<div class="main">
			<div class="main-body">
				<!-- Header -->
				<!-- <div id="rectangle"></div>		 -->
				<div id="group1">
					<div class="row">
						<div class="col-md-1">
						</div>
						<div class="col-md-6 d-flex justify-content-center" id="check-ang-pagpapalay-div">
							<img id="check-ang-pagpapalay" src="<?php echo base_url(); ?>assets/CheckAngPagpapalay.png" alt="Image">	
						</div>

						<div class="col-md-5 px-5 d-flex justify-content-left" id="palay-check-app-div">
							<img id="palay-check-app" src="<?php echo base_url(); ?>assets/PalayCheckApp.png" alt="Image">	
						</div>
					</div>
					<div class="row d-flex justify-content-center px-4">
						<div class="col-md-12 text-center" id="download-div">
							<a id="download-btn" href="<?php echo base_url('apk/palaycheckapp.apk'); ?>" class="btn btn-warning btn-lg text-center rounded rounded-pill" role="button" aria-disabled="true">
								<b>I-DOWNLOAD ANG APP</b>
							</a>	
						</div>
					</div>
					<br><br><br><br><br><br><br><br>
				</div>

				<div id="group2">
					<br><br><br><br><br><br><br><br><br><br>
					<div class="row d-flex justify-content-center mt-5">
						<div class="col-12 px-3 d-flex justify-content-center video-container">
							<video controls autoplay loop>
								<source src="<?php echo base_url(); ?>assets/video.mp4" type="video/mp4">
								Your browser does not support the video tag.
							</video>
						</div>
					</div>

					<div class="row mt-5 mb-1 d-flex justify-content-center">
						<div class="col-md-4 text-center text-white" id="ano-ang-pca">
							<h1><b>Ano ang PalayCheck App?</b></h1>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-md-12 text-center text-white" id="ang-pca">
							<p>Ang <b>PalayCheck App</b> ay isang farm managment smartphone app<br>na naka-ayon sa PalayCheck system</p>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-4">
							<div class="row">
								<div class="col-md-12 d-flex justify-content-center px-5 zoom">
									<img id="pic1" src="<?php echo base_url(); ?>assets/Picture1.png" alt="Picture Logo">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 d-flex justify-content-center px-5 text-center orange-par">
									<h4><b>Mayroon itong cropping calendar mula paghahanda ng lupa, pagtatanim hanggang pag-aani.</b></h4>
								</div>
							</div>
							<div class="row">	
								<div class="col-md-12 d-flex justify-content-start px-5 text-center text-white be-ora">
									<p>Gumagawa ito ng iskedyul ng mga gawain base sa utatanim mong barayti ng palat at paraan ng pagtatanim nang makasigurong tama ang iyong pamamahala.</p>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="row">	
								<div class="col-md-12 d-flex justify-content-center px-5 zoom"">
									<img id="pic2" src="<?php echo base_url(); ?>assets/Picture2.png" alt="Picture Logo">
								</div>
							</div>	
							<div class="row">
								<div class="col-md-12 d-flex justify-content-center px-5 text-center orange-par">
									<h4><b>Makakatanggap ka ng mga gabay sa pamamahala ng iyong tanim na angkop sa edad nito.</b></h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 d-flex justify-content-center px-5 text-center text-white be-ora">
									<p>Ito ay mga paalala ng mga kailangan mong gawin at bantayan sa iyong palayan patungkol sa peste, sakit, aptubig, at pag-aabono.</p>
								</div>
							</div>
						</div>
						<div class="col-4">	
							<div class="row">	
								<div class="col-md-12 d-flex justify-content-center px-5 zoom"">
									<img id="pic3" src="<?php echo base_url(); ?>assets/Picture3.png" alt="Picture Logo">
								</div>
							</div>
							<div class="row">	
								<div class="col-md-12 d-flex justify-content-center px-5 text-center orange-par">
									<h4><b>Masinop mong maire-record ang gastos ng bawat gawain sa iyong palayan.</b></h4>
								</div>
							</div>
							<div class="row">	
								<div class="col-md-12 d-flex justify-content-center px-5 text-center text-white be-ora">
									<p>Ilagay ang kaukulang impormasyon ng mga gastusin at ng iyong kabuuang benta, at ibibigay ng app ang iyong kabuuang gastos at netong kita para sa buong cropping season.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row mt-1 mb-1 d-flex justify-content-center">
						<div class="col-md-4 text-center text-white" id="paano-pca">
							<h1><b>Paano gamitin ang PalayCheck App?</b></h1>
						</div>
					</div>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				</div>

				<div id="group3">
					<div class="row">
						<div class="col-md-12">
							<img id="magplano" src="<?php echo base_url(); ?>assets/PalayCheck brochure A4 (inside).png" alt="Picture Logo">
						</div>
					</div>
				</div>
			</div>

			<footer class="text-center text-lg-start text-muted text-white footer" style="background-color: #003235; height: auto;">
				<section>
					<div class="container text-center text-md-start">
						<div class="row px-5">
							<div class="col-md-12 mt-5">
								<img class="d-block w-100" src="<?php echo base_url(); ?>assets/Footer.png" alt="logo" id="img-footer">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12 text-white mt-2 text-center">
								<p style="font-size: 13px;">&copy; 2023 All rights reserved</p> 
							</div>
						</div>
					</div>
				</section>
			</footer>

			<!-- The Modal -->
			<div id="myModal" class="modal">

			<!-- The Close Button -->
			<span class="close">&times;</span>

			<!-- Modal Content (The Image) -->
			<img class="modal-content" id="img01">

			<!-- Modal Caption (Image Text) -->
			<div id="caption"></div>
			</div>
		</div>
		
  	</body>
</html>
