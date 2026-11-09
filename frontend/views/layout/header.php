<?php
$menu = get_menu_by_slug('main');
js_log($menu);
?>

<header data-layout="header">
    <div class="header-profile-box">
        
        <div class="header-profile">
            <!-- Image on the left -->
            <img src="https://otiremez.myhostpoint.ch/wp-content/uploads/2026/11/ville_transparent.png" alt="Ville Lindskog" class="profile-image">
            
            <!-- Info and Tabs stacked vertically on the right -->
            <div class="profile-content">
                
                <div class="profile-info">
                    <h1 class="profile-name">Ville Lindskog</h1>
                    <div class="profile-contact">
                        <p>079 XXX XX XX</p>
                        <p>grizzly.lindskog@gmail.com</p>
                    </div>
                </div>

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

            </div> <!-- /profile-content -->
        </div>

    </div> 
</header>