<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<title>
		Form 1
	</title>
	<style type="text/css">

	body,html{
  margin: 0px;
  padding: 0px;
  width: 100%;
  height: 100%;
  font-family: arial;
}
		.background{
			background-image: url("background2.jpeg");
  

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;

    padding-top: 6%;
		}
		.box{
			    width: 30%;
    padding: 10px;
  
    background-color: #5656561f;
    /* border: 1px solid; */
    border-radius: 10px;
    margin: 70px auto;
        box-shadow: 0 0 20px 0px #4c4c4cad
		}
		input[type=submit]{
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 16px 32px;
      text-decoration: none;
      margin: 17px 0px 20px 20px;
      cursor: pointer;
      border-radius: 10px;
      font-size: large;
      }
      input[type=submit]:hover {
      background-color: #45a049;
      }
      input[type=text] {
      width: 80%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 3px solid #fff;
      -webkit-transition: 0.5s;
      transition: 0.3s;
      outline: none;
      color: #000;
      background-color: #ffffff00
      }
      input[type=text]:focus {
      border: 3px solid grey;
      }
      input[type=email] {
  width: 80%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 3px solid #fff;
      -webkit-transition: 0.5s;
      transition: 0.3s;
      outline: none;
      color: #000;
      background-color: #ffffff00
      }
            input[type=email]:focus {
      border: 3px solid grey;
      }
	</style>
</head>
<body>
	<div class="background">
		<h4>Wow! you scored <?php echo $_GET['score'];?><br>Enter details to continue.. </h4>
		<div class="box">
			<div class="form" style="padding-top: 20px;">
				<form action="hextris/index.php"  method="POST">
					<input type="text" name="name" id="name" placeholder="Enter Name">
					<input type="text" name="age" id="age" placeholder="Enter Age">
					<input type="email" name="email" id="email" placeholder="Enter email id" >
					<input type="text" name="nation" id="nation" placeholder="Nationality">
					<input type="text" name="phone" id="phone" placeholder="Enter Phone Number">
					<input type="submit" name="Next" value="Continue">
				</form>
				<script>document.cookie="tscore=<?php echo $_GET['score'];?>";</script>
			</div>
			
		</div>
		
	</div>

</body>
</html>