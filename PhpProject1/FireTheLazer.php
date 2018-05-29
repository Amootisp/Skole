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

      <p>Du har slettet alt, håber du tilfreds</p> <br>
      <p>Du kan gå tilbage ved hjælp af knappen</p>
      <div>
        <button onclick="window.location='cool kidz club.php'" id="button";>Tilbage</button>
      </div>

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

        $sql = "DELETE FROM $tbl_name;";

        if ($conn->query($sql) === TRUE) {
          echo "<p>Alt slettet</p>";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();


        ?>

    </body>
</html>
