<!DOCTYPE html>

<html lang="en">

<head>
	<title>MoSA</title>
	<meta charset="UTF-8">
	<meta name="description" content="Meuseum of Science in Austin">
	<meta name="author" content="MoSA Team">
	<link rel = "stylesheet" href="..\global_assets\master.css">
	<link rel = "stylesheet" href="contact.css">
</head> 

<body>
	<header class="header_nav">
		<div class="header_nav_upper" >
			<a href = "..\Home\home.html"><img id = "mosa" src = "..\global_assets\mosa_png.png"></a>
			
		</div>
	
		<div class="header_nav_lower">
			<nav id="navbar">
				<a href="..\.\Plan Your Visit\plan.html">Plan your visit</a>
				<a href="..\.\Exhibitions\exhibitions.html">Exhibitions</a>
				<a href="..\.\Store\store.html">Store</a>
				<a href="..\.\Contact_Us\contact.php">Contact us</a>	
			</nav>
		</div>
	</header>
	

<body>

			<!-- Start Contact Form -->

			<form action="./submit.php" method="POST">
				<h1>About US</h1>
			<p>Museum of Space at Austin (MoSA) is a fictional space museum, created by the effort of a team of undergraduate students at the University of Texas at Austin. The team consists of <strong style="color: grey"> Nelly Hernandez </strong> a 3rd year American studies major, <strong style="color: grey">Maryam Hussaini</strong> a senior physics and astronomy major, <strong style="color: grey">Calvin Guo</strong> and <strong style="color: grey">Jonathan Tao</strong> 3rd year mechanical engineer students.</p><br><br>
				<h3> Ask us questions using this form and we’ll get back to you shortly. We will respond to you via the email you provide.</h3>
		<?php
			if (isset ($_COOKIE["contact_info"]))
			{
			
			$n = $_COOKIE["contact_info"];
			print<<<form
			
			<label>Name:</label><input type="text" name = "name" value = $n>
			<label>Email Address:</label><input type = "Email" name = "email">
			form;
			}
			else{
			print<<<form
			<label>Name:</label><input type="text" name = "name">
			<label>Email Address:</label><input type = "Email" name = "email">
			form;
			}
		?>

      	<label>Subject:</label><input type="text" name = "subject">
      	<label>Message:</label><textarea name="message" cols="40" rows="5"></textarea>
      	<input type="submit" name="submit" value="Send">
			</form>





		

		<footer class="footer">
	  		<p>Copyright &copy 2021 All Rights Reserved by MoSA. Last updated: March 2021</p>
	  		
		</footer>


		<script>
		window.onscroll = function() {myFunction()};

		var navbar = document.getElementById("navbar");
		var sticky = navbar.offsetTop;

		function myFunction() {
		  if (window.pageYOffset >= sticky) {
		    navbar.classList.add("sticky")
		  } else {
		    navbar.classList.remove("sticky");
		  }
		}
		</script>

</body>
</html>
