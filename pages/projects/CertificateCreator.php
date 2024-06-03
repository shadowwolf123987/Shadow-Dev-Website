<?php include '../../templates/head.php';?>

<body>
	<div class="backgroundLayer">
		<?php include '../../templates/navbar.php';?>
		<div class="projectContent" id="content">

			<div class="projectTitleDiv">
				Vigilant Certificate Creator Web App
			</div>


			<div class="slideshow-container">

				<div class="slides fade">
					<img loading="eager" src="./imgs/projects/CertificateCreator/home.jpg" title="Certificate Creator Home Page" alt="Certificate Creator Home Page" style="width:100%">
					<div class="imgCaption">Home Menu</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/CertificateCreator/projects.jpg" title="Certificate Creator Projects Page" alt="Certificate Creator Projects Page" style="width:100%">
					<div class="imgCaption">Projects Page</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/CertificateCreator/settings.jpg" title="Certificate Creator Settings Page" alt="Certificate Creator Settings Page" style="width:100%">
					<div class="imgCaption">Global Info Settings</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/CertificateCreator/export.jpg" title="Certificate Creator Export Page" alt="Certificate Creator Export Page" style="width:100%">
					<div class="imgCaption">Export Project Page</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/CertificateCreator/designCert.jpg" title="Certificate Creator Exported Certificate" alt="Certificate Creator Exported Design Certificate" style="width:100%">
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
				This is an <a href="./services/ASP">ASP.NET Web App</a> designed to automatically create PDF documents based on a template. It is currently being used to create certificates for Fire Security
			</div>
		</div>
	</div>
</body>
</html>