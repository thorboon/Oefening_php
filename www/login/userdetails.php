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
<title>Userdetails - <?php echo $userRow['email']; ?></title>
<meta charset="utf-8">
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
          <li><a href="../index.php">Home</a></li>
          <li><a class="drop" href="sportartikel.php">Articles</a>
            <ul>
              <li ><a href="sportartikel.php">Economie</a></li>
              <li><a href="sportartikel.php">Sport</a></li>
              <li><a href="sportartikel.php">Oorlog</a></li>
              <li><a href="sportartikel.php">Politiek</a></li>
            </ul>
          </li>
          <li ><a  href="contact.php">Contact</a></li>
          <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
          <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
        </ul>
      </nav>

    </header>
      </div>

  
</div>
<!-- End Top Background Image Wrapper --> 

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- / main body -->
    <h1>Gebruiker info</h1>
    <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Gebruikers id</th>
              <th>Voornaam</th>
              <th>Achternaam</th>
              <th>Gebruikersnaam</th>
              <th>Email</th>
              <th>Wachtwoord</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $userRow['user_id']; ?></td>
              <td><?php echo $userRow['first_name']; ?></td>
              <td><?php echo $userRow['last_name']; ?></td>
              <td><?php echo $userRow['username'];?></td>
              <td><?php echo $userRow['email']; ?></td>
              <td><?php echo $userRow['password_hash']; ?>*******</td>
            </tr>
          </tbody>
        
        </table>
        
      </div>
      
      

     <!-- <?php
     // UPDATE `tbl_users` SET `user_id`=[value-1],`first_name`=[value-2],`last_name`=[value-3],`username`=[value-4],`email`=[value-5],`password`=[value-6] WHERE 1
      ?> -->

      <p>Dapiensociis <a href="#">temper donec auctortortis cumsan</a> et curabitur condis lorem loborttis leo. Ipsumcommodo libero nunc at in velis tincidunt pellentum tincidunt vel lorem.</p>
      <p>Portortornec condimenterdum eget consectetuer condis consequam pretium pellus sed mauris enim. Puruselit mauris nulla hendimentesque elit semper nam a sapien urna sempus.</p>

    <div class="clear"></div>
  </main>
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
          <li><a href="conctact.php">Contact</a></li>
          <li><a href="#">Disclaimer</a></li>
        </ul>
      </nav>
      
    </div>
    <div class="one_quarter">
      <h6 class="heading">Articles</h6>
      <ul class="nospace linklist">
        <li><a href="sportartikel.php">Economie</a></li>
        <li><a href="sportartikel.php">Sport</a></li>
        <li><a href="sportartikel.php">Oorlog</a></li>
        <li><a href="sportartikel.php">Politiek</a></li>
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
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.backtotop.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>