<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <title>Free Bootstrap Theme for Developers</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    <!-- Global CSS -->
    <link rel="stylesheet" href="public/css/bootstrap3.css">
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="public/css/font-awesome.css">
    <link rel="stylesheet" href="public/css/prism.css">
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="public/css/index.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll">

    <!---//Facebook button code-->
    <div id="fb-root"></div>
   

    <!-- ******HEADER****** -->
    <header id="header" class="header">
        <div class="container">
            <h1 class="logo pull-left">
                <a class="scrollto" href="#promo">
                    <span class="logo-title">fourniPieces</span>
                </a>
            </h1>
            <!--//logo-->
            <nav id="main-nav" class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--//nav-toggle-->
                </div>
                <!--//navbar-header-->
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item sr-only">
                            <a class="scrollto" href="#promo">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="scrollto" href="#about">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="scrollto" href="#docs">Inscription</a>
                        </li>
                        
                        <li class="nav-item last">
                            <a class="scrollto" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <!--//nav-->
                </div>
                <!--//navabr-collapse-->
            </nav>
            <!--//main-nav-->
        </div>
    </header>
    <!--//header-->

    <!-- ******PROMO****** -->
    <section id="promo" class="promo section offset-header">
        <div class="container text-center">
            <h2 class="title">Fourni
                <span class="highlight">Pieces</span>
            </h2>
            <p class="intro">A fournisseur de venir demander nous avons ici pour rependre</p>
            <div class="btns">

                <p class="text-center">
                    <a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#login-modal">Ouvrir Login </a>
                </p>
                <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="img-circle" id="img_logo" src="http://bootsnipp.com/img/logo.jpg">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form">
		                <div class="modal-body">
				    		<div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Type your username and password.</span>
                            </div>
				    		<input id="login_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required><br>
				    		<input id="login_password" class="form-control" type="password" placeholder="Password" required>
                            
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
				    	  
				        </div>
                    </form>

            </div>

            <br>
        </div>
        <!--//container-->
        <br>
        <br>
    </section>
    <!--//promo-->

    <!-- ******ABOUT****** -->
    <section id="about" class="about section">
        <div class="container">
            <h2 class="title text-center">What is FourniPiences?</h2>
            <p class="intro text-center">Explain your project in detail. Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            <div class="row">
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-holder">
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">Designed for developers</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the
                            icon above to any of the 400+
                            <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div>
                    <!--//content-->
                </div>
                <!--//item-->
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-holder">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">Time saver</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the
                            icon above to any of the 400+
                            <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div>
                    <!--//content-->
                </div>
                <!--//item-->
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-holder">
                        <i class="fa fa-crosshairs"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">UX-centred</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the
                            icon above to any of the 400+
                            <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div>
                    <!--//content-->
                </div>
                <!--//item-->
                <div class="clearfix visible-md"></div>
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-holder">
                        <i class="fa fa-tablet"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">Mobile-friendly</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the
                            icon above to any of the 400+
                            <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div>
                    <!--//content-->
                </div>
                <!--//item-->
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-holder">
                        <i class="fa fa-code"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">Easy to customise</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the
                            icon above to any of the 400+
                            <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div>
                    <!--//content-->
                </div>
                <!--//item-->
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-holder">
                        <i class="fa fa-coffee"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">LESS files included</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the
                            icon above to any of the 400+
                            <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div>
                    <!--//content-->
                </div>
                <!--//item-->
            </div>
            <!--//row-->
        </div>
        <!--//container-->
    </section>
    <!--//about-->




    <!-- ******DOCS****** -->
    <section id="docs" class="docs section">
        <div class="container">
            <div class="docs-inner">
                <h2 class="title text-center">Inscription Nouveau Client</h2>
                <div class="block">
                    <form method="POST" action="#">
                    Nom:
                    <input type="text" class="form-control" name="Name" placeholder=" Name"> prenom:
                    <input type="text" class="form-control" name="prenom" placeholder=" prenom"> telephone:
                    <input type="text" class="form-control" name="telephone" placeholder="telephone"> e-mail:
                    <input type="text" class="form-control" name="mail" placeholder="e-mail">societe:
                    <input type="text" class="form-control" name="societe" placeholder="societe"><br>
                    <input type="submit" class="btn btn-default" value="Enregestrer">
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- ******CONTACT****** -->
    <section id="contact" class="contact section has-pattern">
    <section class="contact-us text-center slideanim" id="contact">
    <div class="contact">
        <div class="container">
            <i class="fa fa-headphones fa-5x"></i>
            <h1>Contact</h1>
            <p class="lead">Ecrivez nous, appelez nous ou venez nous rendre visite</p>
                 
                            
                           
                    </div>
             
            <div class="row">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" role="form" method="POST">
                    <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="nom" class="form-control input-lg" placeholder="Nom et Prenom" value="<?php if(isset($nom)){echo $nom;}?>">   
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control input-lg" placeholder="Email" value="<?php if(isset($email)){echo $email;}?>">   
                            </div>
                            <div class="form-group">
                                <input type="tel" name="telephone" class="form-control input-lg" placeholder="Telephone"  value="<?php if(isset($telephone)){echo $telephone;} ?>">   
                            </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <textarea class="form-control input-lg" name="message" placeholder="Message"><?php if(isset( $message)){echo  $message;} ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Envoyer</button>
                    </div>
                </form>
            </div>

            
            

        </div>
    </div>

                            <!--//source-->
                    </div>
                    <!--//speech-bubble-->
                </div>
                <!--//author-message-->
                <div class="clearfix"></div>
                <div class="info text-center">
                    <h4 class="sub-title">Get Connected</h4>
                    <ul class="social-icons list-inline">
                        <li>
                            <a href="https://twitter.com/3rdwave_themes" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/3rdwavethemes" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/xiaoying">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://instagram.com/xyriley">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://dribbble.com/Xiaoying">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                        <li class="last">
                            <a href="mailto:hello@3rdwavemedia.com">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--//info-->
            </div>
            <!--//contact-inner-->
        </div>
        <!--//container-->
    </section>
         </section>
    <!--//contact-->

    <!-- ******FOOTER****** -->
    <footer class="footer">
        <div class="container text-center">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with
                <i class="fa fa-heart"></i> by
                <a href="http://themes.3rdwavemedia.com" target="_blank">wad zam</a> for developers</small>
        </div>
        <!--//container-->
    </footer>
    <!--//footer-->

    <!-- Javascript -->
    <script type="text/javascript" src="public/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="public/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="public/js/prism.js"></script>
    <script type="text/javascript" src="public/js/main.js"></script>
</body>

</html>