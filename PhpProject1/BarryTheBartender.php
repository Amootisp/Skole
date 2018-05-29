<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cool Kidz club</title>
        <style>
        p {
            text-align: center;
        }
        div {
            text-align: center;
        }
        </style>
    </head>
    <body>

        <?php
        $servername = 'localhost';
            $username = "root";
                $password = "";
                    $dbname = 'login try number 2';
                        $tbl_name="message";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }
        mysqli_select_db($conn, $dbname) or die ("It failed.");

        $bnavn=$_POST['bnavn'];
        $emil=$_POST['email'];
        $besked=$_POST['besked'];
        $adr=$_POST['add'];
        $nr=$_POST['nr'];

        $sql = "INSERT INTO $tbl_name (MessageID, Timestamp, Brugernavn, Email, Besked, Adresse, `Telefon Nummer`) VALUES ('',NOW(),'bnavn','emil','besked','adr','3');";

        if ($conn->query($sql) === TRUE) {
          echo "<p>Besked indtastet</p>";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();


        ?>
        <p>Tryk på knappen for at gå tilbage</p>
        <div>
          <button onclick="window.location='cool kidz club.php'" id="button";>Tilbage</button>
        </div>

    </body>
</html>
