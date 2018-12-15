<!-- -- Header.html -- -->
    <!-- Default dashboard -->
<header>
    <div class="page_header_area">
    <?php
        include './generics/Header_content.html';
        include './generics/subheader.html';
    ?>
    </div>
</header>

    <!-- Navigation, for desktop -->
<header class="hide_on_mobile">
    <div class="page_navigation_area">
        <?php
            include './generics/Header_content.html';
        ?>
    </div>
</header>

    <!--  -->
<header class="hide_on_desktop hide">
    <div class="mobile_page_navigation_area">
        <?php
            include './generics/Header_content.html';
        ?>
    </div>
</header>

<!-- Nav  -->
<div class="hide_on_desktop">
    <div class="menu_button" onclick="overlay_click()">
        <div class="menu_button_icon open-icon">
            <i class="fas fa-bars">
            </i>
        </div>
        <div class="menu_button_icon close-icon">
            <i class="fas fa-times">
            </i>
        </div>
    </div>
</div>