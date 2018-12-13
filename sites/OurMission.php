<!DOCTYPE html>
<html lang="en">
    <head>
    
        
        <?php 
            include './generic_head.php';
        ?>

        <title>
            <?php
                include './functions/statements.php';
                printTitle('Our Mission'); 
            ?>
        </title>
        
    </head>
    <body>
        <?php
            include './Header.php';
        ?>
        <main>

        </main>
        <?php
            include './generics/Footer.html';
        ?>
        <script src="./script/scripts.js"
                onload="select_page('header_discover_link');">
        </script>
        
        <script src="./script/scripts.js"
                onload="use_overlay();">
        </script>
        <script src="./script/scripts.js"
                onload="init();">
        </script>
    </body>
</html>