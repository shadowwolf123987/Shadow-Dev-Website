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

    mail("olitaylor@shadowdev.co.uk", "Wordpress Enquiry from $name", $message, $header);
}
?>

<body>
	<div class="backgroundLayer">
		<?php include '../../templates/navbar.php';?>
		<div class="serviceContent" id="content">
			<h1 class="serviceTitle">Wordpress Website Creation</h1>
			<div class="serviceDescription">
				Wordpress is one of my favourite ways to create a website due to its simplicity and its ability to setup a great website in a incredibly short amount of time. Moreover by using a plugin called Elementor, the default editor is drastically improved and allows for drag and drop design. This means that users can easily make basic edits to the website without even needing to consult with a developer
            </div>
			
			<div class="serviceRow">
				<div>
					<ul class="serviceProjectsMenu">
						<li class="serviceMenuFirstItem"><a href="./projects/WebsterAndHorsfall">Webster and Horsfall Group Website</a></li>
						<li class="serviceMenuLastItem"><a href="./projects/ActivityCentre" target="_blank">Field Sport Activity Centre</a></li>
					</ul>
				</div>
				<?php include '../../templates/enquiryForm.php';?>
			</div>
		</div>
	</div>
</body>
</html>