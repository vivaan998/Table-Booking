<footer id="footer">
    
    <?php
                 $con = new mysqli("localhost","root","","my-website");
            
                if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
                }
            $sql ="SELECT * FROM `restaurant-list` WHERE `serial`=1";
            
                $result = mysqli_query($con, $sql) or die("could not perform query");
                
                while($row = mysqli_fetch_assoc($result))
                {
                        $name=$row['Name'];
                        $Cousines=$row['Cousines'];
                        $location=$row['Location'];
                        $contact=$row['Contact'];;
                        $tables=$row['Tables'];
                        $website=$row['Website'];
                        
                }
                ?>
    
    
        <div class="container">
        <div class="row" style="margin-top: 1%"> 
            <div class="twelve columns">
            <div class="text-center row-md-8" style="margin-top: 5%">
					<div class="widget row-md-3">
						<h2 class="text">Get In Touch</h2>
						<ul>
                            <li><a href="#"><i class="fas fa-phone"><h6 class="white-text"><?php echo $contact; ?></h6></i></a></li>
                            <li><a href="#"><i class="far fa-envelope"><h6  class="white-text"><?php echo $website; ?></h6></i></a></li>
						</ul>
					</div>
					<div class="contact row-md-3">
						<h2  class="text">Get Social</h2>
						<ul>
                            <li><a href="#"><i class="fab fa-facebook"><h6  class="white-text">Facebook</h6></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"><h6  class="white-text">Instagram</h6></i></a></li>
						</ul>
                    </div>
        </div>
        </div>
        </div>
    </div>        
    </footer> 