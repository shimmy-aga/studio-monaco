
<html lang="en">
<head>

    <!-- Standard HTML -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Standard SEO -->
    <title> Studio Monaco </title>
    <meta name="description" content="Welkom bij Studio Monaco">

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
    <script src="/assets/js/main.js" defer></script>
    <script src="/assets/js/gallery.js" defer></script>

</head>

<body>

    <section class="section splits">
        
        <!-- first -->
        <div class="split">

            <div class="single tertiary-font text-center">
                <h1 class="title-small">GALLERIJ</h1>
            </div>  

            <div class="gallery" onclick="openLightbox(event)">

                <img src="/assets/media/placeholder-1.jpg" alt="">
                <img src="/assets/media/placeholder-2.jpg" alt="">
                <img src="/assets/media/placeholder-3.jpg" alt="">
                <img src="/assets/media/placeholder-4.jpg" alt="">
                <img src="/assets/media/placeholder-5.webp" alt="">
                <img src="/assets/media/placeholder-6.avif" alt="">
            
            </div>


            <div id="lightbox">
                
                <span id="close-btn" onclick="closeLightbox()">&times;</span>

                <img id="lightbox-img" src="" alt="lightbox image">
                
                <div id="thumbnail-container" class="thumbnail-container">
                    
                </div>

                <button id="prev-btn" onclick="changeImage(-1)">&lt;</button>
                <button id="next-btn" onclick="changeImage(1)">&gt;</button>
                
            </div>

        </div>

        <!-- second -->
        <div class="split">

            <div class="description tertiary-font">
                <span class="title-small">DAME</span>
                <h1 class="title-medium font-weight-700">MANDY</h1>
                <p class="text-medium">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non eros leo. 
                </p>
            </div>

            <div class="description tertiary-font">
                <h1 class="text-extra font-weight-900">Looks</h1>
                <ul class="text-medium list-disced">
                    <li>Leefttijd: 26</li>
                    <li>Cupmaat: C</li>
                    <li>Haarkleur: Blond</li>
                    <li>Haarlengte: Lang</li>
                    <li>Oogkleur: Groen</li>
                    <li>Lengte: 173cm</li>
                </ul>
            </div>

            <div class="description tertiary-font">
                <a href="" class="btn btn-secondary text-medium">Boek nu</a>
                <ul class="mt-25 text-big font-weight-500">
                    <li><i class="fa-solid fa-phone"></i>+31 652939393</li>
                    <li><i class="fa-solid fa-euro-sign"></i>120 euro per half uur</li>
                </ul>
            </div>
            
            <div class="img-mask"><img src="/assets/media/mandy.jpg" alt=""></div>

        </div>

    </section>

</body>