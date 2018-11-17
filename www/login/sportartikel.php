<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$query = $DBcon->query("SELECT * FROM comments WHERE 1=".$_SESSION['userSession']);
$commentRow=$query->fetch_array();
$DBcon->close();

?>
<!DOCTYPE html>

<html>
<head>
<title>Sport - <?php echo $userRow['email']; ?></title>
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
          <li class="active"><a class="drop" href="#">Articles</a>
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

  

</div>
<!-- End Top Background Image Wrapper --> 

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body --> 

    <div class="sidebar one_quarter first"> 

      <div class="sdb_holder">
        <h6>Lorem ipsum dolor</h6>
        <address>
        Full Name<br>
        Address Line 1<br>
        Address Line 2<br>
        Town/City<br>
        Postcode/Zip<br>
        <br>
        Tel: xxxx xxxx xxxxxx<br>
        Email: <a href="contact.php">contact@bloggy.com</a>
        </address>
      </div>
     

    </div>

    <div class="content three_quarter"> 

      <h1>Degryse: “Witsel begrijp ik niet, maar in Benteke zijn plaats zou ik naar China gaan”</h1>
      <img class="imgl borderedbox inspace-5" src="../images/sport1.jpg" alt="">
      <p><i>Analist Marc Degryse begrijpt niet dat Rode Duivel Axel Witsel met zijn transfer naar China voor het geld kiest. “Met zijn kwaliteiten had ik verwacht dat hij voor de sportieve uitdaging zou gaan. Dat Benteke ook een bod uit China kreeg? In zijn plaats zou ik wel denken: ja, ga maar”, vertelde hij bij Play Sports.</i></p>
      
      <p>De ex-speler van Club Brugge en Anderlecht werd in Studio Live van Play Sports gevraagd wat hij dacht van de transfer van Rode Duivel Axel Witsel naar China. “Moest ik in zijn schoenen staan, dan zou ik voor het sportieve avontuur kiezen”, vertelde Degryse. “Witsel weet dat de absolute topclubs hem willen. Hij heeft ook al vier jaar in Rusland gezeten. Met zijn kwaliteiten had ik verwacht dat hij voor een sportieve uitdaging zou kiezen, maar nu gaat hij naar een tweederangs competitie.”

Verrassend: Degryse adviseerde Benteke, die ook een aanbod uit China op zak heeft, wèl voor het geld te kiezen. “Van Benteke zou ik denken, ja, ga maar.” Meer uitleg over dat carrièreadvies voor Big Ben had Degryse evenwel niet in petto.</p>
      
      <div id="comments">
        <h2>Comments</h2>
        <ul>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#"><?php echo $commentRow['UserName']; ?></a>
                </address>
                <sup><i>Date: </i><?php echo $commentRow['timestamp']; ?></sup>
              </header>
              <div class="comcont">
                <p><?php echo $commentRow['comment']; ?></p>
                <!--<p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>-->
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#"><?php echo $commentRow['UserName']; ?></a>
                </address>
                <sup><i>Date: </i><?php echo $commentRow['timestamp']; ?></sup>
              </header>
              <div class="comcont">
                <p><?php echo $commentRow['comment']; ?></p>
               <!-- <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>-->
              </div>
            </article>
          </li>
          
        </ul>
        <h2>Write A Comment</h2>
        <form action="comments_insert.php" method="post">
          <div class="one_third first">
            <label for="username">Username <span>*</span></label>
            <input type="text" name="username" id="username" value="<?php echo $userRow['username']; ?>" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="<?php echo $userRow['email']; ?>" size="22" required>
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Form">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
      </div>

    </div>

    <!-- / main body -->
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
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.backtotop.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>