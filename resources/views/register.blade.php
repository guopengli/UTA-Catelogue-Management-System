<!DOCTYPE html>
<html>
<head>
	<title>UTA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/cataloguesystem.css">
	<link rel="icon" href="/image/logo.png" type="image/x-icon">
	<script src="https://use.fontawesome.com/4d70f4010c.js"></script>
</head>
<body id="wrapper">
<a href="index.php"><img class="logo" src="./image/logo.png"></a>
<nav class="navigation" >
	<a href="/" class="navactive">Home</a>
	<a href="/about">About</a>
	<a href="http://rxl8224.uta.cloud/blog/">Forum</a>
	<div class="nav-right">
		<a href="/login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
		<a href="/register"><i class="fa fa-user-circle"></i> Register</a>
	</div>
</nav>
<div class="background4">
	<div class="signin2">

	  <form action= "register" method="post" >
	  @csrf
	  	<ul>
		@foreach($errors->all() as $e)
			<li style="color:#4f0e14; background-color:#e0bfc2; margin-top:10px; padding:12px;   font-size: 10px;" >{{$e}}</li>
		@endforeach
		</ul>
		@if(\Session::has('success'))
			<div >
				<p style="color:#c3e3cb; background-color:#10471d;; margin-top:10px; padding:12px;   font-size: 10px; text-align: center;"  ><b>{{\Session::get('success')}}</b></p>
			</div>
		@endif
	    <label for="username"><b>Username</b></label>
	    <input type="text" name="username" placeholder="Username" >
	    <label for="password"><b>Password</b></label>
	    <input type="text" name="password" placeholder="Password" >
	    <label for="password_confirmation"><b>Confirm Password</b></label>
	    <input type="text" name="password_confirmation" placeholder="Confirm Password" >
	    <label for="email"><b>Email</b></label>
	    <input type="text" name="email" placeholder="Email" >
	    <label for="role"><b>Role</b></label>
		<select name="role" >
		    <option value="student">Student</option>
		    <option value="staff">Staff</option>
		    <option value="admin">Admin</option>
		</select>
	    <input type="submit" value="Register" name="submit" onmouseover="checkinput()">
	  </form>
	</div>
</div>


<footer>
	<div class="row">
		<div class="column" style="color:#e9ecf0;">
		  <!-- <h2></h2> -->
		  <button type="button" >Contact Us</button>
		</div>
		<div class="column" style="color:#e9ecf0;">
		  <!-- <h2>Column 2</h2> -->
		  <!-- <p>People Directory</p> -->
		  <button type="button" >People Directory</button>
		</div>
		<div class="column" style="color:#e9ecf0;">
		  <!-- <h2>Column 3</h2> -->
		  <button type="button" >Campus Map</button>
		</div>
		<div class="column" style="color:#e9ecf0;">
		  <!-- <h2>Column 4</h2> -->
		  <p>The University of Texas
			  at Arlington
			701 S. Nedderman Drive
			Arlington, TX 76019
			817-272-2011</p>
		<!-- </div>/n<div> -->
		</div>
		<a href="#" class="fa fa-youtube footericon"></a>
		<!-- <a href="#" class="fa fa-twitter"></a> -->
		<a href="#" class="fa fa-facebook footericon"></a>
		<div>
		   <p style="color:#e9ecf0;">@2020 The University of Texas at Arlington</p>
		</div>
		<div class="row">
			<div class="column"></div>
			<div class="column"></div>
			<div class="column"></div>
			<div class="column"></div>
		</div>
	</div>
</footer>


</body>

<?php
?>
<script>
function myFunction() {
  var x = document.getElementById("myNav");
  if (x.className === "navigation") {
    x.className += " responsive";
  } else {
    x.className = "navigation";
  }
}

</script>

</html>