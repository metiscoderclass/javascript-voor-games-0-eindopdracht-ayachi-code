<?php

session_start();

?>
<?php



$naam = $_POST['naam'];
$wachtwoord = $_POST['wachtwoord'];

//$naam = stripcslashes($naam);
//$wachtwoord = stripcslashes($wachtwoord);
//$naam = mysql_real_escape_string($naam);
//$wachtwoord = mysql_real_escape_string($wachtwoord);

$_SESSION["naam"] = $naam;
$_SESSION["wachtwoord"] = $wachtwoord;

$host = "localhost";
$user = "ayachi2003";
$pass = "";
$db = "login";
$port = 3306;

$connection = mysqli_connect($host, $user, $pass, $db, $port);

$query = "select * from users where username = '$naam' and password = '$wachtwoord' ";

$result = mysqli_query($connection,$query);

$row = mysqli_fetch_array($result);

if ($row['username'] == $naam && $row['password'] == $wachtwoord) {
    //echo "Login succes vol: welkom ".$row['username'];
    header('Location: /public/index.php');

    
} else {
    echo "login faild verkeert username of wachtwoord";
}


mysqli_close($connection);
?>