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
            #First {
                display: table;
                width: 100%
            }
            #Bob {
                display: table-cell;
                text-align: center;
                vertical-align: middle;
            }
            header {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Fælles Forum</h1>
            <h2>Indtast brugernavn og adgangskode</h2>
        </header>
        
        <br>
        
        <div id='First'>
            <form id="Bob" action="BobTheBouncer.php" method="post">
            
                <label for="Brugernavn">Brugernavn:</label>
                    <br>
                <input name="Brugernavn" type="brugernavn" id="Brugernavn">
            
                    <br>
            
                <label for="Adgangskode">Adgangskode:</label>
                    <br>
                <input name="Adgangskode" type="Password" id="Adgangskode">
                    <br>
                <input name="submit" type="submit" value="Login">
            </div>
        </form>
        <?php

        ?>
    </body>
</html>
