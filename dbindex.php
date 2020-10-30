<?php 
include('dbserver.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
		}

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SpaceUnlimited </title>
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
			<link rel="stylesheet" href="css/form.css">
			<link rel="stylesheet" type="text/css" href="css/dbstyle.css">
	</head>
	<body  id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
	<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
                     <div class="container">
 
                          <div class="navbar-header">
                               <!-- lOGO TEXT HERE -->
                               <a href="#" class="navbar-brand">SpaceUnlimited</a>
                          </div>
 
                          <!-- MENU LINKS -->
                          <div class="collapse navbar-collapse">
                               <ul class="nav navbar-nav navbar-nav-first">
                                    <li><a href="homepage.html" class="smoothScroll">Home</a></li>
                                    <li><a href="#about" class="smoothScroll">About</a></li>
                                    <li><a href="#courses" class="smoothScroll">Events</a></li>
                                    <li><a href="login.html" class="smoothScroll">Login</a></li>
                               </ul>
 
                               <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#"><i class="fa fa-phone"></i> +234 908 1888 876</a></li>
                               </ul>
                          </div>
 
                     </div>

	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM info"); ?>

			<table>
				<thead>
					<tr>
						<th>Name</th>
						<th>Address</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				
				<?php while ($row = mysqli_fetch_array($results)) { ?>
					<tr>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td>
							<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
						</td>
						<td>
							<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
						</td>
					</tr>
				<?php } ?>
			</table>

			<form method="post" action="server.php" >

				<input type="hidden" name="id" value="<?php echo $id; ?>">

				<div class="input-group">
					<label>Name</label>
					<input type="text" name="name" value="<?php echo $name; ?>">
				</div>
				<div class="input-group">
					<label>Address</label>
					<input type="text" name="address" value="<?php echo $address; ?>">
				</div>
				<div class="input-group">

					<?php if ($update == true): ?>
						<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
					<?php else: ?>
						<button class="btn" type="submit" name="save" >Save</button>
					<?php endif ?>
				</div>
			</form>
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