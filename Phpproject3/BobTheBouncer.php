<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        $servername = 'localhost';
            $username = "root";
                $password = "";
                    $dbname = 'login try number 2';
                        $tbl_name="login";
                    
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }
        
        
        $my_username=$_POST['Brugernavn'];
        $my_password=$_POST['Adgangskode'];
        
        mysqli_select_db($conn, $dbname) or die ("It failed.");
            $sql = "SELECT * FROM $tbl_name Where Brugernavn='$my_username' AND Pasword='$my_password'";
                $result = mysqli_query($conn,$sql);
                
        $count = mysqli_num_rows($result);
        
        if($count==1){
            $_SESSION['login'] = 1;
            header("location:cool kidz club.php");
        }
        else {
            header("location:You're a failure.php");
            
        }
        
        
        $conn->close();
                
        ?>
    </body>
</html>
