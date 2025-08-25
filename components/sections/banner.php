
<!-- BANNER SECTION --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->
<!-- -------------- --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->


<!-- Dynamic PHP -->

<?php

$first_img_src   = $first_img_src   ?? 'assets/media/placeholder-9.jpg';
$first_img_alt   = $first_img_alt   ?? 'Banner afbeelding 1';
$second_img_src  = $second_img_src  ?? 'assets/media/placeholder-8.jpg';
$second_img_alt  = $second_img_alt  ?? 'Banner afbeelding 2';

$title           = $title           ?? 'Studio Monaco';
$subtitle        = $subtitle        ?? "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non eros leo. Duis luctus eget ligula eget interdum. Suspendisse vitae tortor interdum.";

$cta_text        = $cta_text        ?? 'Lees meer';
$cta_href        = $cta_href        ?? '';

$usps            = $usps            ?? [];

if (empty($usps)) {
    $usps = [
        ['value' => '12+',   'label' => 'Jaar actief'],
        ['value' => '17',    'label' => 'Dames'],
        ['value' => '20',    'label' => 'Kamers'],
        ['value' => '3,450+','label' => 'Tevreden klanten'],
    ];
}
?>

<section class="section banner">
    <div class="container flexbox">

        <div data-animate class="banner-first-img">
            <img decoding="async" loading="lazy" src="<?= htmlspecialchars($first_img_src) ?>" alt="<?= htmlspecialchars($first_img_alt) ?>">
        </div>

        <div data-animate class="banner-second-img">
            <img decoding="async" loading="lazy" src="<?= htmlspecialchars($second_img_src) ?>" alt="<?= htmlspecialchars($second_img_alt) ?>">
        </div>

        <div data-animate class="inner text-left mt-0">
            <h1 class="title-small primary-font font-weight-900"><?= htmlspecialchars($title) ?></h1>
            <p class="text-medium secondary-font mt-10"><?= nl2br(htmlspecialchars($subtitle)) ?></p>

            <div data-animate class="spacial-horizontal-wrapper mt-25 secondary-font">

                <?php if (!empty($cta_text)): ?>
                    <a href="<?= htmlspecialchars($cta_href) ?>" class="btn btn-secondary"><?= htmlspecialchars($cta_text) ?></a>
                <?php endif; ?>

                <?php foreach ($usps as $usp):
                    $value = $usp['value'] ?? '';
                    $label = $usp['label'] ?? '';
                ?>
                <div class="usp-box">
                    <h1 class="title-medium secondary-color"><?= htmlspecialchars($value) ?></h1>
                    <p class="text-medium"><?= htmlspecialchars($label) ?></p>
                </div>
                <?php endforeach; ?>

            </div>
        </div>

    </div>
</section>



<!-- Static HTML -->

<!-- 
<section class="section banner">
    <div class="container flexbox">
        
        <div data-animate class="banner-first-img">
            <img decoding="async" loading="lazy" src="assets/media/placeholder-9.jpg" alt="">
        </div>

        <div data-animate class="banner-second-img">
            <img decoding="async" loading="lazy" src="assets/media/placeholder-8.jpg" alt="">
        </div>

        <div data-animate class="inner text-left mt-0">
            
            <h1 class="title-small font-weight-900">Studio Monaco</h1>
            <p class="text-medium secondary-font mt-10">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non eros leo. 
                Duis luctus eget ligula eget interdum. Suspendisse vitae tortor interdum.
            </p>

            <div data-animate class="spacial-horizontal-wrapper mt-25 secondary-font">
                
                <a href="" class="btn btn-secondary">Lees meer</a>

                <div class="usp-box">
                    <h1 class="title-medium secondary-color">12+</h1>
                    <p class="text-medium">Jaar actief</p>
                </div>

                <div class="usp-box">
                    <h1 class="title-medium secondary-color">17</h1>
                    <p class="text-medium">Dames</p>
                </div>

                <div class="usp-box">
                    <h1 class="title-medium secondary-color">20</h1>
                    <p class="text-medium">Kamers</p>
                </div>

                <div class="usp-box">
                    <h1 class="title-medium secondary-color">3,450+</h1>
                    <p class="text-medium">Tevreden klanten</p>
                </div>

            </div>

        </div>

    </div>
</section> -->