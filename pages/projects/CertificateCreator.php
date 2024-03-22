<?php include '../../templates/head.php';?>

<body>
	<div class="backgroundLayer">
		<?php include '../../templates/navbar.php';?>
		<div class="projectContent" id="content">
			<div class="slideshow-container">

			<div class="slides fade">
			<img src="./imgs/projects/CertificateCreator/home.png" style="width:100%">
			<div class="imgCaption">Home Menu</div>
			</div>

			<div class="slides fade">
			<img src="./imgs/projects/CertificateCreator/projects.png" style="width:100%">
			<div class="imgCaption">Projects Page</div>
			</div>

			<div class="slides fade">
			<img src="./imgs/projects/CertificateCreator/settings.png" style="width:100%">
			<div class="imgCaption">Global Info Settings</div>
			</div>

			<div class="slides fade">
			<img src="./imgs/projects/CertificateCreator/export.png" style="width:100%">
			<div class="imgCaption">Export Project Page</div>
			</div>

			<div class="slides fade">
			<img src="./imgs/projects/CertificateCreator/designCert.png" style="width:100%">
			<div class="imgCaption">Exported Design Certificate</div>
			</div>

			<a class="prev" onclick="NextPage(-1)">❮</a>
			<a class="next" onclick="NextPage(1)">❯</a>

			</div>
			<br>

			<div style="text-align:center">
				<span class="dots" onclick="CurrentSlide(1)"></span> 
				<span class="dots" onclick="CurrentSlide(2)"></span> 
				<span class="dots" onclick="CurrentSlide(3)"></span>
				<span class="dots" onclick="CurrentSlide(4)"></span> 
				<span class="dots" onclick="CurrentSlide(5)"></span> 
			</div>

			<script src="./js/imgSlideshow.js"></script>

			<div class="projectDescription">
				This is a <a href="./services/ASP">ASP.NET Web App</a> designed to automatically create PDF documents based on a template. It is currently being used to create certificates for Fire Security
			</div>
		</div>
	</div>
</body>