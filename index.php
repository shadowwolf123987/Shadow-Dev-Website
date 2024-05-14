<?php include './templates/head.php';?>

<body>
	<div class="backgroundLayer">
	
	<?php include './templates/navbar.php';?>

		<div id="content" class="homeContent">
			<div class="homeDiv">
				<img src="./imgs/icons/projectsIcon.png" title="My Projects" alt="My Projects">
				<p>Explore the various projects, I have been involved in here</p>
				<button type="button" onclick="location.href='/projects'">View my Projects here</button>
			</div>
			<div class="homeDiv">
				<img src="./imgs/icons/servicesIcon.png" title="My Services" alt="My Services">
				<p>Interested in hiring me for work?<br>Submit an enquiry here</p>
				<button type="button" onclick="location.href='/services'">View my Services</button>
			</div>
		</div>

	</div>
</body>
</html>