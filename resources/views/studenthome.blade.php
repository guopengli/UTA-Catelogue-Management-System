
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

	@foreach($data as $data)
		<h2>Welcome {{$data->username}}</h2>
	@endforeach
	<h4>We got courses for every taste!!</h4>
</div>


<div class="gallery">
	<div class="card">
	  <img src="/image/cse_department.jpg" alt="Avatar" >
	  <div class="container">
	    <h2><b>Computer Science and Engineering</b></h2>
	    <p class="adjustp">Offering bachelor's, Master's, and Ph.D. degrees and a minor in Computer Science and Engineering.</p>
	    <button type="button" class="collapsible">Open Collapsible</button>
		<div class="content">
		  <p>Lorem ipsum...</p>
		</div>
	  </div>
	</div>

	<div class="card">
	  <img src="/image/bio_science_department.png" alt="Avatar">
	  <div class="container">
	    <h2><b>Biology</b></h2>
	    <p>It provides interdisciplinary educational opportunities and research collaborations, within the biological, mathematical, and physical sciences</p>
	    <button type="button" class="collapsible">Open Collapsible</button>
		<div class="content">
		  <p>Lorem ipsum...</p>
		</div>
	  </div>
	</div>

	<div class="card">
	  <img src="/image/uta_music_department.jpg" alt="Avatar" style="width:100%">
	  <div class="container">
	    <h2><b>Music</b></h2>
	    <p>The University of Texas at Arlington Department of Music is an exciting program offering both graduate and undergraduate degrees in music.</p>
	    <button type="button" class="collapsible">Open Collapsible</button>
		<div class="content">
		  <p>Lorem ipsum...</p>
		</div>
	  </div>
	</div>

	<div class="card">
		<img src="/image/english_deaprtment.jpg" alt="Avatar">
		<div class="container">
		  <h2><b>English</b></h2>
		  <p>Department of English prepares students to succeed in a global economy and to participate in a global democracy.</p>
		  <button type="button" class="collapsible">Open Collapsible</button>
		  <div class="content">
			<p>Lorem ipsum...</p>
		  </div>
		</div>
	  </div>
</div>


<button class="collapsible expand" >See more</button>
	<div class="content1">
	<div class="gallery">
		<div class="card">
		  <img src="/image/chemistry_department.jpg" alt="Avatar" >
		  <div class="container">
		    <h2><b>chemistry & Biochemistry</b></h2>
		    <p>We have a truly outstanding group of faculty members with a wide array of expertise, a dedicated staff</p>
		    <button type="button" class="collapsible">Open Collapsible</button>
			<div class="content">
			  <p>Lorem ipsum...</p>
			</div>
		  </div>
		</div>

		<div class="card">
			<img src="/image/art_department.jpg" alt="Avatar">
			<div class="container">
			  <h2><b>Art</b></h2>
			  <p>Department of Art recognized research programs provide outstanding undergraduate and graduate training in theoretical, experimental and applied art</p>
			  
		    <button type="button" class="collapsible">Open Collapsible</button>
			<div class="content">
			  <p>Lorem ipsum...</p>
			</div>
			</div>
		  </div>

		<div class="card">
		  <img src="/image/CAPPA_DEPARTMENT.jpg" alt="Avatar" style="width:100%">
		  <div class="container">
		    <h2><b>CAPPA</b></h2>
		    <p>CAPPA is composed of the School of Architecture, Department of Public Affairs and Planning and Program of Landscape Architecture</p>
		    <button type="button" class="collapsible">Open Collapsible</button>
			<div class="content">
			  <p>Lorem ipsum...</p>
			</div>
		  </div>
		</div>


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