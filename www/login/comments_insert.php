
<?php


$link = mysqli_connect("localhost", "root", "root", "blog");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_POST['username']);
$comment = mysqli_real_escape_string($link, $_POST['comment']);
$email_address = mysqli_real_escape_string($link, $_POST['email']);

// attempt insert query execution
$sql = "INSERT INTO comments (id, username, comment, email, timestamp, articleid) VALUES ('NULL', '$username', '$comment', '$email_address', CURRENT_TIMESTAMP, '')";
if(mysqli_query($link, $sql)){
    $link_adress1 = 'sportartikel.php';
    echo "Comment is verzonden, bedankt voor uw mail.
    <a href='$link_adress1'>klik hier voor terug te keren</a>";
   
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>