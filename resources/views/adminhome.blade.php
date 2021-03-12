
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
	<a href="/">Home</a>
	<a href="/about">About</a>
	<a href="http://rxl8224.uta.cloud/blog/">Forum</a>
	</div>
	<div class="row">
		<a href="/adminadd">Add user</a>
		<a href="/adminhome">Users</a>
		<div class="nav-right">
			<a href="{{ url('/')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
		</div>
	</div>
</nav>


<div class="heading2">
	<h2>Welcome Admin</h2>
	<h4>We got courses for every taste!!</h4>
</div>


<div class="gallery2">






@foreach($users as $data)

	<div class='card2'>
	<img src='./image/avatar.png' alt='Avatar' >
	<div class='container2'>
	<h2><b>{{$data['username']}}</b></h2>
	<p style='margin-bottom: 0px;'>{{$data['role']}}</p>
	<p style='margin-bottom: 10px; '>{{$data['email']}}</p>
	<a href="/adminedit/{{$data['uid']}}"><button style='margin-right: 10px; margin-buttom: 10px;'>Edit</button></a>
	<a href="/admindelete/{{$data['uid']}}"><button style='margin-left: 0px; background-color: #a13737'>Delete</button></a>
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
</div>


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