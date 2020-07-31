
<?php


// print_r($_POST);
$userName = $_POST["fullName"];
$userEmail = $_POST["email"];
$usersubject = $_POST["subject"];
$userComment = $_POST["comment"];

$to = "alifikry939@gmail.com";
$body = "";

$body .= "From: ".$userName. "\r\n";
$body .= "Emai: ".$userEmail. "\r\n";
$body .= "Message: ".$userComment. "\r\n";

$result =mail($to,$usersubject,$body);

var_dump($result)
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Collapsible sidebar using Bootstrap 3</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style3.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        
    </head>
    <body>

        <!-- <div class="wrapper"> -->
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div id="dismiss">
                    <i class="glyphicon glyphicon-arrow-left"></i>
                </div>

                <div class="sidebar-header">
                    <h3>Ecommerce</h3>
                </div>

                <ul class="list-unstyled components">
                    <p>Where Everything is Cheap</p>
                    <li class="active">
                        <a href="#" >Home</a>
                        
                    </li>
                    <li>
                        <a href="/">About</a>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Catogary</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">Top</a></li>
                            <li><a href="#">Pants</a></li>
                            <li><a href="#">Shoe</a></li>
                        </ul>
                        
                    </li>
                    <li>
                        <a href="/">Cart <span class="badge badge-primary " style="margin-left: 15px;">0</span></a>
                    </li>
                    <li>
                        <a role="button" data-target="#myModalContactUs" data-toggle="modal">Contact Us</a>
                    </li>
                    <li>
                        <a href="/">Account</a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li><a role="button" class="download"  data-toggle="modal" data-target="#myModalLogin" >Login</a></li>
                    <li><a role="button" class="download" data-toggle="modal" data-target="#myModalRegister" >Register</a></li>
                    
                </ul>
            </nav>
            <div class="form loginForm">
                <form id="myModalLogin" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title mr-auto">Login</h4>
                            </div>
                            <div class="modal-body">
                                <label for="usr" >Email:</label>
                                <input type="text" class="form-control" id="LoginEmail" placeholder="Email" required>
                                <label for="Password">Password:</label>
                                <input type="password" class="form-control" id="LoginPassword" placeholder="Password" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" role="submit" value="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </form>
                
                <div class="form RegisterForm">
                        <form id="myModalRegister" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title mr-auto">Register</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label for="usr">Full name:</label>
                                        <input type="text" class="form-control" id="RegisterFullName" placeholder="Full Name" required>
                                        <label for="usr">Email:</label>
                                        <input type="text" class="form-control" id="RegisterEmail" placeholder="Email" required>
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" id="RegisterPassword" placeholder="Password" required>
                                        <label for="password">Confirm Password:</label>
                                        <input type="password" class="form-control" id="RegisterConfirmPassword" placeholder="Confirm Password" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" role="submit" value="submit" class="btn btn-primary" id="registerBtn">Submit</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
        
                            </div>
                        </form>
                </div>      
                <div class="form contactUs">
                    <form class="modal fade" id="myModalContactUs" role="dialog" method="POST" action="contactform.php">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Contact Us</h4>
                                </div>
                                <div class="modal-body">
                                    <label for="name" >Full Name:</label>
                                    <input type="text" name="fullName" class="form-control" placeholder="Full Name" required>
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    <label for="subject">subject:</label>
                                    <input type="text" name="subject" class="form-control" placeholder="subject" required>
                                    <label for="Comment">Your Comment:</label>
                                    <textarea name="ContactUsComment" name="comment" id="ContactUsComment" class="form-control" cols="20" rows="5" placeholder="Your Comment" required></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" name="submit" role="button" type="submit" value="Submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

           

                <nav class="navbar  navbar-expand-lg navbar-expand-sm navbar-expand-xl navbar-expand-md " style="background-color: #343a40!important; margin-bottom: 0px;">
                    <div class="container">
                        
                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span> Sidebar</span>
                            </button>
                            
                           
                        </div>
                       
                        
                        <div class=" navbar-expand-lg navbar-expand-sm navbar-expand-xl navbar-expand-md" id="navbarSupportedContent">
                            <!-- <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                            </ul> -->
                            
                        </div>
                    </div>
                </nav>
          

        <div class="container">
            <div class="row">
                
            </div>
        </div>
       
  
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
       
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
    </body>
</html>
