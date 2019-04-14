<html>
    <?php 
    session_start();
    ?>
<head>
     <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/11.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<style>
    

.grid-item {
    margin-top: 2%;
  background-color: rgba(255, 255, 255, 0.8);
  border: 0px solid rgba(0, 0, 0, 0);
  padding: 0px;
margin-left: 5%;
  font-size: 30px;
  text-align: center;
  font-weight:100;
  color:crimson;
  font-family: 'Quicksand', cursive;
}


.csi-rest{
    width: 200px;
    height: 180px;
    background-size:cover;
    bottom: 7px;
    text-decoration:none;
    border:none;

}


.item blockquote {
    border-left: none;
    margin: 0;
	font-size:14px;
	color:#333;
}
.item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
    margin-right: 10px;
}

.hovereffect {
  width: 100%;
  height: 30%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  position: absolute;
  overflow: hidden;
  width: 70%;
  height: 80%;
  left: 10%;
  top: 10%;
  border-bottom: 1px solid #f60;
  border-top: 1px solid #f60;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(0,1);
  -ms-transform: scale(0,1);
  transform: scale(0,1);
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.hovereffect img { 
  width: 50%;
  height: 100%;
    
  display: block;
  position: relative;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}


.hovereffect:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
  filter: brightness(0.6);
  -webkit-filter: brightness(0.6);
}

.hovereffect h2 {
  text-transform: uppercase;
  text-align: center;
  position: relative;
  font-size: 17px;
  background-color: transparent;
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,-100%,0);
  transform: translate3d(0,-100%,0);
}

.hovereffect a, hovereffect p {
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,100%,0);
  transform: translate3d(0,100%,0);
}

.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
  text-decoration: none;
    position: relative;
    color: #fff;
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
    
    .login-modal-div .modal-header #m1:checked ~ #content1, .login-modal-div .modal-header #m2:checked ~ #content2 ,  .login-modal-div .modal-header #m3:checked ~ #content3,  .login-modal-div .modal-header #m4:checked ~ #content4, .login-modal-div .modal-header #m5:checked ~ #content1, .login-modal-div .modal-header #m6:checked ~ #content2 ,  .login-modal-div .modal-header #m7:checked ~ #content3,  .login-modal-div .modal-header #m8:checked ~ #content4 , .login-modal-div .modal-header #m9:checked ~ #content1, .login-modal-div .modal-header #m10:checked ~ #content2 ,  .login-modal-div .modal-header #m11:checked ~ #content3,  .login-modal-div .modal-header #m12:checked ~ #content4{
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

</head>


<body>

     <div id="home" class="banner-area">
<div class="bg-image bg-parallax overlay" style="background-image:url(img/background03.jpg)" >
                </div>
<div class="login-modal-div" style="display: block;margin-top:10%">
  <div class="modal-content">
    <div class="white-bg center modal-header">
      <form class="login-register-div" method="post" action="Time.php">                  
          
            <input type="radio" name="tabs5" value="1" id="m1" checked="checked">
            <label class="tab-label2" for="m1">1</label>
            <input type="radio" name="tabs5" value="2" id="m2" >
            <label class="tab-label2" for="m2">2</label>
            <input type="radio" name="tabs5" value="3" id="m3">
            <label class="tab-label2" for="m3">3</label>
            <input type="radio" name="tabs5" value="4" id="m4">
            <label class="tab-label2" for="m4">4</label>
            <input type="radio" name="tabs5" value="5" id="m5">
            <label class="tab-label2" for="m5">5</label>
            <input type="radio" name="tabs5" value="6" id="m6">
            <label class="tab-label2" for="m6">6</label>
            <input type="radio" name="tabs5" value="7" id="m7">
            <label class="tab-label2" for="m7">7</label>
            <input type="radio" name="tabs5" value="8" id="m8">
            <label class="tab-label2" for="m8">8</label>
            <input type="radio" name="tabs5" value="10"  id="m9">
            <label class="tab-label2" for="m9">10</label>
            <input type="radio" name="tabs5" value="13" id="m10">
            <label class="tab-label2" for="m10">12+</label>
            <input type="radio" name="tabs5" value="16"  id="m11">
            <label class="tab-label2" for="m11">15+</label>
            <input type="radio" name="tabs5" value="21"  id="m12">
            <label class="tab-label2" for="m12">20+</label>
          <br>
        <button class="main-button1" type="submit" name="submited">Next</button>
          
          
        </form>
          
<br>
<br>
<br>
       
      </div>
  </div>
</div>
    </div>
</body>
    
</html>



