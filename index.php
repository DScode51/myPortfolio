<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>My Portfolio</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--My css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>
	<section id="home-screen">
		<video autoplay muted loop id="myVideo" class="hidden-xs">
		  <source src="videos/FallyIpupa.mp4" type="video/mp4">
		</video>

		<div class="home-screen__content">
			<div class="nav-bg">
				<div class="container">
					<nav class="navbar">
						<div class="navbar-header">
							<button type="button" style="color: #fff;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
						        <span class=""><i class="fa fa-bars" aria-hidden="true"></i></span>
						        
						    </button>
							<a href="#" class="navbar-brand"><.UA></a>
						</div>

						<div class="collapse navbar-collapse" id="navbar-collapse">
					      	<ul class="nav navbar-nav navbar-right">
						        <li class="active"><a href="#home-screen">Accueil <span class="sr-only">(current)</span></a></li>
						        <li><a href="#about">About</a></li>
						        <li><a href="#skills">Skills</a></li>
						        <li><a href="#contact">Contact</a></li>
						    </ul>
						</div>
					</nav>
				</div>
			</div>
			
			<div class="container home-content">
				<div class="row">
					<div class="col-md-7 col-sm-8">
						<h1 class="wow fadeInDown">I'm Designer & Front-end Web Developer.</h1>
						<div class="barBlock wow fadeInRight"></div>
						<h3 class="wow fadeInDown">Let's build something together...</h3>
						<a href="#contact" class="btn wow fadeInRight">Get in touch</a>
					</div>

					<div class="col-md-5 col-sm-4">
						<button id="myBtnPP" onclick="myFunction()" class="col-md-offset-4 hidden-xs"><i class="fa fa-pause fa-3x" aria-hidden="true"></i>
							<i class="fa fa-play" style="display: none;" aria-hidden="true"></i>

						</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="about">
		<div class="container">
			<h1 class="text-center wow fadeInDown">About me</h1>
			
			<div class="avatar wow fadeInDown">
				<div class="circle-bord">
					<img src="images/myAvatar.jpg" alt="avatar" class="img-responsive img-circle">
				</div>		
			</div>
			<h3 class="text-center col-sm-8 col-sm-offset-2 blockquote wow fadeInDown">" I'm Uriel, Front-end Web Developer and User interface Designer from Ukraine and I love what I do. "</h3>
		</div>

		<div class="working-process text-center">
			<div class="container" data-wow-delay="1.5s">
				<h1 class="wow fadeInDown">My Working Process</h1>

				<div class="col-md-3 col-sm-6 col-xs-6 wow fadeInRight">
					<i class="fa fa-arrows-alt fa-2x" aria-hidden="true"></i>
					<h5>PLAN</h5>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
					<i class="fa fa-desktop fa-2x" aria-hidden="true"></i>
					<h5>DESIGN</h5>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
					<i class="fa fa-file-code-o fa-2x" aria-hidden="true"></i>
					<h5>DEVELOPMENT</h5>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6 fa-2x wow fadeInLeft">
					<i class="fa fa-paper-plane" aria-hidden="true"></i>
					<h5>LAUNCH</h5>
				</div>
			</div>
		</div>
	</section>

	<section id="skills">
		<div class="skills-cards">
			<div class="container">
				<h1 class="text-center wow fadeInDown">My Skills</h1>

				<div class="cards">
					<div class="row">
						<div class="col-md-3  col-sm-5 col-xs-10 col-xs-offset-1">
							<div class="card card1 wow fadeInDown">
								<div class="card-face">
									<h3 class="text-center">UI/UX Design</h3>
									<p>BacМногие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток,k</p>
								</div>
								
							</div>
						</div>
					

						<div class="col-md-3 col-sm-5 col-xs-10 col-xs-offset-1">
							<div class="card card2 wow fadeInUp">
								<div class="card-face">
									<h3 class="text-center">Web development</h3>
									<p>BacМногие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток,k</p>
								</div>
								
							</div>
						</div>

						<div class="col-md-3 col-md-offset-1 col-sm-5 col-sm-offset-4 col-xs-10 col-xs-offset-1">
							<div class="card card3 wow fadeInDown">
								<div class="card-face">
									<h3 class="text-center">Pixel Perfetct</h3>
									<p>BacМногие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток,k</p>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="skills-bars">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3">
						 <div class="progress blue">
			                <span class="progress-left">
			                    <span class="progress-bar"></span>
			                </span>
			                <span class="progress-right">
			                    <span class="progress-bar"></span>
			                </span>
			                <div class="progress-value">50%</div>
			            </div>
			            <h4 class="text-center">Photoshop</h4>
			        </div>

			        <div class="col-md-3 col-sm-3">
			            <div class="progress yellow">
			                <span class="progress-left">
			                    <span class="progress-bar"></span>
			                </span>
			                <span class="progress-right">
			                    <span class="progress-bar"></span>
			                </span>
			                <div class="progress-value">75%</div>
			            </div>
			            <h4 class="text-center">HTML/CSS</h4>
			        </div>

			        <div class="col-md-3 col-sm-3">
			            <div class="progress pink">
			                <span class="progress-left">
			                    <span class="progress-bar"></span>
			                </span>
			                <span class="progress-right">
			                    <span class="progress-bar"></span>
			                </span>
			                <div class="progress-value">50%</div>
			            </div>
			            <h4 class="text-center">HAML/SASS</h4>
			        </div>

			        <div class="col-md-3 col-sm-3">
			            <div class="progress green">
			                <span class="progress-left">
			                    <span class="progress-bar"></span>
			                </span>
			                <span class="progress-right">
			                    <span class="progress-bar"></span>
			                </span>
			                <div class="progress-value">55%</div>
			            </div>
			            <h4 class="text-center">JQUERY/JAVASCRIPT</h4>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="contact">
		<div class="container">
			<h1 class="text-center wow fadeInDown">Get in touch</h1>
			<div class="wow fadeInRight" style="border: 2px solid #0099ff; width: 100px; margin: auto; margin-bottom: 80px;"></div>
			<div class="col-md-5 col-md-offset-2 col-sm-6 col-sm-offset-1 wow fadeInLeft">
				 <form action="" method="post" id="get_in_touch">
				 	<h4 class="text-center" style="color: #0099ff">Have a question or want to work together?</h4>
				 	<div class="form-group">
				    <label for="name"></label>
				    <input type="text" placeholder="your name" class="form-control" id="name">
				  </div> 
				  <div class="form-group">
				    <label for="email"></label>
				    <input type="email" placeholder="Email" class="form-control" id="email">
				  </div>
				  <div class="form-group">
				    <label for="mssg"></label>
				    <textarea type="text" placeholder="message" class="form-control" id="pwd"></textarea>
				  </div>
				  <button type="submit" name="submit" id="get_in_touch" class="btn col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">SEND</button>
				</form> 
			</div>
			<div class="col-md-5 col-sm-5 hidden-xs wow fadeInRight">
				<img src="images/iphone8.png" class="img-responsive">
			</div>
		</div>
	</section>

	<footer class="">
		<div class="container footer-end">
			<div class="col-sm-6 col-xs-12">
				Copyright 2018 - All rights reserved
			</div>
			
			<div class="col-sm-6 col-xs-12">
				<div class="pull-right">
					<b style="color: #0099ff;"><.UA></b>, made with <a href="http://getbootstrap.com/docs/3.3/" target="_blank">Booststrap</a>
				</div>
			</div>
		</div>
	</footer>

	<a href="" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!--Wow js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>