<!DOCTYPE html>

<html lang="en">

<head>
	<title>MoSA</title>
	<meta charset="UTF-8">
	<meta name="description" content="Meuseum of Science in Austin">
	<meta name="author" content="MoSA Team">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel= "stylesheet" href="checkout.css">
  <link rel = "stylesheet" href="../global_assets/master.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">


	
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
<div class = "cart">
    <div class = "cart-logo">
    <i class="fas fa-shopping-cart"></i>
    </div>

    <h2>Shopping Cart</h2>
    <div class = "cart-items">
      <p>Hey</p>
</div>
    <div id = "total">
      <p>Cart Total: </p>
</div>

</div>

<div class="wrapper">
  <div class="payment">
    <div class="payment-logo">
      <p><img src = "Assets/white_logo.PNG"></p>
    </div>
    
    
    <h2>Payment Information</h2>
    <div class="form">
      <div class="card space icon-relative">
        <label class="label">Card holder:</label>
        <input type="text" class="input" placeholder="Enter name">
        <i class="fas fa-user"></i>
      </div>
      <div class="card space icon-relative">
        <label class="label">Card number:</label>
        <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="0000 0000 0000 0000">
        <i class="far fa-credit-card"></i>
      </div>
      <div class="card-grp space">
        <div class="card-item icon-relative">
          <label class="label">Expiration date:</label>
          <input type="text" name="expiry-data" class="input"  placeholder="00 / 00">
          <i class="far fa-calendar-alt"></i>
        </div>
        <div class="card-item icon-relative">
          <label class="label">CVC:</label>
          <input type="text" class="input" data-mask="000" placeholder="000">
          <i class="fas fa-lock"></i>
        </div>
      </div>
        
      <div class="btn">
        Complete Purchase
      </div> 
      
    </div>
  </div>
</div>




<footer class="footer" style = "bottom: 0px; position: fixed;">
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src = https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js></script>


</body>

</html>