<?php include '../templates/head.php';?>

<body>
	<div class="backgroundLayer">
		<?php include '../templates/navbar.php';?>

		<div id="content">
			<div class="servicesTitleDiv">
				<h1>Services I offer</h1>
				<p>Shown below are the details of the various services that I provide and if you are interested, you can send an enquiry email</p>
			</div>

			<div class="servicesGrid">

				<div class="servicesDiv" onclick="window.location.href='./services/Code'">
					<div class="servicesImgDiv">
						<img src="./imgs/icons/htmlIcon.png" title="HTML Website Creation" alt="HTML Icon">
					</div>
					<p>Code-based Website Creation</p>
				</div>

				<div class="servicesDiv" onclick="window.location.href='./services/ASP'">
					<div class="servicesImgDiv">
						<img src="./imgs/icons/aspIcon.png" title="ASP.NET Website Creation" alt="ASP.NET Icon">
					</div>
					<p>ASP.NET Web App Creation</p>
				</div>

				<div class="servicesDiv" onclick="window.location.href='./services/Wordpress'">
					<div class="servicesImgDiv">
						<img src="./imgs/icons/wordpressIcon.png" title="WordPress Website Creation" alt="Wordpress Icon">
					</div>
					<p>Wordpress Website Creation</p>
				</div>

			</div>
		</div>
    </div>
</body>
</html>