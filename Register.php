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
     <div id="home" class="banner-area">
			<div class="bg-image bg-parallax overlay" style="background-image:url(img/background03.jpg);opacity:1.2" >
                </div>
        <div class="col-sm-7" style="margin-left:22%;margin-top:7%">
    <div class="row-md-5 offset-by-one">
       <div id="contact_form" class="row">
           <div style="margin-left:43%">    
               <span class="white-text"><h4>Sign Up</h4></span>
           </div>
       
		<form role="form" id="feedbackForm" action="" method="post">
        <div class="form-group">
            <label class="control-label white-text" for="name">Name *</label>
            <div class="input-group">
            <input type="text" class="form-control" name="name" placeholder="Enter your name" />
            <span class="input-group-addon"><i class="fa fa-user" style="color:#0CF;"></i></span>
        	</div>
        </div>

        <div class="form-group">
            <label class="control-label white-text" for="email">Email Address *</label>
            <div class="input-group">
            <input type="email" class="form-control" name="email" placeholder="Enter your email" />
            <span class="input-group-addon"><i class="fa fa-envelope" style="color:#0CF;"></i></span>
            </div>
        </div>
        
         <div class="form-group">
            <label class="control-label white-text" for="pass">Password *</label>
            <div class="input-group">
            <input type="password" class="form-control" name="pass" placeholder="Enter Password" />
            <span class="input-group-addon"><i class="fa fa-envelope" style="color:#0CF;"></i></span>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label white-text" for="email">Mobile Number *</label>
            <div class="input-group">
            <input type="text" class="form-control" name="mobile" placeholder="9963XXXX68" />
            <span class="input-group-addon"><i class="fa fa-mobile" style="color:#0CF;"></i></span>
            </div>
        </div>
        
  <div style="margin-left:35%">      
<button type="submit" name="submit" class="main-button">&nbsp; &nbsp; Register &nbsp; &nbsp;</button>
<button type="reset" class="main-button">&nbsp; &nbsp; CLEAR &nbsp; &nbsp; </button>
</div>
            <br>
            <br>
        <div style="margin-left:43%">    
       <span>Already a Member?<a href="login.php" class="white-text">&nbsp;&nbsp;Login</a></span>     
        </div>    
            
            
      </form>
           
           <?php
	   		include('db.php');
	   		if(isset($_POST['submit'])){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$mob = $_POST['mobile'];
                $paswd=$_POST['pass'];
				$query = $db->query("INSERT INTO `bookings`(`serial`, `Rest-id`, `Time`, `Members`, `Name`, `Contact`, `Email`) VALUES ('','','','','$name','$mob','$email')") or die(mysqli_error());
                $query2=$db->query("INSERT INTO `contact`(`id`, `Name`, `Email`, `Contact`, `Password`) VALUES ('','$name','$email','$contact','$paswd')") or die(mysqli_error());
				if($query && $query2){
                     header('Location:login.php');
				}
			}
	   ?>
			</div>
		</div>
    </div>
    </div>
    </body>
</html>