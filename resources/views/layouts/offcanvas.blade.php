<!-- Off-canvas Navigation -->
<div id="offcanvas-nav" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <h3>Navigation</h3>
        <ul class="uk-nav uk-nav-default">
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
</div>