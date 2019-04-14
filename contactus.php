<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Table Booking Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"> <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <meta name="HandheldFriendly" content="true">
    <title>Table Booking</title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/11.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>  
<body>
    <?php
       include('nav.php');
       ?>
<div id="about" class="section" align="center">
<div class="container" style="border:0%">
        <div class="row">
         <div class="col-sm-6">
           
             <div class="contact-details">
                <h4>&nbsp; Table For Mee!!</h4>
                <ul>
                    <li>37,Nilkamal Park Society Karodiya Road, Bajwa, Vadodara
                    Zip Code:- 391310</li>
                    
                    <li><a>7016818280</a></li>
                    <li><a href="mailto:sample@gmail.com">vivannathani99@gmail.com</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6">
    <div class="row-md-5 offset-by-one">
       <div id="contact_form" class="row">
       <?php
	   		include('db.php');
	   		if(isset($_POST['submit'])){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$mob = $_POST['mobile'];
				$message = $_POST['message'];
				$query = $db->query("INSERT INTO `feedback`(`id`, `Name`, `Email`, `Mobile`, `Message`) VALUES ('','$name','$email','$mob','$message')") or die(mysqli_error());
				if($query){
					echo "<script>alert('Thanks For your feedback');</script>";
				}
			}
	   ?>
		<form role="form" id="feedbackForm" action="" method="post">
        <div class="form-group">
            <label class="control-label" for="name">Name *</label>
            <div class="input-group">
            <input type="text" class="form-control" name="name" placeholder="Enter your name" />
            <span class="input-group-addon"><i class="fa fa-user" style="color:#0CF;"></i></span>
        	</div>
        </div>

        <div class="form-group">
            <label class="control-label" for="email">Email Address *</label>
            <div class="input-group">
            <input type="email" class="form-control" name="email" placeholder="Enter your email" />
            <span class="input-group-addon"><i class="fa fa-envelope" style="color:#0CF;"></i></span>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label" for="email">Mobile Number *</label>
            <div class="input-group">
            <input type="text" class="form-control" name="mobile" placeholder="9963XXXX68" />
            <span class="input-group-addon"><i class="fa fa-mobile" style="color:#0CF;"></i></span>
            </div>
        </div>
        
        <div class="form-group">
        <label class="control-label" for="message">Message *</label>
        <div class="input-group">
        <textarea rows="5" cols="30" class="form-control" name="message" placeholder="Enter your message" ></textarea>
        <span class="input-group-addon"><i class="fa fa-edit" style="color:#0CF;"></i></span>
        </div>
        <span class="help-block" style="display: none;">Please enter a message.</span>
        </div>
        
<button type="submit" name="submit" class="main-button">&nbsp; &nbsp; SEND &nbsp; &nbsp;</button>
<button type="reset" class="main-button">&nbsp; &nbsp; CLEAR &nbsp; &nbsp; </button>
</form>
			</div>
		</div>
    </div>
	</div>
    </div>
    </div>
<?php 
include('footer1.php');
?>
</body>
</html>