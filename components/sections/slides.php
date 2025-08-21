
<!-- SLIDES SECTION --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->
<!-- -------------- --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->


<!-- Dynamic PHP -->

<?php

$title     = $title     ?? 'Neem een kijkje in onze wereld van passie';
$subtitle  = $subtitle  ?? "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non eros leo. Duis luctus eget ligula eget interdum. Suspendisse vitae tortor interdum.";

$images    = $images    ?? [];
$cta_text  = $cta_text  ?? 'Boek nu';
$cta_href  = $cta_href  ?? '';

if (empty($images)) {
    $images = [
        ['src' => 'assets/media/placeholder-5.webp', 'alt' => 'Slide 1'],
        ['src' => 'assets/media/placeholder-6.avif', 'alt' => 'Slide 2'],
        ['src' => 'assets/media/placeholder-7.webp', 'alt' => 'Slide 3'],
    ];
}
?>

<section class="section">
    <div class="container flexbox">
        
        <div data-animate class="single">
            <h1 class="title-medium"><?= htmlspecialchars($title) ?></h1>
            <p class="text-medium secondary-font max-width-600"><?= nl2br(htmlspecialchars($subtitle)) ?></p>
        </div>

        <div class="cards-wrapper">
            <?php foreach ($images as $img):
                $src = $img['src'] ?? '';
                $alt = $img['alt'] ?? '';
            ?>
            <div data-animate class="static-card wide">
                <img decoding="async" loading="lazy" src="<?= htmlspecialchars($src) ?>" alt="<?= htmlspecialchars($alt) ?>">
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
        
        <div data-animate class="single">
            <h1 class="title-medium">Neem een kijkje in onze wereld van passie</h1>
            <p class="text-medium secondary-font max-width-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non eros leo. 
                Duis luctus eget ligula eget interdum. Suspendisse vitae tortor interdum.
            </p>
        </div>

        <div class="cards-wrapper">
            
            <div data-animate class="static-card wide">

                <img decoding="async" loading="lazy" src="assets/media/placeholder-5.webp" alt="">

            </div>

            <div data-animate class="static-card wide">
                
                <img decoding="async" loading="lazy" src="assets/media/placeholder-6.avif" alt="">

            </div>

            <div data-animate class="static-card wide">

                <img decoding="async" loading="lazy" src="assets/media/placeholder-7.webp" alt="">

            </div>

        </div>

        <div data-animate class="text-center mt-50"><a href="" class="btn btn-primary secondary-font">Boek nu</a></div>

    </div>
</section> -->