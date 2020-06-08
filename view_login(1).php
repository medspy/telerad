<!DOCTYPE html>
<html>
<head><meta charset="windows-1252">
<html xmlns:m="http://schemas.microsoft.com/office/2004/12/omml">
<meta http-equiv="Content-Language" content="en-us">
<meta content="Microsoft FrontPage 12.0" name="Madhu">
<TITLE>MEDSPY</TITLE>
<link href="med/images/logo.jpg" rel="shortcut icon" type="images/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: auto%;
  border: 2px solid blue;
  background: linear-gradient(to bottom, #66ffff 0%, #ffff66 100%);
   border-top-left-radius: 25px;
   border-top-right-radius: 25px;
   border-bottom-left-radius: 25px;
   border-bottom-right-radius: 25px;
	}

/* Style the header */
.header {
  background-image: url("./med/images/header1.gif");
   border-top-left-radius: 25px;
   border-top-right-radius: 25px;
  padding: 1px;
  text-align: center;
  font-size: 20px;
  color: #FFFF00;
 }

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background: linear-gradient(to bottom, #00ffff 0%, #6600cc 100%);
}

/* Style the topnav links */
.topnav a {
  float: center;
  display: block;
  color: #4169E1;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #4169E1;
  color: #4169E1;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 25%;
}

/* Middle column */
.column.middle {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.button {
  border-radius: 8px;
  background-color: #FF1493;
  border: none;
  color: #fff;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: auto;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}


/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}

/* Style the footer */
.footer {
     background: linear-gradient(to bottom, #0000ff 0%, #00ffff 100%);
     border-bottom-left-radius: 25px;
     border-bottom-right-radius: 25px;
     padding: 20px;
     text-align: center;
     color:white;
}
.blink_me {
    -webkit-animation-name: blinker;
    -webkit-animation-duration: 3s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;

    -moz-animation-name: blinker;
    -moz-animation-duration: 3s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: infinite;

    animation-name: blinker;
    animation-duration: 3s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}
@-moz-keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

@-webkit-keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

@keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

</style>

<div class="header">
  <h1>MED SPY</h1>
  <p><a>Easy way for online reporting services of X-RAY, MRI, CT etc..24x7...!!!
</div>


<style>

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  background-color: #E0FFFF;
  color: #000080;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #000080;
  color: white;
}

.dropdown-content a:hover {
  background-color:#F08080;
  color: white;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>

<div class="topnav" id="myTopnav">

  <a href="#home" class="dropbtn">Home</a>
   <div class="dropdown">
    <button class="dropbtn">About us 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
   <div class="dropdown">
    <button class="dropbtn">Services
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Book an appointment
      <i class="fa fa-caret-down"><img src="med/images/new1.gif" width="40" height="20"></a></i>
    </button>
    <div class="dropdown-content">
        <a href="med/x_ray.pdf">X-RAY, CT, MRI, US</a>
      <a href="http://www.medspy.in/med/coming.php">Blood & Urine test</a>
<a href="http://www.medspy.in/med/coming.php">Consultation</a>
      <a href="http://www.medspy.in/med/coming.php">Link 1</a>
  <a href="http://www.medspy.in/med/coming.php">Link 2</a>
<a href="http://www.medspy.in/med/coming.php">Link 3</a>
    </div>
	    </div>
	 <div class="dropdown">
    <button class="dropbtn">Facilities
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    
  </div> 
  </div> 
  <a href="#about">Contact us</a>
  </div>
</div>
<marquee behavior="blink" scrolldelay="50" scrollamount="5" width="100%" height="30px"bgcolor="#FFA500" >Stay Safe and Healthy at Home...!</marquee>
<div class="row">
  <div class="column side">
      
        <style>
.btn-group button {
  background-color: #00BFFF; /* Green background */
  border: 2px solid green; /* Green border */
  color: white; /* White text */
  padding: 14px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  width: 100%; /* Set a width if needed */
  display: block; /* Make the buttons appear below each other */
  font-size: 20px;
}

.btn-group button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #F08080;
}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: green;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 8px;
  outline: none;
}

.input-field:focus {
  border: 2px solid green;
}

/* Set a style for the submit button */
.btn {
  background-color:green;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
    text-align: center;
  font-size: 15px;
  padding: 10px;
  
}

.btn:hover {
    background-color:#B22222;
  opacity: 2;
}
</style>
<body>
<h1>Our Clients</h1>
 <hr style="color:red"; height:10>
<div class="btn-group">
  <button><a href="http://www.medspy.in/med">Delhi Diagnostics<img src="med/images/new1.gif" width="40" height="20"> </a>
  <button><a href="http://www.medspy.in/med/COMING.pdf">Book Appointment<img src="med/images/new1.gif" width="40" height="20"> </a>
   <button><a href="http://www.medspy.in/med/bmi.htm">BMI Calculator<img src="med/images/new1.gif" width="40" height="20"> </a>
    <button><a href="http://www.medspy.in/med/coming.php">Ambulance on call<img src="med/images/new1.gif" width="40" height="20"> </a>
    <button><a href="http://www.medspy.in/med/coming.php">Blood Donors<img src="med/images/new1.gif" width="40" height="20"> </a>
    <button><a href="http://www.medspy.in/upload.php">Upload files<img src="med/images/new1.gif" width="40" height="20"> </a>
     <button><a href="http://www.medspy.in/uploads">Doctor Panel<img src="med/images/new1.gif" width="40" height="20"> </a>
  
</div>

  </div>
  
  <div class="column middle">
<meta name="viewport" content="width=device-width, initial-scale=1">
 </script>

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #FF4500;
  font-size: 70px;
  padding: 10px 14px;
  position: absolute;
  bottom: 14px;
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
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #EFEFEF;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
   <img src="med/images/lab1.jpg" style="width:100%">
  <div class="text">.</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
 <img src="med/images/drroom.jpg" style="width:100%">
  <div class="text">..</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="med/images/sample.jpg" style="width:100%">
  <div class="text">...</div>
</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
  
</div>


  </div>
  
  <div class="column side">
    <h2>Login Section</h2>
  
   <hr style="color:red"; height:10>
    
        <header>
                        <h2>Medspy Login</h2>
        <?php echo validation_errors(); ?>
        
        <?php echo form_open('login/checklogin'); ?>
         <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" placeholder="Email" type="email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
     <input class="input-field" placeholder="Password" type="password" name="password">
  </div>
                        <button type="submit" class="btn">LOGIN</button>
               
                <br><br>
            </section>
        </form>
		
    <h2>Contact us</h2>
	 
   <hr style="color:red"; height:10>
   Director Dr Anish Choudhary
MD(Radiology)
  </p> Mobile no: +91 89868 00007 </p>
   
   Gmail: delhitelerad@gmail.com
    
        <header>
    </div>
  </div>
</div>

<div class="footer">
   <a href="www.medspy.in">HOME</a><br />                                            
                           <span>Copyright © 2020 Medspy - All Rights Reserved</span>       
</div>
   <style>

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: green;
}
</style>


<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

</strong>.</div>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>           
</body>
</html>
