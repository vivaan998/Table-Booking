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
  min-width: 300px;
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
  display: none;
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
                                <h3>Book a table</h3>
                                <div class="tab">Table Info:
                                <label><strong>Time:</strong></label>
                                <select name="time">
                                    <option value="5:00am">5:00 am</option>
                                    <option value="5:30am">5:30 am</option>
                                    <option value="6:00am">6:00 am</option>
                                    <option value="6:30am">6:30 am</option>
                                    <option value="7:00am">7:00 am</option>
                                    <option value="7:30am">7:30 am</option>
                                    <option value="8:00am">8:00 am</option>
                                    <option value="8:30am">8:30 am</option>
                                    <option value="9:00am">9:00 am</option>
                                    <option value="9:30am">9:30 am</option>
                                    <option value="10:00am">10:00 am</option>
                                    <option value="10:30am">10:30 am</option>
                                    <option value="11:00am">11:00 am</option>
                                    <option value="11:30am">11:30 am</option>
                                    <option value="12:00pm">12:00 pm</option>
                                    <option value="12:30pm">12:30 pm</option>
                                    <option value="1:00pm">1:00 pm</option>
                                    <option value="1:30pm">1:30 pm</option>
                                    <option value="2:00pm">2:00 pm</option>
                                    <option value="2:30pm">2:30 pm</option>
                                    <option value="3:00pm">3:00 pm</option>
                                    <option value="3:30pm">3:30 pm</option>
                                    <option value="4:00pm">4:00 pm</option>
                                    <option value="4:30pm">4:30 pm</option>
                                    <option value="5:00pm">5:00 pm</option>
                                    <option value="5:30pm">5:30 pm</option>
                                    <option value="6:00pm">6:00 pm</option>
                                    <option value="6:30pm">6:30 pm</option>
                                    <option value="7:00pm">7:00 pm</option>
                                    <option value="7:30pm">7:30 pm</option>
                                    <option value="8:00pm">8:00 pm</option>
                                    <option value="8:30pm">8:30 pm</option>
                                    <option value="9:00pm">9:00 pm</option>
                                    <option value="9:30pm">9:30 pm</option>
                                    <option value="10:00pm">10:00 pm</option>
                                    <option value="10:30pm">10:30 pm</option>
                                    <option value="11:00pm">11:00 pm</option>
                                    <option value="11:30pm">11:30 pm</option>
                                </select>
                                </div>
                                <div class="tab">Table Info:
                                <label><strong>Members:</strong></label>
                                <select name="members">
                                    <option value="2 Peoples">2 Peoples</option>
                                    <option value="3 Peoples">3 Peoples</option>
                                    <option value="4 Peoples">4 Peoples</option>
                                    <option value="5 Peoples">5 Peoples</option>
                                    <option value="6 Peoples">7 Peoples</option>
                                    <option value="6 Peoples">8 Peoples</option>
                                    <option value="6 Peoples">9 Peoples</option>
                                    <option value="6 Peoples">10+ Peoples</option>
                                    
                                </select>
                            </div>  
                             <div class="tab">Contact Info:
                                <p><input type="email" placeholder="E-mail..." name="email"></p>
                                 <span class="input-group-addon"><i class="fa fa-envelope" style="color:#0CF;"></i></span>
                                <p><input type="number" placeholder="Phone..."  name="mobile"></p>
                                <span class="input-group-addon"><i class="fa fa-mobile" style="color:#0CF;"></i></span>
                              </div> 
                             <div class="tab">Login Info:
                                <p><input type="text" placeholder="Username..." name="uname"></p>
                                  <span class="input-group-addon"><i class="fa fa-user" style="color:#0CF;"></i></span>
                                <p><input type="password" placeholder="Password..." name="pword" type="password"></p>
                              </div>
                                 <div style="overflow:auto;">
                                        <div style="float:right;">
                                          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                            <input type="submit" name="submit" id="SubmitBtn">
                                        </div>
                                </div>
                                
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
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
