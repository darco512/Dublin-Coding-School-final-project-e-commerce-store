<header>

    <div class="burger-menu">
        <svg xmlns="http://www.w3.org/2000/svg" id="burger-icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </div>

    <div class="mobile-nav">
        <a href="/Coding School Final Project/">Home</a>
        <a href="/Coding School Final Project/pages/collections.php">Collections</a>
        <a href="/Coding School Final Project/pages/contact.php">Contact Us</a>
        <a href="/Coding School Final Project/pages/about.php">About</a>
    </div>

    <div class="first">
        <a href="/Coding School Final Project/">
            <img height='70' id="logo" src="/Coding School Final Project/images/logo-color.png" alt="Logo" />
        </a>
    </div>
    <nav>
        <a href="/Coding School Final Project/">Home</a>
        <a href="/Coding School Final Project/pages/collections.php">Collections</a>
        <a href="/Coding School Final Project/pages/contact.php">Contact Us</a>
        <a href="/Coding School Final Project/pages/about.php">About</a>
    </nav>
    <div class="icons">
        <a href="<?php if(isset($_COOKIE['user'])) { echo '/Coding School Final Project/pages/profile.php'; } else { echo '/Coding School Final Project/pages/login.php';} ?>">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>                  
        </a>
        <a href="/Coding School Final Project/pages/cart.php">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>
            </a>
    </div>
    <script src="/Coding School Final Project/js/header.js"></script>
</header>