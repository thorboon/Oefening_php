<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "admin"
&& $pass == "admin")
{
        include("../admin/index.php");
}
else
{
    if(isset($_POST))
    {?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>go to admin</title>

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
        <footer>
            <form method="POST"  action="../admin/index.php">
            <ul class="nospace inline pushright">
            <label for="username">Username: </label>
            <input type="text" name="user"></input><br/>
            <label for="password">Password: </label>
            <input type="password" name="pass"></input><br/>

            <input type="submit"class="button" name="submit" value="Submit">
        </ul>
             
         </form>
      </footer> 
            
                 
       
    </article>
         </div>
    <?}
}
?>