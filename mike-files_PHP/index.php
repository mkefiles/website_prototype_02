<!-- Include the Site Information File -->
<?php require __DIR__ . '/components/_site_info.php'; ?>

<!-- Main Website Code -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Mike Files is an eLearning designer and developer based in Maine. He specializes in creating impactful and creative training solutions to fit your needs.">
	<meta name="keywords" content="Instructional Design, Instructional Designer, Articulate Storyline, Articulate 360, Storyline, Captivate, eLearning, eLearning Developer, JavaScript, HTML, Learning Experience, Learning Experience Designer, SnagIt, Adobe Captivate, Adobe, PowerPoint, Microsoft PowerPoint, Training, Development, ADDIE, SAM, Blooms Taxonomy, Kirkpatrick Model, Kirkpatrick, Gagne, Learn, Education, Educate, LMS, SCORM, xAPI">
	<meta name="author" content="Mike Files">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo $siteName; ?>Portfolio</title>
	<!-- CSS Sheet -->
	<link rel="stylesheet" href="static/css/styles.css">
	<!-- Favicon Data -->
	<link rel="apple-touch-icon" sizes="180x180" href="static/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="static/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="static/favicon/favicon-16x16.png">
	<link rel="manifest" href="static/favicon/site.webmanifest">
	<link rel="mask-icon" href="static/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">	
