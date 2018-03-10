<?php
  session_start();
  ?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<title>
		Form 3
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
    height: 300px;
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
      margin: 17px 0px 0px 20px;
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
        <script>
        function getParameterByName(name, url) {
          if (!url) url = window.location.href;
          name = name.replace(/[\[\]]/g, "\\$&");
          var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
              results = regex.exec(url);
          if (!results) return null;
          if (!results[2]) return '';
          return decodeURIComponent(results[2].replace(/\+/g, " "));
        }
          window.getCookie = function(name) {
          match = document.cookie.match(new RegExp(name + '=([^;]+)'));
          if (match) return match[1];
        }
          if(!window.location.hash){
            pscore=getCookie('tscore');tscore=parseInt(pscore)+parseInt(getParameterByName('score'));
          document.cookie="tscore= "+tscore;
        }
      </script>
	<div class="background">
		<h4>Enter details to finish.. </h4>
		<div class="box">
			<div class="form" style="padding-top: 20px;">
				<form action="form3.php#thankyou" method="POST">
          <div class="form-group">
            <label for="destination">Choose Prefered Destination</label>
            <select class="form-control" name="destination" id="destination" style="display:inline; width: 70%;    background-color: #ffffff78">
              <option value="">--Select Destination--</option>
              <option value="Australia">Australia</option>
              <option value="USA">USA</option>
              <option value="UK">UK</option>
              <option value="France">France</option>
              <option value="Spain">Spain</option>
              <option value="Singapore">Singapore</option>
              <option value="Canada">Canada</option>
              <option values="Germany">Germany</option>
            </select>
          </div>
          <div class="form-group">
            <label for="pcourse">Choose Prefered Course</label>
            <select class="form-control" name="pcourse" id="pcourse" style="display:inline; width: 70%;    background-color: #ffffff78">
              <option value="">--Choose Course--</option>
              <option value="Medicine">Medicine</option>
              <option value="Engineering">Engineering</option>
              <option value="BBA">BBA</option>
              <option value="HotelManagement">>Hotel Management</option>
              <option value="Arts"> Arts</option>
              <option value="Accounts">Accounts</option>
              <option value="Aviation">Aviation</option>
              <option value="FasionDesign">Fasion Design</option>
              <option value="Aeronautics">Aeronautics</option>
            </select>
          </div>
					
					<button type="submit" name="Next" id="Next" class="btn btn-primary"  data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false" style="    padding: 10px;
    width: 100px;
    margin-top: 20px;" >Finish</button>
				</form>
				
			</div>
			
		</div>
    <script>
        if(window.location.hash){
          setTimeout(function(){$("#myModal").modal();},1000);
        }
    </script>
    <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Your Score</h4>
         
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <h1><script>document.write(getCookie('tscore'));</script></h1>
         Thanks for Playing
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <a href="home.php"><button type="button" class="btn btn-secondary" >Close</button></a>
        </div>
        
      </div>
    </div>
  </div>
      <?php
    mysql_connect("127.0.0.1","root","") or die ("Cannot connect to mysql");
    mysql_select_db("test") or die("Database not found");
    if(isset($_POST['Next'])){
      $destination=mysql_real_escape_string($_POST['destination']);
      $pcourse=mysql_real_escape_string($_POST['pcourse']);

      $email=$_SESSION['user']['email'];
      if(mysql_query("UPDATE students SET prefered_course='$pcourse',destination='$destination' WHERE email ='$email'")){
      }
    }
      ?>
		
	</div>
<script>
</script>
</body>
</html>