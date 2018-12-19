<!DOCTYPE html>

<html lang="en">
    <head>
        <?php
            include './generic_head.php';
        ?>
        <title>
            <?php
                include './functions/statements.php';
                printTitle('Home');
            ?>
        </title>
    </head>
    
    <body>
        <?php
            include './Header.php';
            include './content/index.html';
            include './generics/Footer.html';
        ?>
    </body>
</html>