<?php include '../../templates/head.php';?>

<body>
	<div class="backgroundLayer">
		<?php include '../../templates/navbar.php';?>
		<div class="projectContent" id="content">
			<div class="slideshow-container">

			<div class="slides fade">
			<img src="./imgs/projects/WHGroup/home.png" style="width:100%">
			<div class="imgCaption">Home Menu</div>
			</div>

			<a class="prev" onclick="NextPage(-1)">❮</a>
			<a class="next" onclick="NextPage(1)">❯</a>

			</div>
			<br>

			<div style="text-align:center">
				<span class="dots" onclick="CurrentSlide(1)"></span>
			</div>

			<script src="./js/imgSlideshow.js"></script>
			<div class="projectDescription">
				This website was created for Webster and Horsfall during my week of work experience and during the time afterwards. It was created in <a href="./services/Wordpress">Wordpress using Elementor</a> and it showcases their subcompanies and partners
			</div>
		</div>
	</div>
</body>