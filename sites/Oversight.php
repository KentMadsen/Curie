<!DOCTYPE html>

<html lang="en">
    <head>
        
        <?php 
            include './generic_head.php';
        ?>

        <title>
            Space Education: Insight
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
        <script src="./script/scripts.js"
                onload="select_page('header_insight_link');">
        </script>
        
        <script src="./script/scripts.js"
                onload="use_overlay();">
        </script>
        <script src="./script/scripts.js"
                onload="init();">
        </script>
    </body>
</html>