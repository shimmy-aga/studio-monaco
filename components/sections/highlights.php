
<!-- HIGHLIGHTS SECTION --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->
<!-- ------------------ --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->


<!-- Dynamic PHP -->

<?php

$title     = $title     ?? 'Belevenissen';
$items     = $items     ?? [];
$cta_text  = $cta_text  ?? 'Bekijk meer';
$cta_href  = $cta_href  ?? '';

// Fallback items to match static content
if (empty($items)) {
    $items = [
        ['img' => 'assets/media/placeholder-1.jpg', 'img_alt' => 'Girlfriend Fantasy', 'headline' => 'Girlfriend Fantasy',   'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
        ['img' => 'assets/media/placeholder-2.jpg', 'img_alt' => 'BDSM-ervaring',      'headline' => 'BDSM-ervaring',        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
        ['img' => 'assets/media/placeholder-3.jpg', 'img_alt' => 'Rollenspel',          'headline' => 'Rollenspel',          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
    ];
}
?>

<section class="section">
    <div class="container flexbox">

        <h1 data-animate class="title-small text-center"><?= htmlspecialchars($title) ?></h1>

        <div class="highlights-wrapper">
            <?php foreach ($items as $it):
                $img   = $it['img']       ?? '';
                $img_alt = $it['img_alt'] ?? ($it['headline'] ?? '');
                $head  = $it['headline']  ?? '';
                $desc  = $it['description'] ?? '';
            ?>
            <div data-animate class="highlight">
                <div class="tiny-img-mask">
                    <img decoding="async" loading="lazy" src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($img_alt) ?>">
                </div>
                <div class="vertical-wrapper">
                    <h1 class="text-big font-weight-600"><?= htmlspecialchars($head) ?></h1>
                    <p class="text-small secondary-font"><?= htmlspecialchars($desc) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if (!empty($cta_text)): ?>
        <div data-animate class="text-center mt-50">
            <a href="<?= htmlspecialchars($cta_href) ?>" class="btn btn-primary secondary-font"><?= htmlspecialchars($cta_text) ?></a>
        </div>
        <?php endif; ?>

    </div>
</section>



<!-- Static HTML -->

<!-- <section class="section">
    <div class="container flexbox">

        <h1 data-animate class="title-small text-center">Belevenissen</h1>

        <div class="highlights-wrapper">

            <div data-animate class="highlight">
                
                <div class="tiny-img-mask"><img decoding="async" loading="lazy" src="assets/media/placeholder-1.jpg" alt=""></div>
                <div class="vertical-wrapper">
                    <h1 class="text-big font-weight-600">Girlfriend Fantasy</h1>
                    <p class="text-small secondary-font">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                </div>
                
            </div>

            <div data-animate class="highlight">
                
                <div class="tiny-img-mask"><img decoding="async" loading="lazy" src="assets/media/placeholder-2.jpg" alt=""></div>
                <div class="vertical-wrapper">
                    <h1 class="text-big font-weight-600">BDSM-ervaring</h1>
                    <p class="text-small secondary-font">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                </div>
                
            </div>

            <div data-animate class="highlight">
                
                <div class="tiny-img-mask"><img decoding="async" loading="lazy" src="assets/media/placeholder-3.jpg" alt=""></div>
                <div class="vertical-wrapper">
                    <h1 class="text-big font-weight-600">Rollenspel</h1>
                    <p class="text-small secondary-font">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                </div>
                
            </div>

            <div data-animate class="highlight">
                
                <div class="tiny-img-mask"><img decoding="async" loading="lazy" src="assets/media/placeholder-4.jpg" alt=""></div>
                <div class="vertical-wrapper">
                    <h1 class="text-big font-weight-600">Sensory Play</h1>
                    <p class="text-small secondary-font">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                </div>
                
            </div>

            <div data-animate class="highlight">
                
                <div class="tiny-img-mask"><img decoding="async" loading="lazy" src="assets/media/placeholder-5.webp" alt=""></div>
                <div class="vertical-wrapper">
                    <h1 class="text-big font-weight-600">Erotische Massage</h1>
                    <p class="text-small secondary-font">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                </div>
                
            </div>

            <div data-animate class="highlight">
                
                <div class="tiny-img-mask"><img decoding="async" loading="lazy" src="assets/media/placeholder-6.avif" alt=""></div>
                <div class="vertical-wrapper">
                    <h1 class="text-big font-weight-600">Kinky Workshops</h1>
                    <p class="text-small secondary-font">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                </div>
                
            </div>

            <div data-animate class="highlight">
                
                <div class="tiny-img-mask"><img decoding="async" loading="lazy" src="assets/media/placeholder-7.webp" alt=""></div>
                <div class="vertical-wrapper">
                    <h1 class="text-big font-weight-600">Groepservaringen</h1>
                    <p class="text-small secondary-font">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                </div>
                
            </div>

            <div data-animate class="highlight">
                
                <div class="tiny-img-mask"><img decoding="async" loading="lazy" src="assets/media/placeholder-8.jpg" alt=""></div>
                <div class="vertical-wrapper">
                    <h1 class="text-big font-weight-600">Striptease Show</h1>
                    <p class="text-small secondary-font">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                </div>
                
            </div>

            <div data-animate class="highlight">
                
                <div class="tiny-img-mask"><img decoding="async" loading="lazy" src="assets/media/placeholder-9.jpg" alt=""></div>
                <div class="vertical-wrapper">
                    <h1 class="text-big font-weight-600">Fantasy Rooms</h1>
                    <p class="text-small secondary-font">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                </div>
                
            </div>

        </div>

        <div data-animate class="text-center mt-50"><a href="" class="btn btn-primary secondary-font">Bekijk meer</a></div>

    </div>
</section> -->