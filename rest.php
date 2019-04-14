<html>
<body>
   
<form id="addForm" action="rest.php" method="post" style="float:left;margin-left:35%;">
            <div class="form-group">
            <label>Restaurant Name:&nbsp;&nbsp;</label>
            <input type="text" name="name" placeholder="Enter name" /><br>
        	</div><br>
            
             <div class="form-group"> <label>Restaurant Id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name = "id" placeholder="Amd-Grill"><br>
            </div>
            <br>
    
             <div class="form-group"> <label>Cousines:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="cousine" placeholder="punjabi,gujarati" /><br>
            </div>
            <br>
      
            <div class="form-group">
            <label>Table For 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="number" name="three" /><br><br>
            <label>Table For 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="number" name="four" /><br><br>
            <label>Table For 6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="number" name="six" /><br><br>
            <label>Table For 8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
            <input type="number" name="eight" /><br><br>     
            </div>
            <br><br>  
            <div class="form-group">
            <label>Mobile Number:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="number" name="mobile" placeholder="9963XXXX68" />
            </div><br><br>
    
             <div class="form-group">
            <label>Our Website:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="url" name="email"/>
            </div><br><br>
    
            <div class="form-group"> <label>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <textarea rows="5" cols="30" name="addr" ></textarea>
            </div><br><br>
        
            <div class="form-group">
            <label>Description:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <textarea rows="5" cols="30" name="message" ></textarea>
            </div><br><br>
    
    <input type="submit" name="submit">
    <input type="reset" name="reset">

    
    </form> 
    
    
        <?php
    
        if(isset($_POST['submit'])){
            $rid=$_POST['id'];
            $rname=$_POST['name'];
            $cousines=$_POST['cousine'];
            $two=$_POST['two'] ;
            $four=$_POST['four'];
            $six=$_POST['six'];
            $eight=$_POST['eight']; 
            $contact=$_POST['mobile'];
            $email=$_POST['email'];
            $addr=$_POST['addr'];
            $description=$_POST['message'];
            $total=$two+$four+$six+$eight;
            
            //echo $rname . $cousines . $two . $three . $four . $six . $eight . $contact . $email . $addr . $description;
            
            $con = new mysqli("localhost","root","","my-website");
            
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
                }
            
            
            $sql = "INSERT INTO `restaurant-list`(`Rest-id`, `Name`, `Cousines`,`Two`,`Four`,`Six`,`Eight`, `Tables`, `Contact`, `Website`, `Location`, `About`) VALUES ('$rid','$rname','$cousines','$two','$four','$six','$eight','$total' ,'$contact','$email','$addr','$description')";        
      
            
            
            
             if (mysqli_query($con, $sql)) {
                    echo "<script>alert('Entry corresponding to $rname was Added Successfully');</script>";
                } else {
                    echo "Error: " . mysqli_error($con);
                }

                mysqli_close($con);      
            
            
        }
            ?>
    
    </body>
</html>