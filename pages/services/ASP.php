<html lang="en">
<?php include '../../templates/head.php';?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;	

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if (preg_match('/^[\p{L}\p{N}@ .,£$%&#!?]+$/u', $_POST['name'])) {
        $name = $_POST['name'];
    } else {
        echo "Name: Special Characters are not Allowed";
    }

    if (preg_match('/^[\p{L}\p{N}@ .,£$%&#!?]+$/u', $_POST['email'])) {
        $email = $_POST['email'];
    } else {
        echo "Email: Special Characters are not Allowed";
    }

    if (preg_match('/^[\p{L}\p{N}@ .,£$%&#!?]+$/u', $_POST['subject'])) {
        $subject = $_POST['subject'];
    } else {
        echo "Subject: Special Characters are not Allowed";
    }

    if (preg_match('/^[\p{L}\p{N}@ .,£$%&#!?]+$/u', $_POST['message'])) {
        $details = $_POST['message'];
    } else {
        echo "Details: Special Characters are not Allowed";
    }

    $header = "From: ".$name." <".$email.">\r\n";
    $header.= "MIME-Version: 1.0\r\n";
    $header.= "Content-Type: text/html; charset=utf-8\r\n";
    $header.= "X-Priority: 1\r\n";

    $message  = '<p>Name: '.$name.'</p>';
    $message .= '<p>Email: '.$email.'</p>';
    $message .= '<p>Subject: '.$subject.'</p><br>';

    $message .= '<h2>Details:</h2><p>'.$details.'</p>';

    mail("olitaylor@shadowdev.co.uk", "ASP Enquiry from $name", $message, $header);
}
?>

<body>
	<div class="backgroundLayer">
		<?php include '../../templates/navbar.php';?>
		<div class="serviceContent" id="content">
			<h1 class="serviceTitle">ASP.NET Website Creation</h1>
			<div class="serviceDescription">
				Typically, if a client wishes for a website that requires some slightly more advanced features than the usual website then I like to use the ASP.NET MVC Core Framework. It's really useful when you want a website to show or change information in a database. Typically, I use it to allow people to input information, and then I can convert that information into documents like Word files, Excel spreadsheets, or PDFs. I can also use it to send emails, create a login system, book dates and all sorts of other features
            </div>
			
			<div class="serviceRow">
				<div>
					<ul class="serviceProjectsMenu">
                        <li><a href="./projects/FieldSportBookingApp">FSUK Booking App</a></li>
						<li><a href="./projects/SalesApp">Sales App</a></li>
						<li><a href="./projects/CertificateCreator">Certificate Creator</a></li>
						<li class="serviceProjectsLastItem"><a href="./projects/GunQuiz">Gun Quiz</a></li>
					</ul>
				</div>
				<?php include '../../templates/enquiryForm.php';?>
			</div>
		</div>
	</div>
</body>
</html>