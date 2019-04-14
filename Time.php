<html>
   <?php
                    session_start();
            if(isset($_POST['submited'])) 
            {
                $_SESSION['code']=$_POST['tabs5'];
         
            
        }
        ?>
    
              
<head>

<style>
@media (max-width: 768px)
.login-modal-div {
    padding-top: 30px;
}
.login-modal-div {
    font-family: 'RobotoDraft', 'Roboto', 'Helvetica Neue, Helvetica, Arial', sans-serif;
    position: fixed;
    z-index: 1000;
    padding-top: 70px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}

    @media (max-width: 768px)
.login-modal-div .modal-content {
    width: 90%;
}

.login-modal-div .modal-content {
    background-color: #eff1f3;
    margin: auto;
    padding-top: 20px;
    border: 1px solid #888;
    width: 100%;
    border-radius: 5px;
}
@media (max-width: 600px)
.modal-content {
    padding: 10px;
    width: 75%;
}
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 60%;
    }
 
    .login-modal-div .center {
    text-align: center;
}
    
    .main-button1 {
	display:inline-block;
    width: 10%;
    margin-bottom:0%;
	padding:10px 20px;
	border:none;
	background-color:green;
	color:#FFF;
	text-transform: uppercase;
	font-weight: 700;
	-webkit-transition:0.2s opacity;
	transition:0.2s opacity;
}

.login-modal-div .modal-header {
    padding: 20px;
    border-radius: 5px;
}
.login-modal-div .white-bg {
    background-color: #fff;
}
    
    .login-modal-div .modal-header input:checked + label.tab-label {
    color: #555;
    border: 1px solid #ddd;
    border-top: 2px solid #0f9d58;
    border-bottom: 3px solid #fff;
    background-color: #fff;
}
    
    

@media screen and (max-width: 400px)
.login-modal-div .modal-header .tab-label {
    padding: 15px;
}

.login-modal-div .modal-header label:hover {
    color: #888;
    cursor: pointer;
}
.login-modal-div .modal-header label.tab-label {
    display: inline-block;
    margin: 0 0 -1px;
    padding: 15px 25px;
    font-weight: 600;
    text-align: center;
    color: #888;
    border: 1px solid transparent;
    width: 20%;
    padding-bottom: 12px;
    font-size: 20px;
    border-bottom-width: 4px;
    background-color: #e9ebee;
}
    
.login-modal-div .modal-form-group .tab-label1 {
    padding: 15px;
}
.login-modal-div .modal-form-group label:hover {
    color: grey;
    border-color: greenyellow;
    cursor: pointer;
}
.login-modal-div .modal-form-group label.tab-label1 {
    display: inline-block;
    margin: 0 0 -1px;
    margin: 1%;
    padding: 15px 25px;
    font-weight: 600;
    text-align: center;
    color: #888;
    border: 1px solid green;
    width: 15%;
    padding-bottom: 12px;
    font-size: 14px;
    border-bottom-width: 2px;
    background-color: #e9ebee;
}    
    
.login-modal-div .modal-form-group input:checked + label.tab-label1 {
    color: #555;
    border: 1px solid #ddd;
    border-top: 2px solid #0f9d58;
    border-bottom: 3px solid #fff;
    background-color: #fff;
}    
    
    .login-modal-div .modal-form-group #tab5:checked{
        background-color: fuchsia;
        font-size: 20px;
    }
    
    input[type="radio"], input[type="file"], input[type="hidden"], input[type="image"], input[type="color"] {
    border: 0;
    border-radius: 0;
    padding: 0;
}

.login-modal-div .modal-header input[type=radio] {
    display: none;
}    
 
*, *:after, *:before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
input[type="radio" i] {
    margin: 3px 3px 0px 5px;
}
user agent stylesheet
input[type="radio" i] {
    -webkit-appearance: radio;
    box-sizing: border-box;
}
user agent stylesheet
input[type="radio" i], input[type="checkbox" i] {
    background-color: initial;
    cursor: default;
    margin: 3px 0.5ex;
    padding: initial;
    border: initial;
}

    
    .login-modal-div .modal-header #tab1:checked ~ #content1, .login-modal-div .modal-header #tab2:checked ~ #content2 ,  .login-modal-div .modal-header #tab3:checked ~ #content3,  .login-modal-div .modal-header #tab4:checked ~ #content4 {
    display: block;
}
.login-modal-div .modal-header section {
    display: none;
    padding: 20px 30px 30px 30px;
    border: 1px solid #ddd;
    border-bottom: none;
}

    .login-modal-div form {
    margin-bottom: 14px;
}

    body{
        background-image:url(img/background03.jpg);
        opacity: 1.2;
    }    
    
    
</style>

</head>


<body> 
    
