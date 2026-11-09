<?php
$menu = get_menu_by_slug('main');
js_log($menu);
?>

<header data-layout="header">
    
    <!-- NEW: Wrapper for the blue background and rounded corners -->
    <div class="header-profile-box">
        <!-- Profile Section -->
        <div class="header-profile">
            <!-- Replace with your actual media library URL or template directory path -->
            <img src="https://otiremez.myhostpoint.ch/wp-content/uploads/2026/11/ville_transparent.png" alt="Ville Lindskog" class="profile-image">
            
            <div class="profile-info">
                <h1 class="profile-name">Ville Lindskog</h1>
                <div class="profile-contact">
                    <p>079 509 42 19</p>
                    <p>grizzly.lindskog@gmail.com</p>
                </div>
            </div>
        </div>
    </div> <!-- /header-profile-box -->

    <!-- Navigation Tabs (Now sitting outside the blue box) -->
    <div class="nav-container">
        <ul class="nav">
            <li class="nav-item">
                <a href="#">Meine Projekte</a>
            </li>
            <li class="nav-item">
                <a href="#">Über mich</a>
            </li>
        </ul>
    </div>
</header>