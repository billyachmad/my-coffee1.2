<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center><h2>

<?php
require_once('config.php');

$sql = "SELECT * FROM main_database";
$query = mysqli_query($CON, $sql);
$queue_number = $_GET['queue_number'];
echo "Your queue number is : ".$queue_number;
?>
<center>
</h2>
<br>
<br>
<br>
<html>
    <head>
        <title>Mari pesan bersama kami!</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <center>
            <input type="button" onclick="window.location='index.php'" class="tombol" value = "Ok, i'll wait!"/>
        </center>
    </body>
</html>