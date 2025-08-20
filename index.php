<?php

// Include functions
require 'functions.php';

// Define your pages once — with slug, nav label, meta info, and optionally menu visibility
// IMPORTANT - Make sure pages labeled and named below are identical to pages in `pages` folder
$pages = [
    'home' => [
        'nav_label' => 'Home',
        'title' => 'Home - Your Website',
        'meta_description' => 'Welcome to the homepage.',
    ],
    'dame' => [
        'nav_label' => 'dame',
        'title' => 'Profiel Van Dame',
        'meta_description' => 'Omschrijving van dame',
    ],
    // You can add more pages here easily
];

// Derive allowed pages from keys of $pages array
$allowedPages = array_keys($pages); 

// Get current page from URL, default to 'hero'
$page = $_GET['page'] ?? 'home';

// Validate page, fallback to 404 if invalid
if (!in_array($page, $allowedPages, true)) {
    $page = '404';
    $pageTitle = 'Page Not Found';
    $metaDescription = 'Sorry, the page you requested was not found.';
} else {
    $pageTitle = $pages[$page]['title'];
    $metaDescription = $pages[$page]['meta_description'];
}

// Include head
require 'head.php';

// Render nav
require ROOT_DIR . '/components/layout/nav.php';

// Include page content below
?>
<main class="main">
    <?php

    // Include the content file for the requested page
    $pageFile = ROOT_DIR . "/pages/{$page}.php";
    if (file_exists($pageFile)) {
        include $pageFile;
    } else {
        include ROOT_DIR . "/pages/home.php";
    }

    ?>
</main>

<?php 

// Render footer
require ROOT_DIR . '/components/layout/footer.php'

?>