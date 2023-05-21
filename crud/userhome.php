<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entreprenuers Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
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
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
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

</head>
<body>
    <!--Navigation -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="userhome.php">Entreprenuers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Success Stories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Businesses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Help</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- End of navigation--->
<div class="container">
<div class="p-3 mb-2 bg-light  text-dark">

<br>
  <h2>Entreprenuer's Dashboard</h2><br>


<div class="slideshow-container">

<div class="mySlides fade">
<center>
  <div class="numbertext">1 / 7</div>
  <img src="11.jpg" style="width:43%">
</center>
</div>

<div class="mySlides fade">
<center>
  <div class="numbertext">2 / 7</div>
  <img src="12.jpg" style="width:43%">
</center>
</div>

<div class="mySlides fade">
<center>
  <div class="numbertext">3 / 7</div>
  <img src="13.jpeg" style="width:43%">
</center>

</div>

<div class="mySlides fade">
<center>
  <div class="numbertext">4 / 7</div>
  <img src="18.jpg" style="width:43%">
</center>
</div>

<div class="mySlides fade">
<center>
  <div class="numbertext">5 / 7</div>
  <img src="15.jpg" style="width:43%">
</center>
</div>

<div class="mySlides fade">
<center>
  <div class="numbertext">6 / 7</div>
  <img src="16.jpg" style="width:43%">
</center>
</div>

<div class="mySlides fade">
<center>
  <div class="numbertext">7 / 7</div>
  <img src="17.jpg" style="width:43%">
</center>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 

  <br>
  <b>

  <button class="btn btn-warning" style="padding: 15px 32px"><a href="user.php" class="text-light">Add New Entreprenuer</a></button>
  <button class="btn btn-secondary" style="padding: 15px 32px"><a href="display.php" class="text-light">View Entreprenuer List</a></button>

</div>
</div>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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


<!-- 

<div class="container">
  <h1 style="color:#FF1493;text-align:center;margin:25px">Women Entreprenuership Management System</h1>

  <div class="row" style="display:flex">
  <div class="column" style="float:left;width:33.33%;padding:1px;flex:33.33%">
    <img src="1.jpg" style="width:80%">
  </div>
  <div class="column" style="float:left;width:33.33%;padding:1px;flex:33.33%">
    <img src="14.jpg" style="width:80%;height:80%">
  </div>
  <div class="column" style="float:left;width:33.33%;padding:1px;flex:33.33%">
    <img src="2.jpg" style="width:80%">
  </div>

  --->

</body>
</html>