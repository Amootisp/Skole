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

        $sql = "SELECT Timestamp, Brugernavn, Email, Besked, Adresse, `Telefon Nummer` FROM message";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                echo $row["Timestamp"] ."<br>". $row["Brugernavn"] ."<br>". $row["Email"] ."<br>". $row["Besked"] ."<br>". $row["Adresse"]. "<br>". "<hr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();


        ?>
        <p> Gå tilbage ved hjælp af knappen</p>
        <div>
          <button onclick="window.location='cool kidz club.php'" id="button";>Tilbage</button>
        </div>
    </body>
</html>
