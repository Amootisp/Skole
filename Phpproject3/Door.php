<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ma'lady</title>
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
        </style>
    </head>
    <body>
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
                <input name="submit" type="submit" value="submit">
            </div>
        </form>
        <?php

        ?>
    </body>
</html>
