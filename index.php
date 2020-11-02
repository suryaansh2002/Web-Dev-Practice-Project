<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup- Home </title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>
    
    <?php
    	if(isset($_GET['logout'])){
    		if($_GET['logout']=='true'){?>
    		
    		<div class="alert alert-success">
    		<a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
    		<b>You have successfully been logged out!</b>
    		</div>
    		
    	<?php    		
    		}
    	
    	}
    ?>

	<?php require_once"nav.php";?>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">The Perfect Cup</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Suryaansh R</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">How To Make 
                        <strong>A Perfect Cup Of Coffee</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque sit amet felis elementum vulputate. Ut erat quam, pellentesque ultricies vehicula id, pretium feugiat lacus. Vestibulum cursus vulputate arcu quis convallis. Cras metus lorem, tempus at sem sit amet, cursus maximus justo. Quisque ac rutrum mauris. Phasellus fermentum consectetur justo in vestibulum. Pellentesque ut euismod velit, ut gravida nisi. Nullam mollis egestas enim sit amet fermentum. Suspendisse rhoncus mollis placerat. Etiam aliquet maximus erat, lobortis cursus orci congue id. In mollis, ligula eu sodales euismod, purus ipsum laoreet turpis, eu molestie est metus at massa. Pellentesque accumsan varius pretium. Phasellus nec nunc eu lacus efficitur fringilla. Fusce rutrum dui vitae leo molestie, quis ullamcorper nibh tristique. Duis malesuada quam nisl. Sed posuere bibendum dignissim.</p>
					<p>Donec faucibus auctor quam quis ullamcorper. Sed eget dictum velit. Duis in molestie lectus. Nullam nec bibendum ex. Morbi vehicula interdum urna iaculis finibus. Integer at consectetur nisi, nec aliquet felis. Quisque dignissim sapien tellus, in egestas tellus pharetra ac. Cras pellentesque dui nec dui euismod, convallis faucibus arcu elementum. Maecenas finibus mi sit amet nunc lobortis feugiat quis ac enim. Donec quam tellus, accumsan at lacus non, tempor ullamcorper nibh. Suspendisse fermentum eros nec posuere vehicula. Nulla a sagittis tellus. Aenean dapibus felis turpis, et iaculis augue tincidunt sed.</p>



                </div>
            </div>
        </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
    </script>

</body>

</html>
