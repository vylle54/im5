<?php
$menu = get_menu_by_slug('main');
js_log($menu);
?>

<header data-layout="header">
    <div class="profile-section">
        <!-- Hier kommt dein Header-Inhalt (Bild, Name, Kontakt) -->
        <mark>hier kommt der header</mark>
    </div>
    
    <nav class="nav-container">
        <ul class="nav">
            <?php foreach ($menu as $item) : ?>
                <li class="nav-item">
                    <a target="<?= $item['target'] ?>" href="<?= $item['url'] ?>">
                        <?= $item['title'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>