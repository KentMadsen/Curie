<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './generic_head.php'; ?>
        <title>
            <?php
                include './functions/statements.php';
                printTitle('Discover');
            ?>
        </title>
    </head>
    <body>
        <?php
            include './Header.php';
        ?>
        <main>
            <?php
                include './content/Insight.html';
            ?>
        </main>
        <?php
            include './generics/Footer.html';
        ?>
    </body>
</html>