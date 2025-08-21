
<!-- SPLIT SECTION --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->
<!-- ------------- --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->


<!-- Dynamic PHP -->

<?php
// -------- Dynamic inputs with sane defaults --------
$title   = $title   ?? 'GALLERIJ';

/**
 * $gallery: array of images for the left gallery/lightbox
 * Each item: ['src' => '/path/to.jpg', 'alt' => 'Alt text']
 */
$gallery = $gallery ?? [
    ['src' => '/assets/media/placeholder-1.jpg', 'alt' => ''],
    ['src' => '/assets/media/placeholder-2.jpg', 'alt' => ''],
    ['src' => '/assets/media/placeholder-3.jpg', 'alt' => ''],
    ['src' => '/assets/media/placeholder-4.jpg', 'alt' => ''],
    ['src' => '/assets/media/placeholder-5.webp', 'alt' => ''],
    ['src' => '/assets/media/placeholder-6.avif', 'alt' => ''],
];

/**
 * $person: info shown on the right side
 */
$person = $person ?? [
    'label'        => 'DAME',
    'name'         => 'MANDY',
    'about'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non eros leo.',
    'looks'        => [
        ['label' => 'Leeftijd',  'value' => '26'],
        ['label' => 'Cupmaat',   'value' => 'C'],
        ['label' => 'Haarkleur', 'value' => 'Blond'],
        ['label' => 'Haarlengte','value' => 'Lang'],
        ['label' => 'Oogkleur',  'value' => 'Groen'],
        ['label' => 'Lengte',    'value' => '173cm'],
    ],
    'cta_href'     => '',
    'cta_text'     => 'Boek nu',
    'phone'        => '+31 6 12345678',
    'rate'         => '120 euro per half uur',
    'portrait_src' => '/assets/media/mandy.jpg',
    'portrait_alt' => 'Mandy',
];
?>

<section class="section splits">
    <!-- first (gallery) -->
    <div class="split">
        <div class="single tertiary-font text-center">
            <h1 data-animate class="title-small"><?= htmlspecialchars($title) ?></h1>
        </div>

        <div class="gallery" id="gallery" onclick="openLightbox(event)">
            <?php foreach ($gallery as $idx => $img): 
                $src = $img['src'] ?? '';
                $alt = $img['alt'] ?? '';
            ?>
                <img 
                    data-animate 
                    decoding="async" 
                    loading="lazy" 
                    src="<?= htmlspecialchars($src) ?>" 
                    alt="<?= htmlspecialchars($alt) ?>" 
                    data-index="<?= (int)$idx ?>"
                >
            <?php endforeach; ?>
        </div>

        <div id="lightbox" aria-hidden="true">
            <span id="close-btn" role="button" aria-label="sluiten" onclick="closeLightbox()">&times;</span>
            <img id="lightbox-img" src="" alt="lightbox image">

            <div id="thumbnail-container" class="thumbnail-container"></div>

            <button id="prev-btn" onclick="changeImage(-1)" aria-label="vorige">&lt;</button>
            <button id="next-btn" onclick="changeImage(1)" aria-label="volgende">&gt;</button>
        </div>
    </div>

    <!-- second (person details) -->
    <div class="split">
        <div data-animate class="description tertiary-font">
            <span class="title-small"><?= htmlspecialchars($person['label']) ?></span>
            <h1 class="title-medium font-weight-700"><?= htmlspecialchars($person['name']) ?></h1>
            <?php if (!empty($person['about'])): ?>
                <p class="text-medium"><?= htmlspecialchars($person['about']) ?></p>
            <?php endif; ?>
        </div>

        <?php if (!empty($person['looks'])): ?>
        <div data-animate class="description tertiary-font">
            <h1 class="text-extra font-weight-900">Looks</h1>
            <ul class="text-medium list-disced">
                <?php foreach ($person['looks'] as $row):
                    $label = $row['label'] ?? '';
                    $value = $row['value'] ?? '';
                ?>
                    <li><?= htmlspecialchars($label) ?>: <?= htmlspecialchars($value) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>

        <div data-animate class="description tertiary-font">
            <?php if (!empty($person['cta_href'])): ?>
                <a href="<?= htmlspecialchars($person['cta_href']) ?>" class="btn btn-secondary text-medium">
                    <?= htmlspecialchars($person['cta_text'] ?? 'Boek nu') ?>
                </a>
            <?php endif; ?>
            <ul class="mt-25 text-big font-weight-500">
                <?php if (!empty($person['phone'])): ?>
                    <li><i class="fa-solid fa-phone"></i><?= htmlspecialchars($person['phone']) ?></li>
                <?php endif; ?>
                <?php if (!empty($person['rate'])): ?>
                    <li><i class="fa-solid fa-euro-sign"></i><?= htmlspecialchars($person['rate']) ?></li>
                <?php endif; ?>
            </ul>
        </div>

        <?php if (!empty($person['portrait_src'])): ?>
        <div class="img-mask">
            <img 
                decoding="async" 
                loading="lazy" 
                src="<?= htmlspecialchars($person['portrait_src']) ?>" 
                alt="<?= htmlspecialchars($person['portrait_alt'] ?? '') ?>"
            >
        </div>
        <?php endif; ?>
    </div>
</section>



<!-- Static HTML -->

<!-- <section class="section splits">
    
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

</section> -->