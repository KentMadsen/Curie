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
        ?>
        <main>

        </main>
        <?php
            include './generics/Footer.html';
        ?>
        <script src="./script/scripts.js"
                onload="select_page('header_gallery_link');">
        </script>
    </body>
</html>