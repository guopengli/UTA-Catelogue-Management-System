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
<div class="heading2">
	<h2>Course Offered</h2>
</div>

<div class="gallery2">
@foreach($course as $course)
	<div class='card2'>
	<img src='/image/course.png' alt='Avatar' >
	<div class='container2'>
	<h2><b>{{$course->cnum}}</b></h2>
	<p>{{$course->ctitle}}</p>
	</div>
	</div>		
@endforeach
<footer class="hideFooter">
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
var coll = document.getElementsByClassName("collapsible");
var i;
	
for (i = 0; i < coll.length; i++) {
	coll[i].addEventListener("click", function() {
	this.classList.toggle("active");
	var content = this.nextElementSibling;
	if (content.style.display === "block") {
		content.style.display = "none";
	} else {
		content.style.display = "block";
	}
	});
}
</script>

</html>