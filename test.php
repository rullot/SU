<?php
//include auth.php file on all secure pages
include("auth.php");
include("navbar.php");
?>


<div class="container">
 <title>Welcome Home</title>

</head>
<body>
<style>
.container {
    position: relative;
    font-family: Arial;

}
.text-block {
    position: absolute;
    bottom: 20px;
    right: 20px;
	background: rgba(0, 0, 0, 0.5);
    color: white;
    padding-left: 20px;
    padding-right: 20px;
}

.centered {
    position: absolute;
    top: 70%;
    left: 70%;
    transform: translate(-50%, -50%);
}
</style>
<div class="form">
<p   align="left"></br></p>
<div class="container">
  <img src="images/10.jpg" align="right" style="width:65%;">
  <div class="text-block"><h1>Welcome to SU cafeteria</h1>
  <p>where quality meets class.</p>
  <p>Our mission is to ensure that our food,<p> is of quality and affordable to everyone</p>
  <p>Our passion is to prepare dishes from whole</p> <p>and unprocessed ingredients </p> </div>
</div>

</body>
</html>
