<?php include '../../templates/head.php';?>

<body>
	<div class="backgroundLayer">
		<?php include '../../templates/navbar.php';?>
		<div class="projectContent" id="content">
			<div class="slideshow-container">

			<div class="slides fade">
			<img src="./imgs/projects/GamblingGame/menu.png" style="width:100%">
			<div class="imgCaption">Home Menu</div>
			</div>

			<div class="slides fade">
			<img src="./imgs/projects/GamblingGame/signIn.png" style="width:100%">
			<div class="imgCaption">Quotes View</div>
			</div>

			<div class="slides fade">
			<img src="./imgs/projects/GamblingGame/gameplay.png" style="width:100%">
			<div class="imgCaption">Quote Parts</div>
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
                This was one of my first ever Python projects, created by me as a personal passion project back in September of 2021. While it had many flaws and issues, it was also my first real coding experience and is one of the major reasons I decided to become a programmer. Working on this project greatly improved my comfort and confidence with Python and taught me how to think logically to solve problems.
			</div>
		</div>
	</div>
</body>