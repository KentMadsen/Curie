<!DOCTYPE html>

<html lang="en">
    <head>
        <?php
            include './generic_head.php';
        ?>
        <title>
            <?php
                include './functions/statements.php';
                printTitle('HOME');
            ?>
        </title>
    </head>
    
    <body>
        <?php
            include './Header.php';
        ?>
        <?php 
            include './content/index.html';
        ?>
        <?php
            include './generics/Footer.html';
        ?>
    </body>
</html>