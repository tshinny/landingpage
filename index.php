<?php
session_start();
include("simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to tshinny.com</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">tshinny.com</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#team">Team</a>
                    </li>

                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Full Width Image Header -->
    <header class="header-image">
        <div class="headline">
            <div class="container">
                <h1>tshinny.com</h1>
                <h2>we strive to be thought leaders for upraising individuals <span class="text-muted">to unleash their concealed potential.</span></h2>
            </div>
        </div>
    </header>

    <!-- Page Content -->
     <div class="container">

        <hr class="featurette-divider">
            <div class="row "></div>

        <div class="featurette " id="team">

            <div class="row clearfix">
                <div class="col-md-4 column" style="text-align:right">
                    <h2 class="featurette-heading">Patrick
                        <span class="text-muted">Leitgeb.</span>
                    </h2>
                    <p class="profile-text">In 2013 Patrick attended the Summer School at London School of Economics and Political Science - a life changing experience. Coming back to Austria filled with inspirational energy gained through open-minded diverse students from top universities all over the world, he realized his dormant desire for being more than just a team leader & product manager within leading companies in various industries over the past eight years. After graduating with his Master's degree in IT management he started to focus even more on lifelong learning by successfully completing executive education programs at Europe's top business schools in Dublin and Rotterdam.</p>
                    <p class="profile-text">Today, Patrick is living his passion by devoting his entrepreneurial spirit and distinctive empathetic sense to solve daily life problems with smart use of technology resulting in smiling faces.</p>
                </div>
                <div class="col-md-4 column">
                    <div class="profile-pic">
                                <img class="featurette-image text-center img-rounded img-responsive" src="img/team.png"  height="548" width="628">
                    </div>
                </div>
                <div class="col-md-4 column">
                    <h2 class="featurette-heading">Günther
                        <span class="text-muted">Pfeffer.</span>
                    </h2>
                    <p class="profile-text">His path to entrepreneurship is one that does not fulfill the typical cliche. Instead of aborting his study, he finished two of them in the fields of business informatics and technical management, complemented by Summer School experiences such as in the Peking Universtiy in 2014. He does not even have a garage used as office or assembly plant, but loves to work and create value with inspired minds around. Along the way, Günther soaked up a variety of exciting impressions in the last eight years of his professional career - from collaborating in an e-marketing department of a huge pharmaceutical company, to activities as freelancer for several start-ups, right up to delivering projects to companies in diverse industries on his own. 
                    </p>
                    <p class="profile-text">Günther's concluding lesson is that with an open mind and the right approach, every problem has the potential to make people happy.</p>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- Second Featurette ->
        <div class="featurette" id="services">
            <img class="featurette-image img-circle img-responsive pull-left" src="http://placehold.it/500x500">
            <h2 class="featurette-heading">The Second Heading
                <span class="text-muted">Is Pretty Cool Too.</span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>

        <hr class="featurette-divider">

        <!-- Third Featurette -->
        <div class="featurette" id="contact" style="text-align:center">
            <div class="row clearfix">    
             
                <div class="col-md-1 column">
                </div>
                
                <div class="col-md-6 col-xs-12  column">
                    <h2 class="featurette-heading" style="text-align:right">Let's get 
                        <span class="text-muted">in touch.</span>
                    </h2>  
                    <div class="row top-buffer"></div>
                    <div id="form" >
                        <form role="form" method="POST" class="contact" id="form" >
                            <div class="col-md-7 column pull-right">

                                <div class="form-group ">
                                    <input type="input" class="form-control" placeholder="Enter full name" id="fullName" name="fullName" data-validation="required"/>
                                </div>
                                <div class="form-group">
                                     <input type="email" placeholder="Enter email" class="form-control" id="email" name="email" data-validation="email">
                                </div>
                                <div class="form-group">
                                     <input type="input" placeholder="Enter captcha" class="form-control" id="captcha" name="captcha" data-validation="required" />

                                </div>                                  
                                 <div class="form-group text-right">
                                    <?php echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA" id="captcha-img"  height="75" width="160" />'; ?>
                                    <div><small>Click to change captcha</small></div>
                                </div>
                                <div class="row post-error"></div>                               
                                 <div class="form-group">
                                    <div class="form-group pull-right">

                                        <button type="button" class="btn btn-default" id="submit">Keep me posted</button>
                                    </div>
                               </div>
                            </div>
                           
                        </form>
                    </div>
                </div>
                <div class="col-md-4  col-xs-12  column">
                    <p class="lead text-left text-muted">
                        <blockquote>
                            <p>
                                My belief is that communication is the best way to create strong relationships.
                            </p> <small>Jada Pinkett Smith</small>
                        </blockquote>
                    </p>
                    <p class="lead text-left text-muted">
                        Any feedback, ideas and inspiring thoughts you want to share with us are very welcome. We love to discuss and elaborate interesting subjects of all kinds.
                    </p>
                    <p class="lead text-left text-muted">
                      
                        <a href ="mailto:&#111;&#102;&#102;&#105;&#099;&#101;&#64;&#116;&#115;&#104;&#105;&#110;&#110;&#121;&#046;&#099;&#111;&#109;">&#111;&#102;&#102;&#105;&#099;&#101;&#64;&#116;&#115;&#104;&#105;&#110;&#110;&#121;&#046;&#099;&#111;&#109;</a>
                    </p>
                </div>
                <div class="col-md-1 column">
                </div>  


                <!--div class="col-md-2 column" ></div>
                <div class="col-md-8 column" >
                    
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-2 column" ></div-->
            </div>    
        </div>

        <hr class="featurette-divider">

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; tshinny.com 2015.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.1/jquery.form-validator.min.js"></script>


 <script type="text/javascript">
  
  $.validate();

     $(document).ready(function () {

        $("#captcha-img").click(function(){
            $.ajax({
                type: "GET",
                url: "reload_captcha.php", //process to mail
                success: function(msg){
                   $("#captcha-img").attr('src',(msg));
                }
            });
        });

        $("#submit").on('click',function(){
            $("form.contact").submit();
        });

        $(document).on('submit','form.contact',function(){
            $.ajax({
                type: "POST",
                url: "newsletter.php", //process to mail
                data: $('form.contact').serialize(),
                success: function(msg){
                    var obj = jQuery.parseJSON( msg );
                    if(obj.msg!=null)
                        $("#form").html("<p class='lead text-right'>"+obj.msg+"</p>"); 
                    else
                        $(".post-error").html(obj.err); 

                },
                error: function(msg){
                    $(".error").html(msg); //hide button and show thank you
                }
            });
        });
    });
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-63115003-1', 'auto');
      ga('send', 'pageview');

    </script>        

</body>

</html>