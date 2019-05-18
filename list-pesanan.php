<?php 
include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Mari pesan bersama kami!</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <h3>You can view your order at the table below :</h3>
    </header>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Queue Number</th>
            <th>Coffee Type</th>
            <th>Methods</th>
            <th>Size</th>
            <th>Details</th>
            <th>Payment Methods</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM main_database";
        $query = mysqli_query($CON, $sql);

        while($pesanan = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$pesanan['queue_number']."</td>";
            echo "<td>".$pesanan['coffee_type']."</td>";
            echo "<td>".$pesanan['methods']."</td>";
            echo "<td>".$pesanan['size']."</td>";
            echo "<td>".$pesanan['details']."</td>";
            echo "<td>".$pesanan['payment_methods']."</td>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
    
    <body>
        <center>
            <input type="button" onclick="window.location='form-pesan.php'" class="tombol" value="I want to order again, Please!"/>
        </center>
    </body>
</html>
