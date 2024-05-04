<html lang="en">
<?php include '../../templates/head.php';?>

<body>
	<div class="backgroundLayer">
		<?php include '../../templates/navbar.php';?>
		<div class="projectContent" id="content">
			
			<div class="projectTitleDiv">
				<a class="clickable" href="https://fieldsportukactivitycentre.co.uk/" target="_blank">Field Sport UK Activity Centre</a>
			</div>

			<div class="slideshow-container">

				<div class="slides fade">
					<img loading="eager" src="./imgs/projects/ActivityCentre/home.jpg" title="Air Gun Range Home Page" alt="Air Gun Range Home Page" style="width:100%">
					<div class="imgCaption">Home Page</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/ActivityCentre/activities.jpg" title="Air Gun Ranges Page" alt="Air Gun Ranges Page" style="width:100%">
					<div class="imgCaption">Activities Page</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/ActivityCentre/news.jpg" title="Air Gun About Us Page" alt="Air Gun About Us Page" style="width:100%">
					<div class="imgCaption">News Page</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/ActivityCentre/enquiry.jpg" title="Air Gun About Us Page" alt="Air Gun About Us Page" style="width:100%">
					<div class="imgCaption">Enquiry Page</div>
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
			</div>

			<script src="./js/imgSlideshow.js"></script>

			<div class="projectDescription">
				This newest website has been created as a potential upgrade to their main website <a href="https://www.fieldsportuk.co.uk/">Field Sport UK</a>. It showcases their current content such as activities and packages in a modern, clean format whilst also adding new features such as a blog and reviews
			</div>
		</div>
	</div>
</body>
</html>