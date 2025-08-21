<html lang="en">

<head>

    <!-- Standard HTML -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Standard SEO -->
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>">
    <meta name="robots" content="index, follow">

    <!-- CDN'S -->
    <script rel="preconnect" src="https://kit.fontawesome.com/1e28254ed2.js" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/media/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="assets/media/favicon/favicon.svg" />
    <link rel="shortcut icon" href="assets/media/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Studio Monaco" />
    <link rel="manifest" href="assets/media/favicon/site.webmanifest" />

    <!-- Custom CSS and JS -->
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/animations.css">
    <link rel="stylesheet" href="/assets/css/calender.css">
    <script src="/assets/js/main.js" defer></script>
    <script src="/assets/js/gallery.js" defer></script>
    <script src="/assets/js/animations.js" defer></script>
    <script src="/assets/js/calender.js" defer></script>

</head>

<body>
    