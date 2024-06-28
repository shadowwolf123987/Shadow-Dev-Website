<?php include '../../templates/head.php';?>

<body>
	<div class="backgroundLayer">
		<?php include '../../templates/navbar.php';?>
		<div class="projectContent" id="content">

			<div class="projectTitleDiv">
				<a class="clickable" href="https://github.com/shadowwolf123987/UPDATED-Gun-Web-Scraping-Tool" target="_blank">Gun Web Scraper Tool</a>
			</div>

			<div class="slideshow-container">
				
				<div class="slides fade">
					<img loading="eager" src="./imgs/projects/GunScraper/query.jpg" title="Gun Scraper Table View" alt="Gun Scraper Table View" style="width:100%">
					<div class="imgCaption">All Guns</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/GunScraper/output.jpg" title="Gun Scraper Output View" alt="Gun Scraper Output View" style="width:100%">
					<div class="imgCaption">Console Queries</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/GunScraper/logs.jpg" title="Gun Scraper Logs View" alt="Gun Scraper Logs View" style="width:100%">
					<div class="imgCaption">Logs File</div>
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
            	This is a tool I created for my <a href="./projects/GunQuiz">Gun Quiz Project</a> in order to scrape the names and images of guns from Wikipedia for use in the project. I recently upgraded this tool massively and set it up on a Raspberry Pi. It now scrapes the name and image links from their respective wiki pages, removes guns from certain countries (In order to avoid confusing variants), then updates the db tables with the scraped data or creates them if none are found and logs the process as well as any errors. This runs automatically every day at 12PM on my Raspberry PI with no human input. This ensures that it is always up to date and that no invalid guns are in the database. The full source code is available via my GitHub Repo which is linked in the title above
			</div>
		</div>
	</div>
</body>
</html>