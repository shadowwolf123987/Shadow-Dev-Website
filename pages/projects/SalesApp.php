<?php include '../../templates/head.php';?>

<body>
	<div class="backgroundLayer">
		<?php include '../../templates/navbar.php';?>
		<div class="projectContent" id="content">
			<div class="slideshow-container">

			<div class="slides fade">
			<img src="./imgs/projects/SalesApp/home.png" style="width:100%">
			<div class="imgCaption">Home Menu</div>
			</div>

			<div class="slides fade">
			<img src="./imgs/projects/SalesApp/quotes.png" style="width:100%">
			<div class="imgCaption">Quotes View</div>
			</div>

			<div class="slides fade">
			<img src="./imgs/projects/SalesApp/quoteParts.png" style="width:100%">
			<div class="imgCaption">Quote Parts</div>
			</div>

			<div class="slides fade">
			<img src="./imgs/projects/SalesApp/parts.png" style="width:100%">
			<div class="imgCaption">Database Parts List</div>
			</div>

			<div class="slides fade">
			<img src="./imgs/projects/SalesApp/exportedQuote.png" style="width:100%">
			<div class="imgCaption">Exported Word Quote</div>
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
				I created this project for Defensor Life Safety over the course of 3 months. Since then, I have expanded it and completed multiple other projects for the company. The project uses <a href="./services/ASP">ASP.NET to automatically generate quotes in various formats based on details entered and parts selected from a backend SQL database. As my first ASP.NET project, it bolstered my confidence with the framework and I am very proud of the result.
			</div>
		</div>
	</div>
</body>