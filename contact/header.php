<!DOCTYPE html >
<html >
<head>

<title>Halpes</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css" integrity="sha512-3q8fi8M0VS+X/3n64Ndpp6Bit7oXSiyCnzmlx6IDBLGlY5euFySyJ46RUlqIVs0DPCGOypqP8IRk/EyPvU28mQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<header>
<div class="row">

<div class="logo col-lg-2 col-md-2 col-sm-12">
<img src="images/logo-3.png" />
</div>
<div id="nav col-lg-6 col-md-6 col-sm-12"">


<div class="dropdown">
  <button class="dropbtn">Home</button>
  <div class="dropdown-content">
    <a href="#">Home One</a>
    <a href="#">Home Two </a>
    <a href="#">Home Three</a>
    <a href="#">Home Style</a>
  </div>
  </div>
  <div class="dropdown">
  <button class="dropbtn">Pages</button>
  <div class="dropdown-content">
    <a href="#">About</a>
    <a href="#">Volunteers </a>
    <a href="#">Gallery</a>
    <a href="#">Become A Volunteer</a>
  </div>
  </div>
<div class="dropdown">
  <button class="dropbtn">Donation</button>
  <div class="dropdown-content">
    <a href="#">Causes</a>
    <a href="#">Causes Details </a>
   </div>  
   </div>
<div class="dropdown">
  <button class="dropbtn">Events</button>
  <div class="dropdown-content">
    <a href="#">Events</a>
    <a href="#">Events Details </a>
  </div> 
  </div>          
<div class="dropdown">
  <button class="dropbtn">News</button>
  <div class="dropdown-content">
    <a href="#">News        </a>
    <a href="#">News Detail </a>
    </div>
  </div>
  <div class="dropdown">
  <button class="dropbtn">  <a href="http://localhost/contact/contact.php" >   Contact        </a>     </button>
  <div class="dropdown-content">
    <a href="table2.php">Show       </a>
   
    </div>
</div>
</div>
<div class="icon col-lg-4 col-md-4 col-sm-12">
<div class="social"><a href="#">
<i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-facebook"></i></a>
<a href="#"><i class="fab fa-dribbble"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#">
<i class="fas fa-search"></i>
</a>
<a href="#">
<i class="fas fa-shopping-cart"></i>
</a>
</div>  



</div>

</div>

</div>
</div>
</header>
</body>
</html>
<style>
.row{ max-width:100%; margin:0 auto;}
.logo{float:right; padding:0px 50px;}
header{width:100%; margin:0 auto; padding-top:10px; }
#nav{ margin-right:30px;}
.dropdown{float:left; text-align:center; margin:0 5px;}
.dropbtn{ padding:20px 15px;color:#666; font-size:18px; font-family:"MS Serif", "New York", serif;border:none;background-color:#FFF;}
.dropbtn a{color:#666;}
.dropdown:hover.dropbtn{border-bottom:#19c69f;}
.dropdown-content{ display:none;  background-color:#FFF; overflow:auto; position: relative; width:100%;}
.dropdown-content a {color: black; padding: 12px 16px; text-decoration: none;display: block; color: #666;}
.dropdown:hover .dropdown-content {display: block; z-index: 11;position: absolute;}
.dropdown a:hover{background-color:#19c69f;}
.icon{float:right;}
.social {    margin: 20px 0px; text-align: end;}
.social a{margin:5px; background-color:#e3d3d3; border-radius:70px; }
.social a:hover .fas {background-color: #19c69f}
.social .fas{ padding:5px; color:#000; border-radius:50px;}
.social a:hover .fab {background-color: #19c69f}
.social .fab{ padding:5px; color:#000; border-radius:50px;}
</style>