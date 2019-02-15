<?php
@ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Restaurant Website</title>
 </head>
 
 
 <body>
     <div class="loader"><img src="images/loading.gif" alt="" /></div>
        <!--banner section-->
        <section>
         <div class="banner">
         <img class="img-responsive logo1" src="images/logo.png"/>
		 <img src="images/spec_banner.jpg"  class="img-responsive">
	</div>
      <!--banner section close-->  
</section>
<div class="clearfix"></div> 

<section>
    
<div class="admin_bg row">
    <div class="container-fluid">
    <div class="clearfix p30_0"></div>
    <div class="container p30_0">
    	<div class="col-md-7"></div>
        <div class="col-md-5">
        	 <!--Start Login Code --> 
				 <?php 
				 	include('db.php'); 
                    if(isset($_POST['submit'])){ //print_r($_POST); die;
                        $name = $_POST['name'];
                        $pass = sha512($_POST['pass']);
                    $query = $db->query("select * from admin where a_name='$name' and a_pass ='$pass'") or die(mysqli_error());
                     $result=mysqli_fetch_assoc($query); //print_r($result); die;
                   if($result)
                   {
                    $user = $result['a_name'];
                    $_SESSION['a_name']= $user;
                   
                    header('location:dashboard.php');
                   }
                   else
                   {
                    $message = "Please Check Your Username or password";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                   }
                   if(isset($_SESSION['a_name'])){ 
                    header("location:dashboard.php");
                    }	
                }
                ?>
            <!--End Login Code --> 
        	<div id="contact_form" class="row">
            <div class="main_h3" style="color:#0CF;">ADMIN LOGIN</div>
         	<div class="line"><img class="img-responsive" src="images/undr.png" /></div> 
		<form role="form" action="" method="post">
            <input type="text" class="form-control cus_form" name="name" placeholder="User Name" />
            <input type="password" class="form-control cus_form" name="pass" placeholder="Password" />
			<button type="submit" name="submit" class="cus_form_btn_1">&nbsp; &nbsp; SEND &nbsp; &nbsp;</button>
			<button type="reset" class="cus_form_btn_1">&nbsp; &nbsp; CLEAR &nbsp; &nbsp; </button>
</form>
			</div>
        </div>
    </div>
    <div class="clearfix p40_0"></div>
  </div>

</div>
            
</section> 

<?php 
	include('footer.php');
	include('js_files.php');
?>
</body>
</html>
