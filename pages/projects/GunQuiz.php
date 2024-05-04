<html lang="en">
<?php include '../../templates/head.php';?>

<body>
	<div class="backgroundLayer">
		<?php include '../../templates/navbar.php';?>
		
		<div class="projectContent" id="content">

			<div class="projectTitleDiv">
				Personal Gun Quiz
			</div>


			<div class="slideshow-container">

				<div class="slides fade">
					<img src="./imgs/projects/GunQuiz/menu.jpg" title="Gun Quiz Home Page" alt="Gun Quiz Home Page" style="width:100%">
					<div class="imgCaption">Home Menu</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/GunQuiz/view.jpg" title="Gun Quiz View Guns Screen" alt="Gun Quiz View Guns Screen" style="width:100%">
					<div class="imgCaption">Gun View</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/GunQuiz/guess.jpg" title="Gun Quiz Guess Guns Screen" alt="Gun Quiz Guess Guns Screen" style="width:100%">
					<div class="imgCaption">Gun Quiz</div>
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
                This is one of my most recent projects and is something I did out of personal interest. This project used my proficiency in the <a href="./services/ASP">ASP.NET framework</a> to create the UI and logic for the quiz. As well as my knowledge of Python and web scraping in order to create a <a href="./projects/GunScraper">web scraping tool</a> to extract the gun names and images from the web.
			</div>
		</div>
	</div>
</body>
</html>