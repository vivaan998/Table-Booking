<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 700px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display:none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
    
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
.login-modal-div .modal-header label.tab-label1{
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
    
    
.login-modal-div .modal-header .tab-label2 {
    padding: 5px;
    font-weight: 200;
    margin: 1%;
    text-align: center;
    color:darkorange;
    border: 1px solid green;
    width: 7%;
    font-size: 14px;
    background-color: transparent;
}
.login-modal-div .modal-header label:hover{
    color: grey;
    border-color:green;
    cursor: pointer;
}
 
    
 .login-modal-div .modal-header input:checked + label.tab-label2 {
    color: #555;
    border: 1px solid #0f9d56;
    border-top: 3px solid #0f9d58;
    border-bottom: 3px solid #0f9d58;
    background-color: #fff;
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
    
    .login-modal-div .modal-header #z1:checked ~ #content11, .login-modal-div .modal-header #z2:checked ~ #content12 ,  .login-modal-div .modal-header #z3:checked ~ #content13,  .login-modal-div .modal-header #z4:checked ~ #content14, .login-modal-div .modal-header #z5:checked ~ #content15, .login-modal-div .modal-header #z6:checked ~ #content16 ,  .login-modal-div .modal-header #z7:checked ~ #content17,  .login-modal-div .modal-header #z8:checked ~ #content18 , .login-modal-div .modal-header #z9:checked ~ #content19, .login-modal-div .modal-header #z10:checked ~ #content20 ,  .login-modal-div .modal-header #z11:checked ~ #content21,  .login-modal-div .modal-header #z12:checked ~ #content22{
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
    
</style>
<body>
        
    <?php
                        include('db.php');       
						if(isset($_REQUEST['submit'])){
							$date = date(DATE_RFC822);
                            $times=time();
							$time = $_POST['time'];
							$mem = $_POST['members'];
							$name = $_POST['uname'];
							$email = $_POST['email'];
							$mob = $_POST['mobile'];
							$pwd = $_POST['pword'];
                            $hashed= hash('sha512',$pwd);
							$sql = $db->query("INSERT INTO `reserve_table`(`id`, `date`, `Time`, `Booking-Time`, `no_of_people`, `Name`, `Email`, `Contact`, `Password`) VALUES ('','$date','$times','$time','$mem','$name','$email','$mob','$hashed')");
							if($sql){
								echo "<script>alert('Your Table Reserved Successfully');</script>";
							}
						}
            ?>
    
    
    
<form id="regForm" method="post" action="#">   
<div class="tab">

 <button type="button" id="nextBtn" onclick="nextPrev(1)" class="main-button1">Next</button>
</div>
<div class="tab">                               
<div class="login-modal-div" style="display: block;">
  <div class="modal-content">
    <div class="white-bg center modal-header">
      <form class="login-register-div" method="post">
            <input type="radio" name="tabs2" value="1" id="z1">
            <label class="tab-label2" for="z1">1</label>
            <input type="radio" name="tabs2" value="2" id="z2">
            <label class="tab-label2" for="z2">2</label>
            <input type="radio" name="tabs2" value="3" id="z3">
            <label class="tab-label2" for="z3">3</label>
            <input type="radio" name="tabs2" value="4" id="z4">
            <label class="tab-label2" for="z4">4</label>
            <input type="radio" name="tabs2" value="5" id="z5">
            <label class="tab-label2" for="z5">5</label>
            <input type="radio" name="tabs2" value="6" id="z6">
            <label class="tab-label2" for="z6">6</label>
            <input type="radio" name="tabs2" value="7" id="z7">
            <label class="tab-label2" for="z7">7</label>
            <input type="radio" name="tabs2" value="8" id="z8">
            <label class="tab-label2" for="z8">8</label>
            <input type="radio" name="tabs2" value="10" id="z9">
            <label class="tab-label2" for="z9">10</label>
            <input type="radio" name="tabs2" value="12+" id="z10">
            <label class="tab-label2" for="z10">12+</label>
            <input type="radio" name="tabs2" value="15+" id="z11">
            <label class="tab-label2" for="z11">15+</label>
            <input type="radio" name="tabs2" value="20+" id="z12">
            <label class="tab-label2" for="z12">20+</label>
<br>
<br>
<br>
        <section id="content11">
          <form method="POST" id="morning">
            <div class="modal-form-group">
                 <a href="https://www.flaticon.com/authors/catkuro" title="catkuro"><a href="https://www.flaticon.com/" title="Flaticon"><img src="img/table.svg" width="25%" height="25%" /></a></a> 
                            
              </div>
           <br>
              
            <?php
                  $members=$_POST['tabs1'];
              ?>
          </form>
        </section>
        <section id="content2">
          <form method="POST" id="afternoon">
            <div class="modal-form-group">  
            </div>
           <br>              
          </form>
        </section>
          <section id="content3">
          <form method="POST" id="evening">
            <div class="modal-form-group">
                
            </div>
           <br>
              </form>
        </section>
        <section id="content4">
          <form method="POST" id="night">
            <div class="modal-form-group">
            </div>
           <br>
          </form>
        </section>
        </form>
      </div>
  </div>
</div>
</div>  
      <div style="overflow:auto;">
        <div style="float:right;">
          
            <input type="submit" name="submit" id="SubmitBtn">
            </div>
        </div>
                                
     <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
            <span class="step"></span>
    </div>
</form>

<script>
    
    var currentTab = 0;
showTab(currentTab);
function showTab(n) {
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").style.display = "none";
    document.getElementById("SubmitBtn").style.display = "block";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
       document.getElementById("SubmitBtn").style.display = "none";
  }
  fixStepIndicator(n)
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById("regForm").submit();
      
    return false;
  }
  showTab(currentTab);
}

function validateForm() {
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  for (i = 0; i < y.length; i++) {
    if (y[i].value == "") {
      y[i].className += " invalid";
      valid = false;
    }
  }
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; 
}

function fixStepIndicator(n) {
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  x[n].className += " active";
}    
</script>

</body>
</html>
