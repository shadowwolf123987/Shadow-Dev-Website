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

    mail("olitaylor@shadowdev.co.uk", "Code Enquiry from $name", $message, $header);
}
?>

<body>
	<div class="backgroundLayer">
		<?php include '../../templates/navbar.php';?>
		<div class="serviceContent" id="content">
			<h1 class="serviceTitle">Code-Based Website Creation</h1>
			<div class="serviceDescription">
				This is not a method I would often use when creating a website as it is much slower than using a Wordpress template and it means clients will struggle to make changes themselves but it is unrivalled when it comes to customisability and is not inferior in terms of design to any website builder. Moreover, I built this entire website with pure code which can be viewed in <a href="https://github.com/shadowwolf123987/Shadow-Dev-Website" target="_blank">my GitHub Repository</a>
            </div>
			
			<div class="serviceRow">
				<div>
					<ul class="serviceProjectsMenu">
						<li class="serviceMenuFirstItem"><a href="./projects/SalesApp">Air Gun Range</a></li>
					</ul>
				</div>
				<?php include '../../templates/enquiryForm.php';?>
			</div>
		</div>
	</div>
</body>
</html>