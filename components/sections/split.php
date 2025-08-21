
<!-- SPLIT SECTION --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->
<!-- ------------- --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->

<section class="section splits">
    
    <!-- first -->
    <div class="split">

        <div class="single tertiary-font text-center">
            <h1 data-animate class="title-small">GALLERIJ</h1>
        </div>  

        <div class="gallery" onclick="openLightbox(event)">

            <img data-animate src="/assets/media/placeholder-1.jpg" alt="">
            <img data-animate src="/assets/media/placeholder-2.jpg" alt="">
            <img data-animate src="/assets/media/placeholder-3.jpg" alt="">
            <img data-animate src="/assets/media/placeholder-4.jpg" alt="">
            <img data-animate src="/assets/media/placeholder-5.webp" alt="">
            <img data-animate src="/assets/media/placeholder-6.avif" alt="">
        
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

        <div data-animate class="description tertiary-font">
            <span class="title-small">DAME</span>
            <h1 class="title-medium font-weight-700">MANDY</h1>
            <p class="text-medium">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non eros leo. 
            </p>
        </div>

        <div data-animate class="description tertiary-font">
            <h1 class="text-extra font-weight-900">Looks</h1>
            <ul class="text-medium list-disced">
                <li>Leeftijd: 26</li>
                <li>Cupmaat: C</li>
                <li>Haarkleur: Blond</li>
                <li>Haarlengte: Lang</li>
                <li>Oogkleur: Groen</li>
                <li>Lengte: 173cm</li>
            </ul>
        </div>

        <div data-animate class="description tertiary-font">
            <a href="" class="btn btn-secondary text-medium">Boek nu</a>
            <ul class="mt-25 text-big font-weight-500">
                <li><i class="fa-solid fa-phone"></i>+31 6 12345678</li>
                <li><i class="fa-solid fa-euro-sign"></i>120 euro per half uur</li>
            </ul>
        </div>
        
        <div class="img-mask"><img src="/assets/media/mandy.jpg" alt=""></div>

    </div>

</section>