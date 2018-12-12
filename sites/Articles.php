<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            include './generic_head.php';
        ?>

        <title>
            Space Education: Articles
        </title>
    </head>

    <body>
        <?php
            include './Header.php';
        ?>
        <main>
            <?php
                include './content/Articles.html';
            ?>
        </main>
        <?php
            include './generics/Footer.html';
        ?>

        <script src="./script/scripts.js"
                onload="select_page('header_articles_link');">
        </script>
        
        <script src="./script/scroll.js">
        </script>

        <script src="./script/scripts.js"
                onload="use_overlay();">
        </script>
        <script src="./script/scripts.js"
                onload="init();">
        </script>
    </body>
</html>