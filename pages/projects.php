<?php include '../templates/head.php';?>

<body>
	<div class="backgroundLayer">
		<?php include '../templates/navbar.php';?>

		<div id="content">
			<div class="projectsTitleDiv">
				<h1>Projects</h1>
				<p>Shown below is the various projects I have worked on for work, college or just for fun projects</p>
			</div>

			<div class="projectsGrid">

				<div class="projectsDiv" onclick="window.location.href='./projects/SalesApp'">
					<div class="projectsImgDiv">
						<img src="./imgs/projects/SalesApp/home.png">
					</div>
					<p>This is an ASP.NET Quote Creation tool custom made for Defensor Life Safety Systems</p>
				</div>

				<div class="projectsDiv" onclick="window.location.href='./projects/WebsterAndHorsfall'">
					<div class="projectsImgDiv">
						<img src="./imgs/projects/WHGroup/home.png">
					</div>
					<p>Webster and Horsfall Group Website</p>
				</div>

				<div class="projectsDiv">
					<div class="projectsImgDiv" onclick="window.location.href='./projects/CertificateCreator'">
						<img src="./imgs/projects/CertificateCreator/home.png">
					</div>
					<p>Certificate Creator Tool</p>
				</div>

				<div class="projectsDiv">
					<div class="projectsImgDiv" onclick="window.location.href='./projects/AirgunRange'">
						<img src="./imgs/projects/AirGun/home.png">
					</div>
					<p>Air Gun Range</p>
				</div>

				<div class="projectsDiv">
					<div class="projectsImgDiv" onclick="window.location.href='./projects/GunQuiz'">
						<img src="./imgs/projects/GunQuiz/guess.png">
					</div>
					<p>Gun Quiz</p>
				</div>

				<div class="projectsDiv">
					<div class="projectsImgDiv" onclick="window.location.href='./projects/GamblingGame'">
						<img src="./imgs/projects/GamblingGame/gameplay.png">
					</div>
					<p>Python Gambling Game</p>
				</div>

			</div>
		</div>
    </div>
</body>