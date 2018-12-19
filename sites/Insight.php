<!DOCTYPE html>

<html lang="en">
    <head>
        <?php
            include './generic_head.php';
        ?>

        <title>
            <?php
                include './functions/statements.php';
                printTitle('Insight');
            ?>
        </title>
    </head>
    
    <body>
        <?php
            include './Header.php';
            include './content/Insight.html';
            include './generics/Footer.html';
        ?>
    </body>
</html>