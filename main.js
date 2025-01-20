// Add any custom JavaScript functionality here
document.addEventListener('DOMContentLoaded', function() {
    // Example: Add active class to current navigation item
    const navItems = document.querySelectorAll('.uk-navbar-nav li');
    navItems.forEach(item => {
        item.addEventListener('click', function() {
            navItems.forEach(i => i.classList.remove('uk-active'));
            this.classList.add('uk-active');
        });
    });
});