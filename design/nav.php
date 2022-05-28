<nav id="navbar-scroll-transparent" class="navigation bg-blue padding-all">
    <div class="nav-container">
        <div class="row-left">
            <a href="index.php" class="nav-logo">
                <img class="logo" src="static/content/icons/logo.svg"/ alt="logo">
            </a>
            <ul class="nav-list ml100">
                <div class="flex nav not-nav one">
                    <li class="nav-item">
                        <a href='index.php' class="nav-link">Acasă</a>
                    </li>
                    <li class="nav-item">
                        <a href='cum-functioneaza.php' class="nav-link">Cum funcționează?</a>
                    </li>
                    <li class="nav-item">
                        <a href='povesti-de-succes.php' class="nav-link">Povești de succes</a>
                    </li>
                </div> 
            </ul>
        </div>
            <ul class="nav-list hide-desk row">
                <div class="flex nav">
                    <li class="nav-item row">
                        <a href='depune-ideea.php' class="nav-link not row blue-btn hide-desk">Depune ideea aici <img src="static/content/icons/edit.svg" alt="Depunde ideea"></a>
                    </li>
                </div>
            </ul>
        <div class="all">
            <ul class="nav-list row">
                <div class="flex nav phone not-nav">
                    <li class="nav-item">
                        <a href='index.php' class="nav-link hide-desk">Acasă</a>
                    </li>
                    <li class="nav-item">
                        <a href='cum-functioneaza.php' class="nav-link hide-desk">Cum funcționează?</a>
                    </li>
                    <li class="nav-item">
                        <a href='povesti-de-succes.php' class="nav-link hide-desk">Povești de succes</a>
                    </li>
                    <li class="nav-item lg-not lg-yes mr20">
                        
                        <?php 
                        
                        if ( !isset($_COOKIE['user']) ) {
                        
                        ?>                    
                        <a href='login-register.php' class="nav-link not">Register / Login</a>
                        <?php } else { ?>
                        <a href='cont.php' class="nav-link not">Contul Meu</a>
                        <?php }?>
                    </li>
                    <li class="nav-item lg-not lg-yes row">
                        <?php 
                        
                        if ( !isset($_COOKIE['user']) ) {
                        
                        ?>                    
                        <a href='depune-ideea.php' class="nav-link not row blue-btn white-color phone">Depune ideea aici <img src="static/content/icons/edit.svg" alt="Depunde ideea"></a>

                        <?php } else { ?>
                        <a href='depune-ideea.php' class="nav-link not row blue-btn white-color phone">Depune ideea aici <img src="static/content/icons/edit.svg" alt="Depunde ideea"></a>
                        <?php }?>

                    </li>
                </div>
            </ul>
        </div>
        <div class="hamburger hamburger--elastic fixed">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </div>
</nav>