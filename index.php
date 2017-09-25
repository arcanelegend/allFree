<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
	<title>Reservation</title>
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

<section class="container">
</section>
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

<div class="header">
		<h6>Reservation</h6>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong style="color: red"><?php echo $_SESSION['username']; ?></strong> you may now reserve your flight schedule</p>
			<p> <a href="index.php?logout='1'" style="color: #de8a0c;">logout</a> </p>
		<?php endif ?>
	</div>
<br>
<br>

<style type="text/css">
*{
  margin: 0;
  padding: 0;
}
h2{
  padding: 10px;
  color: white;
  height: 50px;
  width: 300px;
  background: linear-gradient(darkgrey 20%,black 80%);
}
header{
  width: 1000px;
  height: 120px;
  margin: 0 auto;
  position: relative;
  background-color: black;
}
footer {
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
  background: linear-gradient(darkgrey 20%,black 80%);
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
  background: linear-gradient(darkgrey 20%,black 80%);
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

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
p {
    	font-size: 30px;
    	color: white;
}
h5 {
	font-size: 30px;
    border: 2px;   
}
h6 {
	text-align: center;
	color: white;
	font-size: 30px;
	font-family: sans-serif;
}
table, th, td {
    border: 3px solid white;
    border-radius: 20px;
    font-size: 25px;
    padding: 7px;
}
input[type=text], select {
    text-align :center;
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: center;
    border: 1px solid #ccc;
    border-radius: 15px;
  
    box-sizing: border-box;
}
input[type=submit] {
    width: 25%;
    background-color: #0A22CF;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #00000;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0px;
}

* {
	margin: 0px;
	padding: 0px;
}
.header {
	width: 30%;
	margin: 10px auto 0px;
	color: white;
	background: #440f0f;
	text-align: center;
	border: 3px solid #440f0f;
	border-bottom: none;
	border-radius: 50px 50px 0px 0px;
	padding: 20px;
}
form, .content {
	width: 30%;
	margin: 0px auto;
	padding: 20px;
	border: 3px solid #440f0f;
	background: url('00.jpg');
	border-radius: 0px 0px 50px 50px;
}
.input-group {
	margin: 10px 0px 10px 0px;
}

.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
  text-align: center;
}*{
  margin: 0;
  padding: 0;
}
body{
  background: black;
  font-size: 16px;
  font-family: sans-serif,arial;
}
header{
  width: 1000px;
  height: 120px;
  margin: 0 auto;
  position: relative;
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
  background: linear-gradient(darkgrey 20%,black 80%);
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

}

</style>

<center><h2>AVAILABLE SCHEDULE</h2>
<br>
<table>
  <colgroup>
    <col span="1" style="background-color:blue">
    <col span="1" style="background-color:red">
    <col span="1" style="background-color:grey">
    <col span="1" style="background-color:green">
    <col span="1" style="background-color:orange">
    <col style="background-color:yellow">
  </colgroup>
  <div>
  <tr style="background-color: #373D3C">
    <th>No.</th>
    <th>Flight no.</th>
    <th>Destination</th>
    <th>Time</th>
    <th>Fare</th>
  </tr></div>
   <tr>
    <th>1</th>
    <th>AU 1023</th>
    <th>Australia</th>
    <th>11:00AM</th>
    <th>₱100,000</th>
  </tr>
 <tr>
    <th>2</th>
    <th>BU 1024</th>
    <th>Canada</th>
    <th>10:00AM</th>
    <th>₱23,000</th>
  </tr>
 <tr>
    <th>3</th>
    <th>GU 1025</th>
    <th>USA</th>
    <th>3:00PM</th>
    <th>₱900,000</th>
  </tr>
 <tr>
    <th>4</th>
    <th>PU 1026</th>
    <th>New York</th>
    <th>5:00PM</th>
    <th>₱32,000</th>
  </tr> 
</table>
</center>

    <script>
    $(function(){
        $( "#datepicker" ).datepicker();
        $("#icon").click(function() { 
            $("#datepicker").datepicker( "show" );
        })
    });
</script>

<center>
<br>
    <h2>BOOKING</h2>
    <br>
<div>
  <form action="newpage.php" method="get">
    <label for="fname"></label> 
    <input type="text" id="fname" name="firstname" placeholder= "First name" required>

    <label for="lname"></label> 
    <input type="text" id="lname" name="lastname" placeholder= "Last name" required>

  <label for="email"></label> <br>
    <input type="text" id="Email" name="email" placeholder= "E-mail" required>
<br>

 <p>Date for flight</p>


<label for="From"></label> <br>
    <select id="country" name="dte">
      <option value="11:00AM">11:00AM</option>
      <option value="10:00AM">10:00AM</option>
      <option value="3:00PM">3:00PM</option>
    <option value="5:00PM">5:00PM</option>
    </select> 
<br>

<p id="demo"></p>
 <p>Flight Number</p>
 
 
 <label for="Flight #"></label> <br>
    <select id="country" name="flight">
      <option value="AU 1023">AU 1023</option>
      <option value="BU 1024">BU 1024</option>
      <option value="GU 1025">GU 1025</option>
    <option value="PU 1026">PU 1026</option>
    </select> 
    <br>
   <input type="text" id="datepicker" name="fare" size='9' placeholder="Fare"/>
  <br>
 <p>Destnation</p>
 <label for="Flight #"></label> <br>
    <select id="country" name="destination">
      <option value="Australia">Australia</option>
      <option value="Canada">Canada</option>
      <option value="USA">USA</option>
    <option value="New York">New York</option>
    </select> 
    <input type="submit" value="Submit" placeholder ="">
  </form>
</div>
</center>
</body>
<br>
<br>
<br>
<br>
<footer><a href="#">
<br>
<br>
All rights reserved &copy; FlightReservation.com</a></footer>
</html>