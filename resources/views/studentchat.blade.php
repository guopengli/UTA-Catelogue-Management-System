<html>
<head>
	<title>UTA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/cataloguesystem.css">
	<link rel="icon" href="/image/logo.png" type="image/x-icon">
  <script src="https://use.fontawesome.com/4d70f4010c.js"></script>
  <script defer src="http://localhost:3000/socket.io/socket.io.js"></script>
  <script defer src="/js/chat.js"></script>
  <style>
    #message-container {
      width: 80%;
      margin: auto;
    }

    #message-container div {
      background-color: #FFF;
      margin: auto;

      padding: 5px;
    }
    #send-container {
      position: absolute;
      padding-bottom: 30px;
      bottom:50px;
      width: 80%;
      margin-left: 10%;
      margin-right: 10%;
      display: inline-block;;
    }

    #message-input {
      margin: auto;

      width: 70%;
      flex-grow: 1;
    }
  </style>

<script>
	    var array = @json($id->username);
</script>
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

<h1 style="text-align: center;">Student Real Time chat</h1>
<div class="gallery2">
<div id="message-container"></div>
  <form id="send-container">
    <input type="text" id="message-input">
    <button type="submit" id="send-button">Send</button>
</form>
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

</html>