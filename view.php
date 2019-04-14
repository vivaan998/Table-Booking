<html>

    <head>
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
    
    <div class="row">
        
                <div class="Black-text twelve columns" style="background-image:url(image/as.jpg)">
                <a href="#"><p class="Red-text1 offset-by-five columns"><strong>
                    <?php
                    echo $name;
                    ?>
                    </strong></p></a>
        </div>
              
 </div>
    
    
    
   <div class="tab-content" style="margin:2%;">
         <div class="row">
             <div class="col-sm-3 grid-item">
                 <div role="tabpanel" class="tab-pane">
                    <div class="item">
                     <div class="hovereffect">
                         <img src="images/PanPizzas.jpg" class="img-responsive" style="width:100%;" />
                         <div class="overlay">
                             <h2>Craving For</h2>
                             <p><a href="#">Pan Pizza's</a></p> 
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-sm-3  grid-item">
             <div role="tabpanel" class="tab-pane">
              <div class="item">
                 <div class="hovereffect">
                     <img src="images/Our-taste.jpg" class="img-responsive" style="width:100%;" />
                     <div class="overlay">
                         <h2>Try Our</h2>
                         <p><a href="#">Speaciality</a></p> 
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-sm-3 grid-item">
         <div role="tabpanel" class="tab-pane">
          <div class="item">
             <div class="hovereffect">
                 <img src="images/12-inch-Pizzas.jpg" class="img-responsive" style="width:100%;" />
                 <div class="overlay">
                     <h2>A Gang?</h2>
                     <p><a href="#">Our 12inch Pizza</a></p> 
                 </div>
             </div>
         </div>
     </div>
 </div>
 
</div>
 </div>
    
 <div class="tab-content" style="margin:2%;">
         <div class="row">
             <div class="col-sm-3 grid-item">
                 <div role="tabpanel" class="tab-pane">
                    <div class="item">
                     <div class="hovereffect">
                         <img src="images/12399_uyjthjyhjt.jpg" class="img-responsive" style="width:100%;" />
                         <div class="overlay">
                             <p style="margin-top:45%"><a href="#">Just &#36;99</a></p> 
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-sm-3  grid-item">
             <div role="tabpanel" class="tab-pane">
              <div class="item">
                 <div class="hovereffect">
                     <img src="images/cheese.jpg" class="img-responsive" style="width:100%;" />
                     <div class="overlay">
                         <p style="margin-top:45%"><a href="#">Mouth Watering Cheese</a></p> 
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-sm-3 grid-item">
         <div role="tabpanel" class="tab-pane">
          <div class="item">
             <div class="hovereffect">
                 <img src="images/evd-199.jpg" class="img-responsive" style="width:100%;" />
                 <div class="overlay">
                     <p style="margin-top:45%"><a href="#">Just &#36;199</a></p> 
                 </div>
             </div>
         </div>
     </div>
 </div>
 
</div>
 </div>  <br>
    <br>
    <br>

			<div class="home-wrapper" align="center">
<div class="bg-image bg-parallax overlay" style="background-image:url(image/as.jpg)" >
                </div>
				<div class="text-center">
					<div class="home-content">
						<h1 class="Black-text2">Want Us To Book A Table For You</h1>
						<h3 class="Black-text2 lead">Just Click on Book Now <br>&amp;<br> Book your table by sitting at your home with no extra charge. </h3>
						<button class="main-button"><a href="Members.php">Book Now</a></button>
					</div>
                    <br>
				</div>

			</div>
<?php 
include('footer2.php'); 
?> 

</body>

</html>
