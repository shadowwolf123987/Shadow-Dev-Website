<?php include '../../templates/head.php';?>

<body>
	<div class="backgroundLayer">
		<?php include '../../templates/navbar.php';?>
		<div class="projectContent" id="content">
			<div class="slideshow-container">

			<div class="slides fade">
			<img src="./imgs/projects/AirGun/home.png" style="width:100%">
			<div class="imgCaption">Home Menu</div>
			</div>

			<div class="slides fade">
			<img src="./imgs/projects/AirGun/ranges.png" style="width:100%">
			<div class="imgCaption">Ranges Page</div>
			</div>

			<div class="slides fade">
			<img src="./imgs/projects/AirGun/about.png" style="width:100%">
			<div class="imgCaption">About Page</div>
			</div>

			<a class="prev" onclick="NextPage(-1)">❮</a>
			<a class="next" onclick="NextPage(1)">❯</a>

			</div>
			<br>

			<div style="text-align:center">
				<span class="dots" onclick="CurrentSlide(1)"></span> 
				<span class="dots" onclick="CurrentSlide(2)"></span> 
				<span class="dots" onclick="CurrentSlide(3)"></span>
			</div>

			<script src="./js/imgSlideshow.js"></script>

			<div class="projectDescription">
				This is a website created for <a href="">Field Sport UK</a> in order to promote their <a href="">Air Rifle and Pistol shooting ranges</a>. This website was created purely in <a href="./services/Code">HTML,CSS and Javascript</a> due to its simplicity and flexibility
			</div>
		</div>
	</div>
</body>