</head>
<body>
	<!-- Section: Email Modal -->
	<?php

	$file = "emailErrorLog.txt";

	// Check if form submitted
	if(isset($_POST['submit'])){
		// If submitted...

		// Get form data
		$name = $_POST['name'];
		$subject = "Website Contact Form";
		$mailFrom = $_POST['email'];
		$message = $_POST['message'];

		// Set required email content
		$mailTo = "mike@mike-files.com";
		$headers = "From: " . $mailFrom;
		$txt = "You have received an e-mail from " . $name . ".\n\n" . $message;

		// Complete 'mail()' function
		$success = mail($mailTo, $subject, $txt, $headers);

		// If message-send fails
		if(!$success){
			// Get 'mail' error message
			$errorMessage = error_get_last()['message'];

			// Append error message to log file in root
			$handle = fopen($file, 'a');
			fwrite($handle, $errorMessage);
			fclose($handle);
			
			// Redirect page
			header("Location: /");
		}else{
			// Redirect page
			header("Location: /");
		}
	}

	?>
	<section id="modal" class="modal">
		<div class="modal__container">
			<div class="modal__content">
				<span class="close">&times;</span>
				<form action="/" method="POST">
					<div class="form__element">
						<label for="name">Your Name</label>
						<input type="text" id="name" name="name" placeholder="Full Name" pattern=[A-Z\sa-z]{3,20} required>
					</div>
					<div class="form__element">
						<label for="email">Your E-mail</label>
						<input type="email" id="email" name="email" placeholder="Email Address" required>
					</div>
					<div class="form__element">
						<label for="message">Write your message</label>
						<textarea id="message" name="message" placeholder="Type message here..." required></textarea>
					</div>
					<button type="submit" class="btn btn--green" name="submit">SEND MESSAGE</button>					
				</form>
			</div>
		</div>
	</section>

	<?php require __DIR__ . '/components/nav.php'; ?>

	<!-- Section: Header -->
	<section class="intro">
		<header>
			<div class="intro__message">
				<h1>Learning Experience Designer</h1>
				<p>Taking eLearning Trainings from Concept to Reality</p>
			</div>
		</header>
	</section>

	<!-- Section: Jumbotron -->
	<section class="jumbotron">
		<header>
			<div class="jumbotron__floor">
				<img src="static/img/eLearning.svg" class="floor__image">
			</div>		
		</header>
	</section>

	<!-- Section: Call To Action -->
	<section class="cta">
		<aside>
			<div class="cta__buttons">
				<button id="modal_btn" class="btn btn--green">EMAIL ME</button>
				<a href="tel:2075009076" class="btn btn--white">CALL ME</a>
			</div>		
		</aside>
	</section>

	<!-- Section: Main / Page Content -->
	<section class="main">
		<main>
			<div class="skills">
				<div class="skills__title">
					<h2>Skills</h2>
				</div>
				<div class="skills__section">
					<!-- Skill Category -->
					<div class="skills__card">
						<div class="skills__head">
							<h3>eLearning</h3>
						</div>
						<div class="skills__list">
							<ul>
								<li>Articulate 360</li>
								<li>Microsoft PowerPoint</li>
								<li>WalkMe</li>
								<li>Lumi (H5P)</li>
							</ul>
						</div>						
					</div>
					<!-- Skill Category -->
					<div class="skills__card">
						<div class="skills__head">
							<h3>Media</h3>
						</div>
						<div class="skills__list">
							<ul>
								<li>Photoshop</li>
								<li>Illustrator</li>
								<li>Premiere</li>
								<li>Final Cut Pro X</li>
								<li>After Effects</li>
								<li>Motion</li>
							</ul>
						</div>						
					</div>
					<!-- Skill Category -->
					<div class="skills__card">
						<div class="skills__head">
							<h3>Web Development</h3>
						</div>
						<div class="skills__list">
							<ul>
								<li>HTML</li>
								<li>CSS</li>
								<li>JavaScript</li>
								<li>jQuery</li>
								<li>PHP</li>
								<li>Webflow</li>
							</ul>
						</div>						
					</div>
				</div>
			</div>
			<hr>
			<div class="portfolio">
				<div class="portfolio__title">
					<h2>My Work</h2>
					<p>
						Given that my Instructional Designer/Trainer experience comes primarily from the mortgage industry, all of the material I make is for internal-use only. That said, I will summarize some of the projects I've worked on below, but the material would need to be provided by request only as I do not want "internal-use" documents being made publicly available on my website.
						<br>
						~ Thank you, Mike!
					</p>
				</div>
				<div class="portfolio__section">
					<!-- Portfolio Example -->
					<div class="project__card">
						<div class="project__head">
							<h3 class="btn_toggle">REO System Entry App - <span class="downArrow">&#8659;</span><span class="upArrow hidden">&#8657;</span></h3>
						</div>
						<div class="project__description hidden">
							<p>
								By far one of the most intensive projects I worked on in Storyline was the <i>Real Estate Owned System Entry App</i>. It was less of a "training" and more of an interactive "questionnaire" that a Mortgage Loan Processor would complete to determine how to fill out/properly update the REO settings in the Loan Origination Software we used.
								<br>
								<br>
								Being that there are multiple property ownership types (i.e., Primary Residence, Investment Property, and Secondary Residence) along with multiple options for each (e.g., buying a new investment, buying a new primary, refinancing an investment, etc.) there was a <b>lot</b> of branching in this project. The branching and the added benefit of having "breadcrumbs" on each new screen so they could navigate back by one step at a time (if they made an error) turned this into a relatively big and time-consuming project.
								<br>
								<br>
								To circle back to what was mentioned above, the destination of this project was on a micro-site made with Webflow so the user could access it as a website on a case-by-case basis.
							</p>
						</div>
						<hr>
						<div class="project__tags">
							<p>
								Technology Used:
								<br>
								<br>
								<span class="tag">Storyline</span>
								<span class="tag">Webflow</span>
							</p>
						</div>						
					</div>
					<!-- Portfolio Example -->
					<div class="project__card">
						<div class="project__head">
							<h3 class="btn_toggle">1099 Income Worksheet - <span class="downArrow">&#8659;</span><span class="upArrow hidden">&#8657;</span></h3>
						</div>
						<div class="project__description hidden">
							<p>
								The <i>1099 Income Worksheet</i> is a job-aid built with the intent of being used by both Underwriters and Loan Officers alike. The original iteration, built before I worked at the company, was just an Excel spreadsheet that handled the calculations. However, the goal here was to make an ILT that used a simplified more linear and user-friendly calculator that would then be provided to the trainees.
								<br>
								<br>
								This job-aid was designed in Microsoft Word and the functionality was added in Adobe Acrobat using JavaScript to handle grabbing necessary fields, completing applicable calculations, etc.
							</p>
						</div>
						<hr>
						<div class="project__tags">
							<p>
								Technology Used:
								<br>
								<br>
								<span class="tag">MS Word</span>
								<span class="tag">Acrobat</span>
								<span class="tag">JavaScript</span>
							</p>
						</div>						
					</div>
					<!-- Portfolio Example -->
					<div class="project__card">
						<div class="project__head">
							<h3 class="btn_toggle">Course Design Macro - <span class="downArrow">&#8659;</span><span class="upArrow hidden">&#8657;</span></h3>
						</div>
						<div class="project__description hidden">
							<p>
								The <i>Course Design Macro</i> may not exactly fall under the "Instructional Designer" job description so this is probably best considered an example of my capabilities and willingness to learn.
								<br>
								<br>
								For most ILT courses we would make at my employer, a post-class "Course Design" was created outlining the basic course information, any supplemental material necessary for the course, any post-course quiz questions, images of every slide, the script of every slide, etc.. The process for creating this Course Design was relatively time-consuming, primarily because you need to take a screenshot of and transcribe the script from each slide into the matching Course Design. So, with the intent of drastically speeding this process up, I created a Microsoft Word VBA macro that would grab the image and script for every slide then output it to the necessary location on the document.
							</p>
						</div>
						<hr>
						<div class="project__tags">
							<p>
								Technology Used:
								<br>
								<br>
								<span class="tag">MS Word</span>
								<span class="tag">VBA</span>
							</p>
						</div>						
					</div>
					<!-- Portfolio Example -->
					<div class="project__card">
						<div class="project__head">
							<h3 class="btn_toggle">PDF Software Simulator - <span class="downArrow">&#8659;</span><span class="upArrow hidden">&#8657;</span></h3>
						</div>
						<div class="project__description hidden">
							<p>
								The <i>PDF Software Simulator</i> is basically what the title suggests. We had an obstacle where we were to create an ILT (actually a series of ILTs) for a group of outsourced/offshore workers who do not have access to any of our internal technology. Basically all we had to work with was MS Teams for a live training and whatever "static" documentation we could send via email. Due to these limitations, I found a PDF "simulator" to be the closest I could come to training on the software they needed to learn while also providing them with an interactive activity to aid in the learning process.
								<br>
								<br>
								Using SnagIt, Acrobat, and PowerPoint I was able to create clickable regions that would walk the user through the process to complete a task in the software/learn about the software. I also managed to integrate a sudo "quiz" that was built into the PDF and it provided information on what they answered right/wrong at the end of the PDF using JavaScript.
							</p>
						</div>
						<hr>
						<div class="project__tags">
							<p>
								Technology Used:
								<br>
								<br>
								<span class="tag">SnagIt</span>
								<span class="tag">Acrobat</span>
								<span class="tag">PowerPoint</span>
								<span class="tag">JavaScript</span>
							</p>
						</div>						
					</div>
				</div>
			</div>
		</main>
	</section>
	<script src="static/js/scripts.js"></script>
</body>
</html>

<?php require __DIR__ . '/components/footer.php';?>
