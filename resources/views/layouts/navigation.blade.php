<!-- Navigation -->
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li class="{{ request()->is('/') ? 'uk-active' : '' }}">
                <a href="{{ route('home') }}"><i class="icon-home"></i> Home</a>
            </li>
            <li class="{{ request()->is('contact') ? 'uk-active' : '' }}">
                <a href="{{ route('contact') }}"><i class="icon-mail"></i> Contact</a>
            </li>
            <li class="{{ request()->is('settings') ? 'uk-active' : '' }}">
                <a href="{{ route('settings') }}"><i class="icon-settings"></i> Settings</a>
            </li>
        </ul>
    </div>
    <div class="uk-navbar-right">
        <a class="uk-navbar-toggle" href="#" uk-toggle="target: #offcanvas-nav">
            <i class="icon-menu"></i>
        </a>
    </div>
</nav>