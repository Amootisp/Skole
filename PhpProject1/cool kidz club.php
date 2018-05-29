<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cool Kidz Club</title>
        <style>
            img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 40%;
            }
            p {
                text-align: center

            }

        </style>
    </head>
    <body>
        <p>
            You logged in successfully
        </p>
        <form action="BarryTheBartender.php" method="post">
            Brugernavn:<input type="text" name="bnavn" id="bnavn" placeholder="Brugernavn" required> <br>
            E-mail:<input type="text" name="email" id="email" placeholder="E-mail"> <br>
            Besked:<input type="text" name="besked" id="Besked" width="200" height="200" placeholder="Besked" required style="width: 300px; height: 300px; text-align: top;"> <br>
            Adresse:<input type="text" name="add" id="add" placeholder="Addresse" required> <br>
            Mobil Nummer:<input type="text" name="nr" id="nr" placeholder="Mobil nummer" required> <br>

            <button type="submit">Save</button>
            <button type="reset">Reset</button>
            
        </form>
        <form action="Showlove.php">
        <button type="Read all messages">Read all messages</button>
        </form>
        <form action="FireTheLazer.php">
        <button type="submit">Delete all messages</button>
        </form>
        <form action="Door.php">
        <button type="submit">Log ud</button>
        </form>
        <?php

        session_start();
        error_reporting(0);
        $bnavn = $_POST['Brugernavn'];
        $emil = $_POST['E-mail'] ;
        $besked = $_POST['Besked'] ;
        $add = $_POST['add'] ;
        $nr = $_POST['nr'];



        ?>
    </body>
</html>
