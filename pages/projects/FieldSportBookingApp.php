<?php include '../../templates/head.php';?>

<body>
	<div class="backgroundLayer">
		<?php include '../../templates/navbar.php';?>
		<div class="projectContent" id="content">

			<div class="projectTitleDiv">
				<a class="clickable" href="https://booking.airgunrange.co.uk/" target="_blank">Field Sport UK Air Gun Range Booking Website</a>
			</div>

			<div class="slideshow-container">

				<div class="slides fade">
					<img loading="eager" src="./imgs/projects/FsBookingApp/home.jpg" title="Booking App Home Page" alt="Booking App Home Page" style="width:100%">
					<div class="imgCaption">Home Menu</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/FsBookingApp/range.jpg" title="Booking App Select Date Page" alt="Booking App Select Date Page" style="width:100%">
					<div class="imgCaption">Select Date</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/FsBookingApp/details.jpg" title="Booking App Confirm Details Page" alt="Booking App Confirm Details Page" style="width:100%">
					<div class="imgCaption">Confirm Details</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/FsBookingApp/thanks.jpg" title="Booking App Thanks for Booking Page" alt="Booking App Thanks for Booking Page" style="width:100%">
					<div class="imgCaption">Thanks for Booking</div>
				</div>

				<div class="slides fade">
					<img src="./imgs/projects/FsBookingApp/confirmationEmail.jpg" title="Booking App Confirmation Email" alt="Booking App Confirmation Email" style="width:100%">
					<div class="imgCaption">Confirmation Email</div>
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
				This is a <a href="./services/ASP">.NET web app</a> made for Field Sport UK for their new Air Gun Range, this system will allow users to book a range for their chosen date and time, view the available spaces for that particular range at the chosen date and time and receive an email notifying them of their booking
			</div>
		</div>
	</div>
</body>
</html>