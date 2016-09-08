<?php
    if($_POST["submit"]){
        if(!$_POST['name']){
            $error="<br />Please enter your name";
        }
        if ($_POST['email']!="" AND !filter_var($_POST['email'],
FILTER_VALIDATE_EMAIL)) {

            $error.="<br />Please enter a valid email address";

         }
        if(!$_POST['subject']){
             $error .="<br />Please enter your subject";
        }
        if(!$_POST['message']){
             $error .="<br />Please enter your message";
        }
        if($error){
            $result='<div class="alert alert-danger"><strong>There were error(s)
in your form:</strong>'.$error.'</div>';
        }
        else
        {
            $headers = 'From: <productiveworld@example.com>';
            $subject = $_POST["subject"];
            //echo $subject;
            if (mail("nhuluong2212@gmail.com", $subject, "Name: ".$_POST['name']."Email: ".$_POST['email']."Comment: ".$_POST['message'],$headers)) {
                $result='<div class="alert alert-success"><strong>Thank you!</strong> We will get back to you within 24 hours.</div>';

            }else
            {
                $result='<div class="alert alert-danger">Sorry, there was
an error sending your message. Please try again later.</div>';
            }
        }



    }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SWE SJSU</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        @media(max-width: 768px)
        {
            #button1{
                margin-top: 220px;
            }
            header{
                background-position: right;
            }
       }
}
    </style>


</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">   </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#aboutus">Benefits</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#membership">Membership</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Events</a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li> -->

                    <li>
                        <a class="page-scroll" href="#team">Our Team</a>
                    </li>
                    <li>
                        <a name="contact" class="page-scroll" href="#contact">Contact Us</a>
                    </li>
                </ul>

           </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <!-- <div class="intro-heading"></div> -->
                <a href="#aboutus" id="button1" class="page-scroll btn btn-xl">Learn More</a>
            </div>
        </div>
    </header>

    <!-- Benefits Section -->
    <section id="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Why SWE?</h2>
                    <h3 class="section-subheading text-muted">Here are a few benefit that you can have access to</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-heart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">A Supporting Community</h4>
                    <p class="text-muted">Join us for a community of 100 Spartan SWErs in our exclusive clubroom with free food, ultities and supports. </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-users fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Networking & Leadership Opportunities</h4>
                    <p class="text-muted">You can meet other SWE professionals from big companies that can provide guidance and mentorship to develop your leadership and professional skills. </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Exclusive Internships/Jobs</h4>
                    <p class="text-muted">Weekly bulletins with opportunities from companies, startups such as Lockheed Martin, Visa. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership Info -->
     <section id="membership">
        <div class="container">
            <div>
             <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">How Can I Join?</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
            <img src="img/Membership.jpg" class="img-responsive center-block" alt="Cinque Terre" width="500" height="500">
            </div>
            <div class="row">
            <p id="demo"></p>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Upcoming Events</h2>

                    <h3 class="section-subheading text-muted">Make sure you don't miss anything! </h3>

                </div>
            </div>
           <iframe src="https://calendar.google.com/calendar/embed?src=swe.sjsu%40gmail.com&ctz=America/Los_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no" align="center"></iframe>

            </div>
        </div>
    </section>

   <!-- Picture Section -->
    <section id="portfolio" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Pictures from our events</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/linkedln.jpg" class="img-responsive" alt="Rock Your Profile workshop!">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Professional Events</h4>
                        <p class="text-muted">We grow professionally together!</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/bakesale.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Social Events</h4>
                        <p class="text-muted">We build a supporting community!</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Announcements</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
             <!--    <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/golden.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Golden</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Escape</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Dreams</h4>
                        <p class="text-muted">Website Design</p>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">SWE SJSU 2016</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/president.jpg" class="img-responsive img-circle" alt="">
                        <h4>Aishwarya Borkar</h4>
                        <p class="text-muted">President</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/vp.jpg" class="img-responsive img-circle" alt="">
                        <h4>Kaanchana Allanki</h4>
                        <p class="text-muted">Vice President</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/secretary.jpg" class="img-responsive img-circle" alt="">
                        <h4>Nhu Luong</h4>
                        <p class="text-muted">Secretary</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/treasurer.jpg" class="img-responsive img-circle" alt="">
                        <h4>Shweta More</h4>
                        <p class="text-muted">Treasurer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">A leader's job is not to do the work for others, it's to help others figure out how to do it themselves, to get things done, and to succeed beyond what they thought possible - Simon Sinek</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">You can contact us directly via swe.sjsu@gmail.com OR leave a message below</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form method="post">
                        <?php echo $result; ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *"
                                    name="name"
                                    value="<?php echo $_POST['name'];?>"/>



                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *"
                                    name="email"  value="<?php echo $_POST['email'];?>"
                                    >



                             </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Subject *"
                                    name="subject"
                                     value="<?php echo $_POST['subject'];?>">


                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" name="message"><?php echo $_POST['message']; ?></textarea>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" id="submit" name="submit" type="submit" formtarget="_self" class="btn btn-xl" value="Send Message">Send Message</button>
                            </div>
                        </div>
                         <div class="form-group" >
                            <div class="col-md-5 col-sm-offset-3 text-center" >

                            </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; SWE SJSU 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/SWE.SJSU/"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>









    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>



    <!-- Contact Form JavaScript -->
    <!-- <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script> -->

    <!-- Theme JavaScript -->
    <script src="js/agency.js"></script>

<!--
    <script type="text/javascript">
     $('#submit').click(function(){
        $(document).ajaxStop(function(){
        alert("All AJAX requests completed");
        });

        var name = $("input#name").val();
        var email = $("input#email").val();
        var phone = $("input#subject").val();
        var message = $("textarea#message").val();
        alert(name);
        $.ajax({
            url: "contactus.php",
            type: "POST",
            data: {
                    name: name,
                    subject: subject,
                    email: email,
                    message: message
                },
            success: function(){
                alert('success');
            },
            error: function(){
                alert('something went wrong');
            },
        });
    });

    </script>
 -->


</body>

</html>
