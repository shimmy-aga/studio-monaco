
<!-- HERO SECTION --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->
<!-- ------------ --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->


<!-- Dynamic PHP -->

<?php

$title      = $title     ?? '';
$subtitle   = $subtitle  ?? '';
$bg_img     = $bg_img ?? 'assets/media/placeholder-4.jpg';
$bg_img_alt = $bg_img_alt ?? 'Studio monaco sfeerbeeld';
$cards      = $cards     ?? [];

?>

<section class="hero section">
    <div class="bg-img">
        <img src="<?= htmlspecialchars($bg_img) ?>" alt="<?= htmlspecialchars($bg_img_alt) ?>">
    </div>

    <div class="container">
        <div class="inner">
            <h1 data-animate class="title-big"><?= htmlspecialchars($title) ?></h1>
            <p data-animate class="text-medium secondary-font max-width-600">
                <?= nl2br(htmlspecialchars($subtitle)) ?>
            </p>
        </div>

        <?php if (!empty($cards)): ?>
        <div class="cards-wrapper">
            <?php foreach ($cards as $card):
                $name           = $card['name'];             
                $time_available = $card['time_available'];   
                $available      = $card['available'];        
                $img            = $card['img_src'];          
                $img_alt        = $card['img_alt'];          
                $status_class   = $card['status'];           
                $card_href      = $card['link_dame'];
            ?>
            <a data-animate class="card slim" href="<?= htmlspecialchars($card_href) ?>">
                <img decoding="async" loading="lazy" src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($img_alt) ?>">
                <div class="info">
                    <p class="text-medium"><?= htmlspecialchars($name) ?></p>
                    <p class="text-small secondary-font">
                        <i class="fa-regular fa-clock"></i> <?= htmlspecialchars($time_available) ?>
                    </p>
                </div>
                <div class="checker <?= htmlspecialchars($status_class) ?>">
                    <p class="text-small secondary-font">
                        <i class="fa-solid fa-circle"></i> <?= htmlspecialchars($available) ?>
                    </p>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>



<!-- Static HTML -->

<!-- <section class="hero section"><div class="bg-img"><img src="assets/media/placeholder-4.jpg" alt=""></div>
    <div class="container">
        
        <div class="inner">
            <h1 data-animate class="title-big">WELKOM BIJ STUDIO MONACO</h1>
            <p data-animate class="text-medium secondary-font max-width-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non eros leo. 
                Duis luctus eget ligula eget interdum. Suspendisse vitae tortor interdum.
            </p>
        </div>

        <div class="cards-wrapper">
            
            <div data-animate class="card slim">

                <img decoding="async" loading="lazy" src="assets/media/alysia.jpg" alt="">
                <div class="info">
                    <p class="text-medium">Alysia</p>
                    <p class="text-small secondary-font"><i class="fa-regular fa-clock"></i>11:00-15:00</p>
                </div>
                <div class="checker online">
                    <p  class="text-small secondary-font"><i class="fa-solid fa-circle"></i>Beschikbaar</p>
                </div>

            </div>

            <div data-animate class="card slim">
                
                <img decoding="async" loading="lazy" src="assets/media/anita.jpg" alt="">
                <div class="info">
                    <p class="text-medium">Anita</p>
                    <p class="text-small secondary-font"><i class="fa-regular fa-clock"></i>11:00-15:00</p>
                </div>
                <div class="checker online">
                    <p  class="text-small secondary-font"><i class="fa-solid fa-circle"></i>Beschikbaar</p>
                </div>

            </div> 

            <div data-animate class="card slim">

                <img decoding="async" loading="lazy" src="assets/media/celli.jpg" alt="">
                <div class="info">
                    <p class="text-medium">Celli</p>
                    <p class="text-small secondary-font"><i class="fa-regular fa-clock"></i>Morgen</p>
                </div>
                <div class="checker sleep">
                    <p  class="text-small secondary-font"><i class="fa-solid fa-circle"></i>Later beschikbaar</p>
                </div>

            </div>

            <div data-animate class="card slim">

                <img decoding="async" loading="lazy" src="assets/media/mandy.jpg" alt="">
                <div class="info">
                    <p class="text-medium">Mandy</p>
                    <p class="text-small secondary-font"><i class="fa-regular fa-clock"></i>15:00-19:00</p>
                </div>
                <div class="checker sleep">
                    <p  class="text-small secondary-font"><i class="fa-solid fa-circle"></i>Later beschikbaar</p>
                </div>

            </div>

        </div>

    </div>
</section> -->