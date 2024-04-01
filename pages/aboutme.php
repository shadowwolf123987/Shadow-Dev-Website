<html lang="en">
<?php include '../templates/head.php';?>
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

    $message  = '<p>Name: '.$name.'</p><br>';
    $message .= '<p>Email: '.$email.'</p><br><br>';

    $message .= '<p>Subject: '.$subject.'</p><br><br>';
    $message .= '<h2>Details:</h2><br><p>'.$details.'</p>';

    mail("olitaylor@shadowdev.co.uk", "Code Enquiry from '.$name.'", $message, $header);
}
?>

<!--

Title Y

Short Desc about me as a developer Y

Description of my journey as a developer Y

Work Experience (two column layout) Y

Skills (variable column layout)/ Experienced in Windows

Education (Singular column layout) Y

Enquiry Form

-->

<body>
	<div class="backgroundLayer">
		<?php include '../templates/navbar.php';?>

		<div id="content">
			<div class="aboutBGDiv">
                <div class="aboutContentDiv">
                    <h1 class="aboutTitle">About Me</h1>
                    <h3 class="aboutDevDesc">Experienced Web Developer who has worked on a multitude of varied projects from bespoke wordpress websites to ASP.NET web apps</h3>
                    <p class="aboutJourney">My journey as a developer began in Secondary school with small, basic python projects during Computer Science lessons which then motivated me to pursue programming outside of school.<br><br>Then after a couple of years, I switched my sights from python to web development where my confidence in the languages grew and I started to use other systems like Wordpress and the .NET framework.</p>

                    <h2 class="aboutSubtitle" id="WorkExperience">Work Experience</h2>
                    <div class="aboutWorkExpDiv">
                        
                        <div class="aboutWorkExpItem">
                            <h5>Freelance .NET Developer</h5>
                            <a href="https://defensorlifesafety.com/" target="_blank">Defensor Life Safety</a>
                            <p>Sep 2021 - Present</p>   
                        </div>

                        <div class="aboutWorkExpItem">
                            <h5>Freelance .NET Developer</h5>
                            <a href="https://vigilant-ls.com/" target="_blank">Vigilant Life Safety</a>
                            <p>Oct 2023 - Present</p>
                        </div>

                        <div class="aboutWorkExpItem">
                            <h5>Part Time Web Developer</h5>
                            <a href="https://www.fieldsportuk.co.uk/" target="_blank">Field Sport UK</a>
                            <p>Sep 2023 - Present</p>
                        </div>

                    </div>

                    <h2 class="aboutSubtitle" id="Skills">Skills</h2>
                    <div class="aboutSkillsDiv">
                        
                        <div class="aboutSkillsItem">
                            <h5>Programming Languages</h5>
                            <p>C#</p>
                            <p>HTML</p>
                            <p>CSS</p>
                            <p>Javascript</p>
                            <p>SQL</p>
                        </div>

                        <div class="aboutSkillsItem">
                            <h5>Soft Skills</h5>
                            <p>Adapting to Client Requirements</p>
                            <p>Problem Solving</p>
                            <p>Diagnostic Skills</p>
                            <p>Passion to Learn</p>
                            <p></p>
                        </div>

                    </div>

                    <h2 class="aboutSubtitle" id="Education">Education</h2>
                    <div class="aboutEducationDiv">
                        
                        <div class="aboutEducationItem">
                            <h5>GCSE English</h5>
                            <p>Ashby School</p>
                            <p>Grade 4 (Equivalent to C)</p>
                        </div>

                        <div class="aboutEducationItem">
                            <h5>GCSE Maths</h5>
                            <p>Ashby School</p>
                            <p>Grade 6 (Equivalent to B)</p>
                        </div>

                        <div class="aboutEducationItem">
                            <h5>GCSE Computer Science</h5>
                            <p>Ashby School</p>
                            <p>Grade 7 (Equivalent to A)</p>
                        </div>

                        <div class="aboutEducationItem">
                            <h5>Programming and App Development</h5>
                            <p>Burton and South Derybshire College</p>
                            <p>Ongoing/Predicted D*D*D*</p>
                        </div>

                    </div>

                    <?php include '../templates/enquiryForm.php';?>

                </div>
			</div>
		</div>
    </div>
</body>
</html>