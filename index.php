<?php

$conn = mysqli_connect('localhost', 'root', '', 'mukomadev');

$root = realpath($_SERVER['DOCUMENT_ROOT']);

$tz = date_default_timezone_set('America/New_York');
$d = date('M d, Y @ g:i:s a');

$insert = "INSERT INTO visits (date) VALUES ('$d')";
$run = mysqli_query($conn, $insert);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <title>MukomaDev</title>
		<link rel="stylesheet" type="text/css" href="css/general-header-footer.css">
		<link rel="stylesheet" type="text/css" href="css/web-body.css">
		<link rel="stylesheet" type="text/css" href="css/logo.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<meta charset="utf-8">
		<meta name="description" content="Abdi Mukoma is an up-and-coming creative thinking professional Web Developer mainly experienced in creating, designing and implementing both static and dynamic web technologies.">
		<meta name="keywords" content="abdi mukoma, mukoma, abdikadir mukoma, front end web developer, web developer">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<script src="js/jquery-3.2.1.js"></script>
	</head>
	
	<body>
		<div class="container">
			<?php include ("$root/mukomadev/includes/general/header.inc.php"); ?>
			
			<div class="body-content">
				
				<div class="sections greeting-sect">
                    <div class="img-no-show"></div>
                    <div class="info">
                        <table>
                            <tr>
                                <td>
                                    <div class="creator-img"><img class="suave-me" src="images/mukoma.jpg"></div>
                                </td>
                                <td>
                                    <h1 class="center-greet brief">Hello, I'm <span>Abdi Mukoma</span></h1>
                                    <p class="center-greet para">
                                        I create, design, and implement UI/UX web technologies.<br>
                                    <i class="great-career">Frontend Developer / Web Developer</i>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>
				</div>
				
				<div class="sections services skills">
                    <div class="skill-category">
                        <i class="fa fa-angle-left"></i>
                        <i class="fa slash">/</i>
                        <i class="fa fa-angle-right"></i>
                        <h1>HTML</h1>
                        <p class="skill-description">
                            I believe that every code should be written in a beautiful syntax that any developer can read and understand easily at any time. So that's how I choose to write all my codes. 
                        </p>
                    </div>
                    
                    <div class="skill-category">
                        <i class="fa fa-paint-brush"></i>
                        <h1>CSS / Style</h1>
                        <p class="skill-description">
                            Although HTML content is what makes a website a... website, which means it's very important. A great designer knows that styling is just as important. A great sense of style (color theme, font, setting) on any website is able to captivate a large base of users/visitors.
                        </p>
                    </div>
                    
                    <div class="skill-category">
                        <i class="fa fa-gears"></i>
                        <h1>JS (jQuery)</h1>
                        <p class="skill-description">
                            Depending on the purpose of a website, adding functions (what happens when a user does something) can improve a user's experience and therefore result in a positive feedback.
                        </p>
                    </div>
                    
                    <div class="skill-category">
                        <i class="fa fa-database"></i>
                        <h1>PHP &amp; Databases</h1>
                        <p class="skill-description">
                            Every tool a designer uses has its own purpose. To create a more "modern", dynamic website, it's imperative to collect and store users' data for later access; this can include, but not limited to, all types of files (images, videos, and text).
                        </p>
                    </div>
                    
                    <div class="skill-category">
                        <i class="fa fa-mobile"></i>
                        <h1>Responsive Design</h1>
                        <p class="skill-description">
                            The use of technology constantly evolves, new devices are introduced, others go out of style; and a great designer knows to use a mobile-first, responsive design approach to web pages so that each and all content is able to fit and, hence, respond to the device's dimensions.
                        </p>
                    </div>
                    
                    <div class="skill-category">
                        <i class="fa fa-user"></i>
                        <h1>User-friendly</h1>
                        <p class="skill-description">
                            By far the most important concept, user-friendly design; websites are primarily created so that they may provide value to users; and what better way to create platforms that are easily and intuitively usable to the audience?
                        </p>
                    </div>
				</div>
                
                <div class="sections work experience">
                    <div class="experience-img"></div>
                    <div class="experience-info">
						<h3>Career Development: <span>Premier Fashion</span></h3>
						<div class="sections-img">
							<img src="/mukomadev/images/work/premfash.png" class="view-img">
						</div>
						<p class="experience">
							Premier Fashion is a small startup that offers a wide range of selection for clothes and accessories.
						</p>
						<h4>Responsibilities</h4>
						<ul>
							<li>Performed mock-ups and final designs of the start-up company's e-commerce website from start to <i class="wrong-word">finish</i> launch.</li>
							<li>Created a back-end shopping cart controlled by the administrator's account</li>
							<li>Designed a user-friendly interface to allow customers/visitors to sign up</li>
							<label>Check out my work here: <a href="http://www.premfashion.co/" target="_blank" rel="noopener noreferrer">Premfashion.co</a></label>
						</ul>
					</div>
                </div>
                
                <div class="sections projects experience">
                    <div class="pj-img-bg"></div>
                    <div class="experience-info">
						<div class="project-container">
							<h3>Skills Development: <span>Vibrant Animated Cubes</span></h3>
							<div class="sections-img">
								<img src="/mukomadev/images/projects/floatingcubes.png" class="view-img">
							</div>
							<ul>
                                <li>
                                    This is a project which heavily focuses on the canvas element and the core concepts of Javascript in order to animate cubes within the dimensions of the screen.
                                </li>
							</ul>
							<ul>
								<label>See how it works here: <a target="_blank" rel="noopener noreferrer"href="/mukomadev/projects/projects-main/canvas-practice.php">Floating Cubes</a></label>
							</ul>
						</div>
						
						<div class="project-container">
                            <h3><span>Live Camera Color Tracking</span></h3>
							<div class="sections-img">
								<img src="/mukomadev-8/images/projects/halcyon.png" class="view-img">
							</div>
							<ul>
                                <li>
                                    Although it is ongoing, this is one of my favorites, inspired by facial recognition, I learn to track each individual pixel's color and location via a live camera on the web using JavaScript.
								    So far, it can only track any given color. <br><a>Currently: white</a>
                                </li>
							</ul>
							<ul>
								<label>See how it works here: <a target="_blank" rel="noopener noreferrer" href="/mukomadev-8/projects/projects-main/stream.php">Color Tracking</a></label>
							</ul>
						</div>
						
					</div>
                </div>
                
                <div class="full-screen-img"><img src="" class="full-size-img"></div>
				
			</div>
			
			<?php include ("$root/mukomadev/includes/general/footer.inc.php"); ?>
		</div>
	</body>
	
	<script>
		$(document).ready(function(){
			$(".header").delay(1000).fadeIn(1400);
			
			$(".img-no-show, .info").delay(400).fadeIn(200);
            
            $(".smooth-scroll").click(function(e) {
					var hrefLink = $(this).attr("href");
					$("html, body").animate({
						scrollTop: $(hrefLink).offset().top - 152
					}, 768);
					e.preventDefault();
            });
            
            var view_img = document.getElementsByClassName("view-img");
            var full_screen_img = document.getElementsByClassName("full-screen-img");
            var full_img = document.getElementsByClassName("full-size-img")[0];
            var fixed_sc_img = full_screen_img[0];
            
            for (var i = 0; i < view_img.length; i++){
                $(view_img[i]).click(function(){
                    
                    var img_src = this.src;
                    full_img.src = img_src;
                    $(fixed_sc_img).fadeIn(152);
                    
                });
            }
            $(fixed_sc_img).click(function(){
                $(this).fadeOut(114);
            });
		})
	</script>
</html>