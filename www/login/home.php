<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>


<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home - <?php echo $userRow['email']; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">




</head>
<body id="top">
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/achtergrnd.jpg');"> 
 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      
      <div id="logo" class="fl_left">
        <h1><a href="../index.php">Bloggy</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="../index.php">Home</a></li>
          <li><a class="drop" href="#">Articles</a>
            <ul>
              <li ><a href="sportartikel.php">Economie</a></li>
              <li><a href="sportartikel.php">Sport</a></li>
              <li><a href="sportartikel.php">Oorlog</a></li>
              <li><a href="sportartikel.php">Politiek</a></li>
            </ul>
          </li>
           
            <li><a href="contact.php">Contact</a></li>
          
            <li><a href="userdetails.php"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
          </ul>
      </nav>
      
    </header>
  </div>
  
  <div id="pageintro" class="hoc clear">
    <article> 
      
      <h3 class="heading">Bloggy</h3>
      <p>Dit is een website voor iedereen die geinteresseerd is in algemene onderwerpen. Hierop komen artikels waarop jij zelf kan reageren en jouw eigen mening geven.</p>
      <p class="font-x1 uppercase bold"><a href="sportartikel.php">Bekijk hier artikels</a></p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="index.php">Login</a></li>
          <li><a class="btn inverse" href="#">Registration</a></li>
        </ul>
      </footer>
      
    </article>
  </div>
 
</div>
<!-- End Top Background Image Wrapper --> 

    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<div class="wrapper row3">
  <div class="hoc container clear"> 
    
    <ul id="testimonials" class="nospace group">
      <li class="one_third first">
        <figure><img class="circle" src="../images/achtergrnd.jpg" alt="">
          <figcaption><strong>A.Doe</strong><br>
            <em>Position, Company Name</em></figcaption>
        </figure>
        <blockquote>Eros metus ornare et est at fermentum cursus nisi nulla at consectetur turpis suspendisse rhoncus est ipsum nec venenatis nulla gravida et integer quis ligula volutpat vehicula nisl quis suscipit turpis curabitur dictum maximus molestie cum sociis natoque penatibus et magnis dis.</blockquote>
      </li>
      <li class="one_third">
        <figure><img class="circle" src="../images/achtergrnd.jpg" alt="">
          <figcaption><strong>B.Doe</strong><br>
            <em>Position, Company Name</em></figcaption>
        </figure>
        <blockquote>Montes nascetur ridiculus mus maecenas sit amet aliquam dolor quisque felis ligula aliquam ac dolor sit amet sodales interdum massa aliquam ut quam finibus mattis neque a lobortis tortor sed fringilla sodales magna et mollis sem maximus ut fusce non ultricies erat integer euismod justo.</blockquote>
      </li>
      <li class="one_third">
        <figure><img class="circle" src="../images/achtergrnd.jpg" alt="">
          <figcaption><strong>C.Doe</strong><br>
            <em>Position, Company Name</em></figcaption>
        </figure>
        <blockquote>Eu sapien blandit dictum nullam turpis diam viverra sit amet ex ac laoreet condimentum nisi maecenas venenatis mauris eget dignissim lobortis proin vitae odio blandit mi dapibus volutpat mauris malesuada ornare velit quis ultrices mauris pretium sed fusce pharetra faucibus purus eget.</blockquote>
      </li>
    </ul>
  
  </div>
</div>


<div class="wrapper overlay bgded" style="background-image:url('../images/achtergrnd.jpg');">
  <div id="ctdetails" class="hoc clear"> 
    
    <ul class="nospace group">
      <li class="one_third first"><i class="fa fa-map-marker"></i>
        <p>Our Location</p>
        <p><a href="#">Google Maps</a></p>
      </li>
      <li class="one_third"><i class="fa fa-phone"></i>
        <p>Call us</p>
        <p>+00 (123) 456 7890</p>
      </li>
      <li class="one_third"><i class="fa fa-envelope-o"></i>
        <p>Email us</p>
        <p>info@bloggy.com</p>
      </li>
    </ul>
    
  </div>
</div>

<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    
    <div class="one_quarter first">
      <h6 class="heading">Bloggy</h6>
      <p>Dit is een website voor iedereen die geinteresseerd is in algemene onderwerpen. Hierop komen artikels waarop jij zelf kan reageren en jouw eigen mening geven.</p>
      
    </div>
    <div class="one_quarter">
      <h6 class="heading">Social Media</h6>
      <article>
        <p>Wij zijn ook heel erg actief op facebook en twitter. Geef ons een duimpje omhoog, en we stellen je zeker niet teleur!</p>
      </article>
       <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
       
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Pages</h6>
       <nav>
        <ul class="nospace">
          <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="#">Disclaimer</a></li>
        </ul>
      </nav>
      
    </div>
    <div class="one_quarter">
      <h6 class="heading">Articles</h6>
      <ul class="nospace linklist">
        <li><a href="#">Economie</a></li>
        <li><a href="sportartikel.php">Sport</a></li>
        <li><a href="#">Oorlog</a></li>
        <li><a href="#">Politiek</a></li>
      </ul>
    </div>
    
  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
   
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="gotoadmin.php">Thor Boonaert</a></p>
    
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.backtotop.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>