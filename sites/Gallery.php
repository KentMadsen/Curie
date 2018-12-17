<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            include './generic_head.php';
        ?>
        <title>
            <?php
                include './functions/statements.php';
                printTitle('Gallery');
            ?>
        </title>
    </head>
    <body>
        <?php
            include './Header.php';
            include './content/Gallery.html';
            include './generics/Footer.html';
        ?>
    </body>
</html>