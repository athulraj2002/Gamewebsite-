<!DOCTYPE html>
<html>
<head>
  <title>PHASE II</title>
  <link rel="icon" href="logo2.png">
<link rel="stylesheet" href="home.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style type="text/css">
body,html{
  margin: 0px;
  padding: 0px;
  width: 100%;
  height: 100%;
  font-family: arial;
}
.bg {
    /* The image used */
    background-image: url("background.jpg");
   background-color: #dadada;

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;

    padding-top: 6%;
}
  #back{
padding: 25px;
    width: 250px;
    text-decoration: none;
    font-size: 30px;
    background-color: green;
    color: white;
    border: 2px solid green;
    border-radius: 20px;
    cursor: pointer;
    text-decoration: none;
    margin-bottom: 50px;
    box-shadow: 0 0 20px 0px #337d36;
  }
</style>
<body>
  <div class="bg" >
   
   <div style="   
    border-radius: 20px;
    /* margin: 10%; */
    margin-bottom: 8%;
    margin-left: 10%;
    margin-right: 10%;
        box-shadow: 0px 1px 20px 0px #cacaca;">  
    <p style="font-size: 80px;
  
    margin: 0px;
  padding: 21% auto;
    padding: 6%;" id="text">Play exciting games and have a chance to win amazing prices :)</p>
  </div>
    <a href="./2048/index.php"><button id="back">Start</button></a>


</div>
	<div class="a">
		<div id="main" style="display: none;">
    


    </div>
			
	</div>
		
<?php 
session_start();
unset($_SESSION['user']);
?>
  
</body>
</html>