<?php include '../templates/head.php';?>
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

    mail("olitaylor@shadowdev.co.uk", "Enquiry from $name", $message, $header);
}
?>

<body>
	<div class="backgroundLayer">
		<?php include '../templates/navbar.php';?>

		<div id="content">
			<div class="aboutBGDiv">
                <h1 class="aboutTitle">About Me</h1>

                <div class="aboutBtnsDiv">
                    <button onclick="window.location.href='./aboutme#WorkExperience'">&#8681; Work Experience &#8681;</button>
                    <button onclick="window.location.href='./aboutme#Skills'">&#8681; Skills &#8681;</button>
                    <button onclick="window.location.href='./aboutme#Education'">&#8681; Education &#8681;</button>
                    <button onclick="window.location.href='./aboutme#Enquiry'">&#8681; Submit an Enquiry &#8681;</button>
                </div>
                <div class="aboutContentDiv">
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
                            <h5>Programming and App Development</h5>
                            <p>Burton and South Derybshire College</p>
                            <p>Ongoing/Predicted D*D*D*</p>
                        </div>

                        <div class="aboutEducationItem">
                            <h5>GCSE Computer Science</h5>
                            <p>Ashby School</p>
                            <p>Grade 7 (Equivalent to A)</p>
                        </div>
                        
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

                    </div>

                    <div class="aboutEnquiry">
                        <form method="post" id="enquiryForm">
                        <div class="enquiryForm">
                            <h2 class="enquiryTitle" id="Enquiry">Submit An Enquiry</h2>

                            <input class="enquiryInput" name="name" placeholder="Name..." required>
                            <input type="email" class="enquiryInput" name="email" placeholder="Email..." required>
                            <input class="enquiryInput" name="subject" placeholder="Subject..." required>
                            <textarea class="enquiryInput enquiryMessage" name="message" cols="50" rows="6" maxlength="500" placeholder="Message..." required></textarea>

                            <button class="enquirySubmit" type="submit">SUBMIT</button>

                            <p class="enquirySubtext">Email: <a href="mailto:olitaylor@shadowdev.co.uk">olitaylor@shadowdev.co.uk</a></p>
                            <p class="enquirySubtext">Phone Number: <a href="tel:07847322174">07847 322174</a></p>
                            
                        </div>
                        </form>
                    </div>
                </div>
			</div>
		</div>
    </div>
</body>
</html>