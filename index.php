<?php

// Include functions
require 'functions.php';

// Define your pages once — with slug, nav label, meta info, and optionally menu visibility
// IMPORTANT - Make sure pages labeled and named below are identical to pages in `pages` folder
$pages = [
    'home' => [
        'title' => 'Studio Monaco - home',
        'meta_description' => 'Welkom bij Studio Monaco.',
    ],
    'onze-dames' => [
        'title' => 'Studio Monaco - onze dames',
        'meta_description' => '',
    ],
    'dame' => [
        'title' => 'Studio Monaco - profiel van dame',
        'meta_description' => '',
    ],
    'agenda' => [
        'title' => 'Studio Monaco - agenda',
        'meta_description' => '',
    ],
    'tarieven' => [
        'title' => 'Studio Monaco - tarieven',
        'meta_description' => '',
    ],
    'contact' => [
        'title' => 'Studio Monaco - contact',
        'meta_description' => '',
    ],
    'boek-nu' => [
        'title' => 'Studio Monaco - boek nu jouw afsrpaak',
        'meta_description' => '',
    ],
    'test' => [
        'title' => 'Studio Monaco - test',
        'meta_description' => '',
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
render_layout('nav');

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
render_layout('footer');

?>