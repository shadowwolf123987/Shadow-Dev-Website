<?php include '../../templates/head.php';?>

<body>
	<div class="backgroundLayer">
		<?php include '../../templates/navbar.php';?>
		<div class="projectContent" id="content">

		<div class="projectTitleDiv">
				Webster and Horsfall Group
			</div>

			<div class="slideshow-container">

				<div class="slides fade">
					<img loading="eager" src="./imgs/projects/WHGroup/home.jpg" title="Webster and Horsfall Group Home Page" alt="Webster and Horsfall Group Home Page" style="width:100%">
					<div class="imgCaption">Home Menu</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/WHGroup/gallery.jpg" title="Webster and Horsfall Group Home Page" alt="Webster and Horsfall Group Home Page" style="width:100%">
					<div class="imgCaption">Gallery</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/WHGroup/news.jpg" title="Webster and Horsfall Group Home Page" alt="Webster and Horsfall Group Home Page" style="width:100%">
					<div class="imgCaption">News</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/WHGroup/contact.jpg" title="Webster and Horsfall Group Home Page" alt="Webster and Horsfall Group Home Page" style="width:100%">
					<div class="imgCaption">Contact Us</div>
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
				This website was created for Webster and Horsfall during my week of work experience and during the time afterwards. It was created in <a href="./services/Wordpress">Wordpress using Elementor</a> and it is used to showcase their subcompanies and partners. This website also displays their history and an amazing gallery of their paintings and media.
			</div>
		</div>
	</div>
</body>
</html>