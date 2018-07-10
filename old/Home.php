<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
<body>

<h2 class="w3-center">Welcome to SU Cafeteria</h2>

<div class=".container" >
  <img class="mySlides w3-animate-fading" src="images/3.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/2.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading"  src="images/1.jpg"
  style="width:100%">
</div>

<style>
.container {
   background-color: red;
   position: center;
   width: 80%;
   
   padding-top: 62.5%; /* 8:5 Aspect Ratio */
}

.text {
   position:  absolute;
   top: 0;
   left: 0;
   bottom: 0;
   right: 0;
   text-align: center;
   font-size: 20px;
   color: white;
}
</style>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
}
</script>

</body>
</html>
