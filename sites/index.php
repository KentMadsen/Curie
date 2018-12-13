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
        ?>
        <main>
            <?php 
            include './content/index.html';
            ?>
        </main>
        <?php
            include './generics/Footer.html';
        ?>
        <!-- -->
        <script src="./script/scripts.js"
                onload="select_page('header_home_link')">
        </script>
        <script src="./script/scroll.js">
        </script>
        <script src="./script/scripts.js"
                onload="init();">
        </script>
    </body>
</html>