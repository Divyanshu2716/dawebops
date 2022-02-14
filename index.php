


<!DOCTYPE html>
<html>
<head><title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="style1.css">
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
           <ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="admin/login.php">Login Dealer</a></li>
  <li><a href="admin/login.php">Login Driver</a></li>
  <li><a href="admin/index.php">REGISTRATION</a></li>
</ul> 
        </div>
    </div>
</div>
<div class="container-fluid" style="padding: 5px;">
    <div class="row">
        <div class="col-md-6">
            <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="img/4.jpg" width="800" height="100">
  </div>

  <div class="mySlides fade">
    <img src="img/2.jpg" width="800" height="100">
  </div>

  <div class="mySlides fade">
    <img src="img/3.jpg" width="800" height="100">
      </div>

  <!-- Next and previous buttons -->
</div>
<div class="col-md-6">
            

  <!-- Next and previous buttons -->
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center;">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
        </div>
    </div>
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
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

</body>
</html>






                                      
                                   