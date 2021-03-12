<html>
<head>
	<title>UTA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/cataloguesystem.css">
	<link rel="icon" href="/image/logo.png" type="image/x-icon">
	<script src="https://use.fontawesome.com/4d70f4010c.js"></script>
</head>
<body id="wrapper">
<a href="/"><img class="logo" src="/image/logo.png"></a>
<nav class="navigation2" >
	<div class="row">
	<a href="/studenthome/{{$id->uid}}">Student Home</a>
	<a href="/about">About</a>
	<a href="http://rxl8224.uta.cloud/blog/">Forum</a>
	</div>
	<div class="row">
		<a href="/studentlist/{{$id->uid}}">List of Courses</a>
		<a href="/studentfeedback/{{$id->uid}}">Feedback</a>
		<a href="/studentrequest/{{$id->uid}}">Request Courses</a>
		<a href="/studentchat/{{$id->uid}}">Realtime Chat</a>
		<div class="nav-right">
			<a href="/"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
		</div>
	</div>
</nav>

<h1 style="text-align: center;">Feedback About the Courses</h1>
<form style="padding: 0px 50px" action= "/studentfeedback/{{ $id->uid }}" method="post">
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
	<label for="email"><b>Email</b></label>
	<input type="text" name="email"  value ="" > 
	<label for="cnum"><b>Course Number</b></label>
	<input type="text" name="cnum" value ="" >
	<label for="ctitle"><b>Title</b></label>
	<input type="text" name="ctitle" value ="" >
	<label for="message"><b>Message</b></label>
	<textarea placeholder="Give a Feedback About The Courses" name='message'></textarea>
	<div style="text-align: center;">
		<input type="submit" name="submit" value="Submit" >
	</div>
</form>

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