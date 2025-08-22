
<!-- BOXES SECTION --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->
<!-- ------------- --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->


<!-- Dynamic PHP -->

<?php

$boxes = $boxes ?? [];

?>

<section class="section boxes">
    <div class="container flexbox">

        <?php foreach ($boxes as $box): 
            $price  = $box['price'] ?? '';
            $duration = $box['duration'] ?? '';
        ?>
        <a data-animate href="boek-nu" class="column small tertiary-font">
            <h1 class="text-big"> <?= htmlspecialchars($duration) ?></h1>
            <p class="title-small"> <?= htmlspecialchars($price) ?> </p>
        </a>
        <?php endforeach; ?>

    </div>
</section>



<!-- Static HTML -->

<!-- <section class="section boxes">
    <div class="container flexbox">

        <a href="boek-nu" class="column small tertiary-font">
            <h1 class="text-big">30 Minuten</h1>
            <p class="title-small">€120,-</p>
        </a>

        <a href="boek-nu" class="column small tertiary-font">
            <h1 class="text-big">45 Minuten</h1>
            <p class="title-small">€140,-</p>
        </a>

        <a href="boek-nu" class="column small tertiary-font">
            <h1 class="text-big">60 Minuten</h1>
            <p class="title-small">€160,-</p>
        </a>

        <a href="boek-nu" class="column small tertiary-font">
            <h1 class="text-big">90 Minuten</h1>
            <p class="title-small">€200,-</p>
        </a>

    </div>
</section> -->