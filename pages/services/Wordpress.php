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
						<li class="serviceMenuLastItem"><a href="https://fieldsportukactivitycentre.co.uk/" target="_blank">Field Sport Activity Centre</a></li>
					</ul>
				</div>
				<?php include '../../templates/enquiryForm.php';?>
			</div>
		</div>
	</div>
</body>
</html>