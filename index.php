<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=.5, maximum-scale=12.0, minimum-scale=.25, user-scalable=yes"/>
    <title>LandingPage</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href= "css/finalmain.css" rel="stylesheet">
    <link href= "css/form.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <img src="images/paint2.jpg" width="280" height= "60" class="img-responsive"  alt="Responsive image">
                            </a>
                            <p class="navbar-text navbar-right img-responsive" style="color:darkmagenta">CAll <span id="phone-number"> 555-123-4567</span></p>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">

                            <ul class="nav navbar-nav navbar-center">
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div id="colorstrip"></div>

                <!-------------------------------------------Display Image Begins------------------------------------------->
                <div class="relative">
                    <img src = "images/hom1.jpg" class="img-responsive">
                    <div class="container-fluid">
                        <div class="absolute img-responsive">
                            <div class="col-sm-12 col-centered col-max">
                                <div class="panel panel-default">
                                    <div align="center" id="panel-heading">
                                        <h3> Professional <span style="color:darkmagenta;">PAINTERS</span></h3>
                                        <h4> <span style="color:darkmagenta;">OF LARGO, CLEARWATER, TAMPA</span></h4>
                                    </div>
                                    <hr width="50%">
                                    <div align="center" id="subheading1"><h4>We Care About More Than Paint!</h4></div>
                                    <div class="panel-body">
                                        <div align="center">
                                            <div id="smallerfont">
                                                <p>schedule your free estimate</p>
                                                <p>to redeem promocode for </p>
                                            </div>
                                            <div id="offer-font">
                                                <p>$150 OFF</p>
                                            </div>
                                            <div id="smallestfont">
                                                <p id="sub_para">any job of $3000 or more!</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div align="center" id="formContact">
                                                    <div id="mail-status"></div>

                                                    <form class="form-horizontal" action="mailsendvalidation.php" method="POST">
                                                        <div class="form-group has-feedback">
                                                            <label for="full_name" class="col-sm-2 control-label">NAME</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="fullname" name="full_name" class="form-control">
                                                                <span class="glyphicon form-control-feedback" id="fullname1"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="email_id" class="col-sm-2 control-label">EMAIL</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="email_id" name="email_id" >
                                                                <span class="glyphicon form-control-feedback" id="email_id1"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone" class="col-sm-2 control-label">PHONE</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="phone" class="form-control" id="phonenumber">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-sm-offset-2 col-sm-10">
                                                                <button name="submit"  type="submit" class="btn"><b>SAVE  $150</b></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div align="center" class="panel-footer">
                                                <span class="glyphicon glyphicon-ok-sign small"></span> <h5> Quality Work</h5>
                                                <span class="glyphicon glyphicon-ok-sign small"></span> <h5> Professional Painters</h5>
                                                <span class="glyphicon glyphicon-ok-sign small"></span> <h5> Flexible Schedules</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="colorstrip2"></div>
                </div>

                <!-------------------------------------------Website Content Begins------------------------------------------->

                <div class="row row-centered1" style="overflow:auto;">

                    <div class="col-sm-8 col-centered1 col-max1">
                        <h1>Professional Painters</h1>
                        <h4>Tackling Residential & Commercial Painting Projects</h4>
                        <p class="information">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida massa pharetra, tempor ligula ut,
                            aliquet nulla. Quisque eu quam turpis. Sed porttitor mauris nec quam dignissim, et plaricat odio scelerisque. in
                            hac habitasse platea dictumst. Proin et accumsan nunc, sit amet bibendum purus. Proin et euismod ante.
                            Phasellus ipsum orci, feugiat tristique mollis vitae, sagittis sollicitudin libero. In tempus ex non ipsum pretium, ac
                            consequat justo fringilla.</p>
                        <h4>Why Clients Choose to Hire Our Team:</h4>
                        <ul class="custom-bullet">
                            <li><img class= "arrow" src="images/arrowpaint.jpg">Mauris sit amet urna et leo pulvina tristique</li>
                            <li><img class= "arrow" src="images/arrowpaint.jpg">Nam eu eros mollis, interdum sapien tincidunt,accumsan erat </li>
                            <li><img class= "arrow" src="images/arrowpaint.jpg">Maecenas rutrum libero ac diam, volutpat, eu vehicula risus molestie.</li>
                            <li><img class= "arrow" src="images/arrowpaint.jpg">Mauris at Tellus in lacus efficitur fringilla</li>
                            <li><img class= "arrow" src="images/arrowpaint.jpg">Nullam Lacinia nulla eget quam ornare blandit</li>
                            <li><img class= "arrow" src="images/arrowpaint.jpg">Sed mollis magna eu mi aliquet scelerisque</li>
                        </ul>
                        <p class="information">Donec aliquam sit amet nisi sed consequat. Etiam non gravida nisi. Interdum et malusuada
                            fames ac ante ipsum primis in faucibus. Aenean Feugiat lacinia velit non lacinia. Proin eget tristique leo</p>
                    </div>


                    <!-------------------------------------------Website Content Ends------------------------------------------->
                </div>
                <footer>
                    <div align="center"class="container">
                        <p class="text-muted">Schedule your free estimate! <span id="number">555-123-4567</span></p>
                    </div>
                    <div id="colorstrip2"></div>
                </footer>
            </div>
        </div>
    </header>
</body>

<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/validate.js"></script>


</html>