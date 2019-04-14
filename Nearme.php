<DOCTYPE html>
<html lang = "en">
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
       include('nav.php');
       ?>
        
        <div class="row" style="border: 0px;margin-left: 8%;margin-bottom:3%">
            <?php
            $i=1;
            ?>
            <div class="col-md-5 grid-item" style="border: 1%;margin-top:17.5%">
                <div class="csi-rest six columns" style="background-image:url(img/download.jpg)" >
                </div> 
                <?php
                 $con = new mysqli("localhost","root","","my-website");
            
                if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
                }
            $sql ="SELECT * FROM `restaurant-list` WHERE `serial`=$i";
            
                $result = mysqli_query($con, $sql) or die("could not perform query");
                
                while($row = mysqli_fetch_assoc($result))
                {
                        $name=$row['Name'];
                        $Cousines=$row['Cousines'];
                        $about=$row['About'];
                        $contact=$row['Contact'];; 
                }
                ?>
                <div class="Black-text six columns">
                <a href="#"><p class="Red-text offset-by-one columns"><strong>
                    <?php
                    echo $name;
                    ?>
                    </strong></p></a>
                <?php
                    echo"<p>" . $Cousines . "</p>";
                    ?>
                <?php
                    echo"<p>" . $about . "</p>";
                ?>
                <br>
                <?php
                    echo"<p>" . "Contact : " . $contact . "</p>";
                ?>
                    <a href="view.php"><button class="main-button1" style="float:right;margin-bottom:0%;">View</button></a>
                </div>
            </div>
            <?php
            $i++;
            ?>
            <div class="col-md-5 grid-item" style="border: 1%;">
                <div class="csi-rest six columns" style="background-image:url(img/image04.jpg)" >
                </div> 
                <?php
                 $con = new mysqli("localhost","root","","my-website");
            
                if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
                }
            $sql ="SELECT * FROM `restaurant-list` WHERE `serial`=$i";
            
                $result = mysqli_query($con, $sql) or die("could not perform query");
                
                while($row = mysqli_fetch_assoc($result))
                {
                        $name=$row['Name'];
                        $Cousines=$row['Cousines'];
                        $about=$row['About'];
                        $contact=$row['Contact'];; 
                }
                ?>
                <div class="Black-text six columns">
                <a href="#"><p class="Red-text offset-by-one columns"><strong>
                    <?php
                    echo $name;
                    ?>
                    </strong></p></a>
                <?php
                    echo"<p>" . $Cousines . "</p>";
                    ?>
                <?php
                    echo"<p>" . $about . "</p>";
                ?>
                <br>
                <?php
                    echo"<p>" . "Contact : " . $contact . "</p>";
                ?>
                    <a href="view.php"><button class="main-button1" style="float:right;margin-bottom:0%;">View</button></a>
                </div>
            </div>
            <?php
            $i++;
            ?>
            <?php
            $i++;
            ?>
            <div class="col-md-5 grid-item" style="border: 1%;margin-left:5%;magin-top:4%">
                <div class="csi-rest six columns" style="background-image:url(img/image06.jpg)" >
                </div> 
                <?php
                 $con = new mysqli("localhost","root","","my-website");
            
                if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
                }
            $sql ="SELECT * FROM `restaurant-list` WHERE `serial`=$i";
            
                $result = mysqli_query($con, $sql) or die("could not perform query");
                
                while($row = mysqli_fetch_assoc($result))
                {
                        $name=$row['Name'];
                        $Cousines=$row['Cousines'];
                        $about=$row['About'];
                        $contact=$row['Contact'];; 
                }
                ?>
                <div class="Black-text six columns">
                <a href="#"><p class="Red-text offset-by-one columns"><strong>
                    <?php
                    echo $name;
                    ?>
                    </strong></p></a>
                <?php
                    echo"<p>" . $Cousines . "</p>";
                    ?>
                <?php
                    echo"<p>" . $about . "</p>";
                ?>
                <br>
                <?php
                    echo"<p>" . "Contact : " . $contact . "</p>";
                ?>
                    <a href="view.php"><button class="main-button1" style="float:right;margin-bottom:0%;">View</button></a>
                </div>
            </div>
         
         
   </div>         
        
           
<?php 
include('footer1.php'); 
?>
        
    </body>
    </html>
