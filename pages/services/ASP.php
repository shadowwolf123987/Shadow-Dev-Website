<html lang="en">
<?php include '../../templates/head.php';?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;	

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $details = isset($_POST['message']) ? $_POST['message'] : '';

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
				Recently, I've been using a tool called ASP.NET Framework quite a bit for my projects, both for fun and for work. It's really useful when you want a website to show or change information in a database. Typically, I use it to allow people to input information, and then I can convert that information into documents like Word files, Excel spreadsheets, or PDFs.
            </div>
			
			<div class="serviceRow">
				<div>
					<ul class="serviceProjectsMenu">
						<li class="serviceMenuFirstItem"><a href="./projects/SalesApp">Sales App</a></li>
						<li><a href="./projects/CertificateCreator">Certificate Creator</a></li>
						<li class="serviceMenuLastItem"><a href="./projects/GunQuiz">Gun Quiz</a></li>
					</ul>
				</div>
				<?php include '../../templates/enquiryForm.php';?>
			</div>
		</div>
	</div>
</body>
</html>