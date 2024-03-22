<?php include '../../templates/head.php';?>

<body>
	<div class="backgroundLayer">
		<?php include '../../templates/navbar.php';?>
		<div class="projectContent" id="content">
			<div class="slideshow-container">

			<div class="slides fade">
			<img src="./imgs/projects/GunScraper/table.png" style="width:100%">
			<div class="imgCaption">Created Table</div>
			</div>

			<div class="slides fade">
			<img src="./imgs/projects/GunScraper/query.png" style="width:100%">
			<div class="imgCaption">Exported Query</div>
			</div>

			<div class="slides fade">
			<img src="./imgs/projects/GunScraper/code.png" style="width:100%">
			<div class="imgCaption">Web Scraper Code</div>
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
            	This is a tool I created for my <a href="./projects/GunQuiz">Gun Quiz Project</a> in order to scrape the names and images of guns from wikipedia for use in my project. This tool saved me hours of tedious work and enabled me to build a massive database of various guns with minimal time. It was created using Python and Beautiful Soup
			</div>
		</div>
	</div>
</body>