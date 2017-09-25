<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
<style type="text/css">
*{
	margin: 0;
	padding: 0;
}
body{
  background-color: black;
  font-size: 16px;
  font-family: sans-serif,arial;
}
header{
	width: 1000px;
	height: 120px;
	margin: 0 auto;
	position: relative;
	background-color: black;
}
footer {
	font-color: white	;
	font-variant: small-caps;
	font-style: oblique;
	text-decoration: underline; 
    text-decoration-style: solid sans-serif;
	width: 1000px;
	height: 120px;
	margin: 0 auto;
	position: relative;
	flex: 0;
    padding: 10px;
    color: #fff;
	background: #222;
	box-shadow: 0px 2px 5px 0px grey;
	text-align: center;
	background: linear-gradient(darkgrey 20%,black 90%);
}
.logo{
	position: absolute;
	left: 20px;
	top: 20px;
}
.nav{
	width: 1000px;
	height: 60px;
	margin: 0 auto;
	border-radius: 5px;
}
ul li{
	list-style: none;
	width: 200px;
	line-height: 60px;
	position: relative;
	background: #222;
	box-shadow: 0px 2px 5px 0px grey;
	text-align: center;
	float: left;
	background: linear-gradient(darkgrey 20%,black 90%);
}
ul li ul{
	position: absolute;
}
.nav > ul > li:nth-of-type(1){
	border-radius: 5px 0px 0px 5px;
}
.nav > ul > li:nth-of-type(5){
	border-radius: 0px 5px 5px 0px;
}
ul li a{
	color: #fff;
	width: 200px;
	height: 58px;
	display: inline-block;
	text-decoration: none;
}
ul li a:hover{
	font-weight: bold;
	border-bottom: 2px solid #fff;
}
ul li ul{
	display: none;
}
.nav ul li:hover ul{
	display: block;
}
.fa{
	margin-right: 5px;
}
.fa-list.modify{
	display: none;
	font-size: 35px;
	position: absolute;
	right: 30px;
	top:60px;
	cursor: pointer;
}
.container{
	width: 1000px;
	height: 200px;
	margin: 0 auto;
	padding:20px 20px;
}
@media screen and (max-width: 480px){
	header{
		width: 100%;
	}
	.nav{
		display: none;
		width: 100%;
		height: auto;
	}
	ul li{
		width: 100%;
		float: none;
	}
	ul li a{
		width: 100%;
		display: block;
	}
	ul li ul{
		position: static;
	}
	ul li ul li a{
		background: #222;
	}
	.fa-list.modify{
		display: block;
	}
	.container{
		width: 100%;
		height: auto;
	}
	/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
}
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}


/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;

}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-left: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
strong{
  color: white;
  background-color: black;
  padding: 3px;
  border: 3em;
  margin: 2px;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
/* booked */
nav{
	background: url('00.jpg');
	text-align: center;
	font-variant: small-caps;
    width: 1000px;
    height: 160px;
    margin: 0 auto;
    position: relative;
    flex: 0;
}
table{
	margin: 2px;
	border: 3px;
	text-align: center;
	display: inline-block;
}
table, th, td {
   border: 2px solid #4e1003;
   display: all;
}
td{
	color: white;
}
th{
	color: red;
	font-size: 17px;
}
h2{
	color: white;
}
a{
	color: white;
}
h1 {
	text-align: center;
	color: white;
	padding: 10px;
 	color: white;
    height: 70px;
    width: 80px;
    background: linear-gradient(darkgrey 20%,black 80%);
}
.center {
    margin: auto;
    width: 60%;
    border: 3px solid #efe5e5;
    padding: 10px;
    display: inline-table;
    align-items: center;
}	
</style>
<body>

<header>
	<div class="logo"><a href="home.html"><img src="44.png"></a></div>
	<div class="menu"><span class="fa fa-list modify"></span></div>
	<link rel="stylesheet" type="text/css" href="red.css">

</header>
<nav class="nav">
	<ul>
		<li><a href="home.html"><span class="fa fa-home"></span>Home</a></li>
		<li><a href="gwapo.php"><span class="fa fa-contact"></span>Contact</a>
		</li>
		<li><a href="login.php"><span class="fa fa-signin"></span>Sign in</a></li>
		<li><a href="register.php"><span class="fa fa-file-signup"></span>Sign up</a></li>
		<li><a href="#"><span class="fa fa-info"></span>About</a></li>
	</ul>
</nav>
<br><center>
<h2>Well done!! Thank you for registration!</h2></center>

<section class="container">
</section>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
	var menu = false;
	$(".fa-list.modify").click(function(){
		if(menu == false){
			$(".nav").fadeIn();
			menu = true;
		}else{
			$(".nav").fadeOut();
			menu = false;
		}
	})	

</script>

<nav align="center">
	<h1 class="center">RESERVED TICKET</h1>
	<br>
	<br>
	<table style="color: grey" >
	<tr>
	<th>Firstname</th>
	<th>Lastname</th>
	<th>Email</th>
	<th>Date</th>
	<th>Flight  #</th>
	<th>Destination</th>
	<th>Fare</th>
	<th>Booked</th>
	</tr>
	  <tr>
        <td><?php echo $_GET['firstname'];?></td>
		<td><?php echo $_GET['lastname'];?></td>
		<td><?php echo $_GET['email'];?></td>
		<td><?php echo $_GET['dte'];?></td>
		<td><?php echo $_GET['flight'];?></td>
	    <td><?php echo $_GET['destination'];?></td>
	    <td><?php echo $_GET['fare'];?></td>
	    <td>Done</td>
	    </tr>
	    </table>
	    </nav>
	 
<br>
<br>
<br>
<br>
<br>
<footer><a href="#">
<br>
<br>
All rights reserved &copy; FlightReservation.com</a></footer>
</html>