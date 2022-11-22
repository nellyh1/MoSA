<?php
  	$name = $_POST["name"];
  	$email = $_POST["email"];
  	$subject = $_POST["subject"];
  	$message = $_POST["message"];
  if (!isset ($_COOKIE["contact_info"]))
  {

    setcookie ("contact_info", $name, time()+3600*24*365);
  }


  if ($fh = fopen ("./messages.txt", "a"))
  {
    fwrite ($fh, "\n $name  $email $subject \n $message \n \n \n");
    fclose ($fh);
  }
?>

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
				<a href="..\.\Contact us\contact.html">Contact us</a>	
			</nav>
		</div>
	</header>
	

<body>
	<br><br>
	<p style="color: white; width: 70%; margin-left: auto; margin-right: auto; font-size: 20pt">Thank you for reaching out! A MoSA team memeber will email you back soon!</p><br><br><br><br>





		

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
