<!-- Navigation -->
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li class="<?php echo $_SERVER['PHP_SELF'] == '/index.php' ? 'uk-active' : ''; ?>">
                <a href="<?php echo route('home'); ?>"><i class="icon-home"></i> Home</a>
            </li>
            <li class="<?php echo $_SERVER['PHP_SELF'] == '/contact.php' ? 'uk-active' : ''; ?>">
                <a href="<?php echo route('contact'); ?>"><i class="icon-mail"></i> Contact</a>
            </li>
            <li class="<?php echo $_SERVER['PHP_SELF'] == '/settings.php' ? 'uk-active' : ''; ?>">
                <a href="<?php echo route('settings'); ?>"><i class="icon-settings"></i> Settings</a>
            </li>
        </ul>
    </div>
    <div class="uk-navbar-right">
        <a class="uk-navbar-toggle" href="#" uk-toggle="target: #offcanvas-nav">
            <i class="icon-menu"></i>
        </a>
    </div>
</nav>

<!-- Off-canvas Navigation -->
<div id="offcanvas-nav" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <h3>Navigation</h3>
        <ul class="uk-nav uk-nav-default">
            <li class="<?php echo $_SERVER['PHP_SELF'] == '/index.php' ? 'uk-active' : ''; ?>">
                <a href="<?php echo route('home'); ?>"><i class="icon-home"></i> Home</a>
            </li>
            <li class="<?php echo $_SERVER['PHP_SELF'] == '/contact.php' ? 'uk-active' : ''; ?>">
                <a href="<?php echo route('contact'); ?>"><i class="icon-mail"></i> Contact</a>
            </li>
            <li class="<?php echo $_SERVER['PHP_SELF'] == '/settings.php' ? 'uk-active' : ''; ?>">
                <a href="<?php echo route('settings'); ?>"><i class="icon-settings"></i> Settings</a>
            </li>
        </ul>
    </div>
</div>