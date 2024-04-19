<html lang="en">
<?php include '../templates/head.php';?>

<body>
	<div class="backgroundLayer">
		<?php include '../templates/navbar.php';?>

		<div id="content">
			<div class="projectsTitleDiv">
				<h1>Projects</h1>
				<p>Shown below is the various projects I have worked on for work, college or just for fun</p>
			</div>

			<div class="projectsGrid">

				<div class="projectsDiv" onclick="window.location.href='./projects/SalesApp'">
					<div class="projectsImgDiv">
						<img src="./imgs/projects/SalesApp/home.jpg" title="Sales App" alt="Sales App Home Screen">
					</div>
					<p>Defensor Sales App Web App</p>
				</div>

				<div class="projectsDiv" onclick="window.location.href='./projects/WebsterAndHorsfall'">
					<div class="projectsImgDiv">
						<img src="./imgs/projects/WHGroup/home.jpg" title="Webster and Horsfall Group Website" alt="Webster and Horsfall Group Home Page">
					</div>
					<p>Webster and Horsfall Group Website</p>
				</div>

				<div class="projectsDiv">
					<div class="projectsImgDiv" onclick="window.location.href='./projects/CertificateCreator'">
						<img src="./imgs/projects/CertificateCreator/home.jpg" title="Certificate Creator Tool" alt="Certificate Creator Tool">
					</div>
					<p>Certificate Creator Tool</p>
				</div>

				<div class="projectsDiv">
					<div class="projectsImgDiv" onclick="window.location.href='./projects/AirgunRange'">
						<img src="./imgs/projects/AirGun/home.jpg" title="Air Gun Range Website" alt="Air Gun Range Website">
					</div>
					<p>Air Gun Range</p>
				</div>

				<div class="projectsDiv">
					<div class="projectsImgDiv" onclick="window.location.href='./projects/GunQuiz'">
						<img src="./imgs/projects/GunQuiz/guess.jpg" title="Gun Quiz Tool" alt="Gun Quiz Tool">
					</div>
					<p>Gun Quiz</p>
				</div>

				<div class="projectsDiv">
					<div class="projectsImgDiv" onclick="window.location.href='./projects/GamblingGame'">
						<img src="./imgs/projects/GamblingGame/gameplay.jpg" title="Gambling Game" alt="Gambling Game">
					</div>
					<p>Python Gambling Game</p>
				</div>

			</div>
		</div>
    </div>
</body>
</html>