<div class="login-modal-div" style="display: block;">
    <div class="modal-content">
    <div class="white-bg center modal-header">
      <div class="login-register-div">
         <input id="tab1" type="radio" name="tabs">
        <label class="tab-label" for="tab1">Morning</label>
      
        <input id="tab2" type="radio" name="tabs">
        <label class="tab-label" for="tab2">Afternoon</label>
          
        <input id="tab3" type="radio" name="tabs">
        <label class="tab-label" for="tab3">Evening</label>
      
        <input id="tab4" type="radio" name="tabs">
        <label class="tab-label" for="tab4">Night</label>

        <section id="content1">
          <form method="POST" id="morning">
            <div class="modal-form-group">
                <input type="radio" name="tabs1" value="11:15AM" id="m1">
            <label class="tab-label1" for="m1">11:15AM</label>
              <input type="radio" name="tabs1" value="11:30AM" id="m2">
            <label class="tab-label1" for="m2">11:30AM</label>
              <input type="radio" name="tabs1" value="11:45AM" id="m3">
            <label class="tab-label1" for="m3">11:45AM</label>
              <input type="radio" name="tabs1" value="12:00PM" id="m4">
            <label class="tab-label1" for="m4">12:00PM</label>
            </div>
           <br>
               <button class="main-button1" type="submit" name="submit1">Book</button>
            </form>
                 
              
              
              <?php
              $members=$_SESSION['code'];
              if(isset($_POST['submit1'])){
                  $times=$_POST['tabs1'];
              
                $con = new mysqli("localhost","root","","my-website");
            
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
                }
           // echo "you have selected" . $times;
             $sql1 ="UPDATE `bookings` SET `Rest-id`='vad-Dom',`Time`='$times',`Members`='$members' WHERE `Email`='hirenvmer32@gmail.com'";
            
            
            
            if (mysqli_query($con, $sql1)) {
                  echo "<script>alert('Your table have been booked for $members at $times wait for the confirmation');</script>";
                } else {
                    echo "Error: " . mysqli_error($con);
                }

                mysqli_close($con);  
              }
              
              ?>

              

        </section>
        <section id="content2">
          <form method="POST" id="afternoon">
            <div class="modal-form-group">
              <input type="radio" name="tabs2" value="12:15PM" id="a1">
            <label class="tab-label1" for="a1">12:15PM</label>
              <input type="radio" name="tabs2" value="12:30PM" id="a2">
            <label class="tab-label1" for="a2">12:30PM</label>
              <input type="radio" name="tabs2" value="1:00PM" id="a3">
            <label class="tab-label1" for="a3">1:00PM</label>
              <input type="radio" name="tabs2" value="1:15PM" id="a4">
            <label class="tab-label1" for="a4">1:15PM</label>
              <input  type="radio" name="tabs" value="1:30PM" id="a5">
            <label class="tab-label1" for="a5">1:30PM</label>
              <input type="radio" name="tabs2" value="1:45PM" id="a6">
            <label class="tab-label1" for="a6">1:45PM</label>    
              <input type="radio" name="tabs2" value="2:00PM" id="a7">
            <label class="tab-label1" for="a7">2:00PM</label>
              <input type="radio" name="tabs2" value="2:15PM" id="a8">
            <label class="tab-label1" for="a8">2:15PM</label>
              <input type="radio" name="tabs2" value="2:30PM" id="a9">
            <label class="tab-label1" for="a9">2:30PM</label>    
              <input type="radio" name="tabs2" value="2:45PM" id="a10">
            <label class="tab-label1" for="a10">2:45PM</label>
              <input type="radio" name="tabs2" value="3:00PM" id="a11">
            <label class="tab-label1" for="a11">3:00PM</label>
              <input type="radio" name="tabs2" value="3:15PM" id="a12">
            <label class="tab-label1" for="a12">3:15PM</label>    
              <input type="radio" name="tabs2" value="3:30PM" id="a13">
            <label class="tab-label1" for="a13">3:30PM</label>
              <input type="radio" name="tabs2" value="3:45PM" id="a14">
            <label class="tab-label1" for="a14">3:45PM</label>
              <input type="radio" name="tabs2" value="4:00PM" id="a15">
            <label class="tab-label1" for="a15">4:00PM</label>
                
            </div>
           <br>    
              <button class="main-button1" type="submit" name="submit2">Book</button>
    
              
               <?php
              if(isset($_POST['submit2'])){
                  $times=$_POST['tabs2'];
              
                   $con = new mysqli("localhost","root","","my-website");
            
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
                }
           // echo "you have selected" . $times;
            
             $sql2 ="UPDATE `bookings` SET `Rest-id`='vad-Dom',`Time`='$times',`Members`='$members' WHERE `Email`='vivannathani99@gmail.com'";        
      
            
            
            
            if (mysqli_query($con, $sql2)) {
                   echo "<script>alert('Your table have been booked for $members at $times wait for the confirmation');</script>";
                } else {
                    echo "Error: " . mysqli_error($con);
                }

                mysqli_close($con);  
              }
              
              ?>
              
              
          </form>
        </section>
        <section id="content3">
          <form method="POST" id="evening">
            <div class="modal-form-group">
             <input type="radio" name="tabs3" value="4:15PM" id="e1">
            <label class="tab-label1" for="e1">4:15PM</label>
              <input type="radio" name="tabs3" value="4:30PM" id="e2">
            <label class="tab-label1" for="e2">4:30PM</label>
              <input type="radio" name="tabs3" value="4:45PM" id="e3">
            <label class="tab-label1" for="e3">4:45PM</label>
              <input type="radio" name="tabs3" value="5:00PM" id="e4">
            <label class="tab-label1" for="e4">5:00PM</label>
              <input  type="radio" name="tabs3" value="5:15PM" id="e5">
            <label class="tab-label1" for="e5">5:15PM</label>
              <input type="radio" name="tabs3" value="5:30PM" id="e6">
            <label class="tab-label1" for="e6">5:30PM</label>    
              <input type="radio" name="tabs3" value="5:45PM" id="e7">
            <label class="tab-label1" for="e7">5:45PM</label>
              <input type="radio" name="tabs3" value="6:00PM" id="e8">
            <label class="tab-label1" for="e8">6:00PM</label>
              <input type="radio" name="tabs3" value="6:15PM" id="e9">
            <label class="tab-label1" for="e9">6:15PM</label>    
              <input type="radio" name="tabs3" value="6:30PM" id="e10">
            <label class="tab-label1" for="e10">6:30PM</label>
              <input type="radio" name="tabs3" value="6::45PM" id="e11">
            <label class="tab-label1" for="e11">6:45PM</label>
                
            </div>
           <br>
             <button class="main-button1" type="submit" name="submit3">Book</button>             
              
              
              <?php
              
              if(isset($_POST['submit3'])){
                  $times=$_POST['tabs3'];
              
                   $con = new mysqli("localhost","root","","my-website");
            
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
                }
           // echo "you have selected" . $times;
            
             $sql3 ="UPDATE `bookings` SET `Rest-id`='vad-Dom',`Time`='$times',`Members`='$members' WHERE `Email`='vivannathani99@gmail.com'";       
      
            
            
            
            if (mysqli_query($con, $sql3)) {
                   echo "<script>alert('Your table have been booked for $members at $times wait for the confirmation');</script>";
                } else {
                    echo "Error: " . mysqli_error($con);
                }

                mysqli_close($con);  
              }
              
              ?>

          </form>
        </section>
        <section id="content4">
          <form method="POST" id="night">
            <div class="modal-form-group">
                <input type="radio" name="tabs4" value="7:00PM" id="n1">
            <label class="tab-label1" for="n1">7:00PM</label>
               <input type="radio" name="tabs4" value="7:15PM" id="n2">
            <label class="tab-label1" for="n2">7:15PM</label>
              <input type="radio" name="tabs4" value="7:30PM" id="n3">
            <label class="tab-label1" for="n3">7:30PM</label>
              <input type="radio" name="tabs4" value="7:45PM" id="n4">
            <label class="tab-label1" for="n4">7:45PM</label>
              <input type="radio" name="tabs4" value="8:00PM" id="n5">
            <label class="tab-label1" for="n5">8:00PM</label>
              <input  type="radio" name="tabs4" value="8:15PM" id="n6">
            <label class="tab-label1" for="n6">8:15PM</label>
              <input type="radio" name="tabs4" value="8:30PM" id="n7">
            <label class="tab-label1" for="n7">8:30PM</label>    
              <input type="radio" name="tabs4" value="8:45PM" id="n8">
            <label class="tab-label1" for="n8">8:45PM</label>
              <input type="radio" name="tabs4" value="9:00PM" id="n9">
            <label class="tab-label1" for="n9">9:00PM</label>
              <input type="radio" name="tabs4" value="9:15PM" id="n10">
            <label class="tab-label1" for="n10">9:15PM</label>    
              <input type="radio" name="tabs4" value="9:30PM" id="n11">
            <label class="tab-label1" for="n11">9:30PM</label>
              <input type="radio" name="tabs4" value="9:45PM" id="n12">
            <label class="tab-label1" for="n12">9:45PM</label>
            <input type="radio" name="tabs4" value="10:00PM" id="n13">
            <label class="tab-label1" for="n13">10:00PM</label>
                
            </div>
           <br>
            <button class="main-button1" type="submit" name="submit4">Book</button>
            
              <?php
              if(isset($_POST['submit4'])){
                  $times=$_POST['tabs4'];
              
                   $con = new mysqli("localhost","root","","my-website");
            
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
                }
           // echo "you have selected" . $times;
            
             $sql4 ="UPDATE `bookings` SET `Rest-id`='vad-Dom',`Time`='$times',`Members`='$members' WHERE `Email`='vivannathani99@gmail.com'";     
      
            
            
            
            if (mysqli_query($con, $sql4)) {
                  echo "<script>alert('Your table have been booked for $memb at $times wait for the confirmation');</script>";
                } else {
                    echo "Error: " . mysqli_error($con);
                }

                mysqli_close($con);  
              }
              
              ?>
             
          </form>
        </section>
        </div>
      </div>
  </div>
</div>
</body>
    
</html>



