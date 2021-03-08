<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html>
    <head>
    <meta http-equiv="Refresh" content="10; url='dbindex.php" />
        <title>
            Login-SpaceUnlimited
        </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/style.css">
   </head>
            <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
                <!-- MENU -->
                <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
                     <div class="container">
 
                          <div class="navbar-header">
                               <!-- lOGO TEXT HERE -->
                               <a href="#" class="navbar-brand">SpaceUnlimited</a>
                          </div>
 
                          <!-- MENU LINKS -->
                          <div class="collapse navbar-collapse">
                               <ul class="nav navbar-nav navbar-nav-first">
                                    <li><a href="index.php" class="smoothScroll">Home</a></li>
                                    <li><a href="#about" class="smoothScroll">About</a></li>
                                    <li><a href="#courses" class="smoothScroll">Events</a></li>
                                    <li><a href="login.html" class="smoothScroll">Login</a></li>
                               </ul>
 
                               <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#"><i class="fa fa-phone"></i> +234 908 1888 876</a></li>
                               </ul>
                          </div>
 
                     </div>
              </section>

              <section>
                    <div class="header">
                        <h2>Home Page</h2>
                    </div>
                    <div class="content">
                        <!-- notification message -->
                        <?php if (isset($_SESSION['success'])) : ?>
                        <div class="error success" >
                            <h3>
                            <?php 
                                echo $_SESSION['success']; 
                                unset($_SESSION['success']);
                            ?>
                            </h3>
                        </div>
                        <?php endif ?>

                        <!-- logged in user information -->
                        <?php  if (isset($_SESSION['username'])) : ?>
                            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                            <p> <a href="home.php?logout='1'" style="color: red;">logout</a> </p>
                        <?php endif ?>
                    </div>
              </section>
              

            <footer id="footer">
                <div class="container">
                     <div class="row">

                          <div class="col-md-4 col-sm-6">
                               <div class="footer-info">
                                    <div class="section-title">
                                         <!-- <h2>Headquarter</h2> -->
                                    </div>
                                    <address>
                                         <h2>Contact Info</h2>
                                         <p><b><a href="#"><i class="fa fa-phone"></i> +234 908 1888 876</a></b></p>
                                         <p><a href="mailto:youremail.co">info@aimmtoget.com</a></p>
                                    </address>
                                    <div class="copyright-text"> 
                                         <p>Copyright &copy; 2020 Aimtoget<br>Design: Arafah_Creations</p>
                                    </div>
                               </div>
                          </div>

                          <div class="col-md-4 col-sm-6">
                               <div class="footer-info">
                                    <address>
                                         <h2>Headquarter</h2>
                                         <p>76, Mobolaji Bank Anthony Way (Anthony Agbodji Office Complex, 1st floor left wing) Ikeja 100211 Lagos Nigeria</p>
                                    </address>

                               </div>
                          </div>
                     </div>
                </div>
           </footer>
           <script src="js/jquery.js"></script>
           <script src="js/bootstrap.min.js"></script>
           <script src="js/owl.carousel.min.js"></script>
           <script src="js/smoothscroll.js"></script>
           <script src="js/custom.js"></script>
        </body>
</html>