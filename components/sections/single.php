
<!-- CALENDAR SECTION --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->
<!-- ---------------- --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->


<!-- Dynamic PHP -->

<?php

$title = $title ?? 'Here goes title';
$intro = $intro ?? 'Here goes your subtitle or into';
?>

<section class="section">
    <div class="container">        
        <div class="single">
            <h1 data-animate class="title-medium"><?= htmlspecialchars($title) ?></h1>
            <p data-animate class="text-big secondary-font max-width-600">
                <?= nl2br(htmlspecialchars($intro)) ?>
            </p>
        </div>
    </div>
</section>



<!-- Static HTML -->

<!-- <section class="section">
    <div class="container">        
        <div class="single">
            <h1 data-animate class="title-medium">AGENDA</h1>
            <p data-animate class="text-big secondary-font max-width-600">
                Hieronder zie je een overzicht van wanneer de dames beschikbaar zijn
            </p>
        </div>
    </div>
</section> -->