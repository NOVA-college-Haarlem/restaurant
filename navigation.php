<?php
$page = basename($_SERVER["SCRIPT_FILENAME"], '.php');
?>
<div class="nav-holder">
    <nav>
        <ul>
            <li><a href="index.php" class="<?php echo ($page == "index" ? 'act-link' : '') ?>">Home</a></li>
            <li><a href="menu.php" class="<?php echo ($page == "menu" ? 'act-link' : '') ?>">Menu</a></li>
            <li><a href="gallery.php" class="<?php echo ($page == "gallery" ? 'act-link' : '') ?>">Gallery</a></li>
            <li><a href="reservation.php" class="<?php echo ($page == "reservation" ? 'act-link' : '') ?>">Reservation</a></li>
            <li><a href="shop.php" class="<?php echo ($page == "shop" ? 'act-link' : '') ?>">Shop</a></li>
            <li><a href="contact.php" class="<?php echo ($page == "contact" ? 'act-link' : '') ?>">Contact</a></li>
            <li><a href="blog.php" class="<?php echo ($page == "blog" ? 'act-link' : '') ?>">Journal</a></li>
        </ul>
    </nav>
</div>