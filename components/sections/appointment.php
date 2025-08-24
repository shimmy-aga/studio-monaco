
<!-- APPOINTMENT SECTION --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->
<!-- -------------- --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->


<!-- Dynamic PHP -->

<?php

$appointment_month   = $appointment_month   ?? 'augustus 2025';
$appointment_intro   = $appointment_intro   ?? 'Kies onderstaand een dame uit op een van de beschikbare dagen.';
$ladies_title        = $ladies_title        ?? 'Beschikbare dames op deze dag';
$timeslot_title      = $timeslot_title      ?? 'Tijdslot & Duur';
$timeslot_intro      = $timeslot_intro      ?? 'Kies als laatst nog een tijdslot';
$form_title          = $form_title          ?? 'Indienen';
$form_intro          = $form_intro          ?? 'Wij sturen je een bevestiging van de afspraak per mail';

$ladies = $ladies ?? [
    ['name' => 'Alysia', 'img' => 'assets/media/alysia.jpg'],
    ['name' => 'Anita',  'img' => 'assets/media/anita.jpg'],
    ['name' => 'Celli',  'img' => 'assets/media/celli.jpg'],
    ['name' => 'Mandy',  'img' => 'assets/media/mandy.jpg'],
];

$timeslots = $timeslots ?? [
    ['time' => '11:30-12:00', 'duration' => '30 minuten'],
    ['time' => '12:30-13:00', 'duration' => '30 minuten'],
    ['time' => '13:00-13:30', 'duration' => '30 minuten'],
    ['time' => '13:30-14:00', 'duration' => '30 minuten'],
    ['time' => '13:15-14:00', 'duration' => '45 minuten'],
    ['time' => '12:30-13:15', 'duration' => '45 minuten'],
    ['time' => '11:00-12:00', 'duration' => '60 minuten'],
    ['time' => '12:00-13:00', 'duration' => '60 minuten'],
    ['time' => '13:00-14:00', 'duration' => '60 minuten'],
    ['time' => '10:30-12:00', 'duration' => '90 minuten'],
    ['time' => '12:00-13:30', 'duration' => '90 minuten'],
];
?>

<section class="section appointment boxes tertiary-font">

    <div id="date-and-girl" class="appointment-form-page container flexbox">
        <div class="single mt-25">
            <h1 class="title-medium">Datum & Dame</h1>
            <p class="text-big secondary-font max-width-600"><?= htmlspecialchars($appointment_intro) ?></p>
        </div>

        <div class="single horizontal-wrapper">
            <div class="calendar">
                <div class="month">
                    <i class="fas fa-angle-left prev"></i>
                    <div class="date"><?= htmlspecialchars($appointment_month) ?></div>
                    <i class="fas fa-angle-right next"></i>
                </div>
                <div class="days scrollable"></div>
            </div>
        </div>
        
        <div class="single">
            <p class="text-big secondary-font font-weight-700"><?= htmlspecialchars($ladies_title) ?></p>
        </div>

        <div class="single horizontal-wrapper mt-25 selects">
            <?php foreach ($ladies as $lady): ?>
                <div class="highlight select">
                    <div class="tiny-img-mask">
                        <img decoding="async" loading="lazy" src="<?= htmlspecialchars($lady['img']) ?>" alt="<?= htmlspecialchars($lady['name']) ?>">
                    </div>
                    <div class="vertical-wrapper">
                        <h1 class="text-big font-weight-600"><?= htmlspecialchars($lady['name']) ?></h1>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="single horizontal-wrapper mt-25">
            <div class="btn btn-primary forward">Verder</div>
        </div>
    </div>

    <div id="timeslot" class="appointment-form-page container flexbox">
        <div class="single mt-25">
            <h1 class="title-medium"><?= htmlspecialchars($timeslot_title) ?></h1>
            <p class="text-big secondary-font max-width-600"><?= htmlspecialchars($timeslot_intro) ?></p>
        </div>

        <div class="single horizontal-wrapper selects">
            <?php foreach ($timeslots as $slot): ?>
                <div class="column tiny select">
                    <h1 class="text-medium"><?= htmlspecialchars($slot['time']) ?></h1>
                    <p class="text-small"><?= htmlspecialchars($slot['duration']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="horizontal-wrapper mt-25">
            <div class="btn btn-primary back">Terug</div>
            <div class="btn btn-primary forward">Verder</div>
        </div>
    </div>

    <form class="contact-form form-row appointment-form-page container flexbox">
        <div class="single mt-25">
            <h1 class="title-medium"><?= htmlspecialchars($form_title) ?></h1>
            <p class="text-big secondary-font max-width-600"><?= htmlspecialchars($form_intro) ?></p>
        </div>

        <div class="form-field col x-50">
            <input id="name" class="input-text js-input" type="text" required>
            <label class="label" for="name">Name</label>
        </div>

        <div class="form-field col x-50">
            <input id="email" class="input-text js-input" type="email" required>
            <label class="label" for="email">E-mail</label>
        </div>

        <div class="form-field col x-100 text-center">
            <div class="btn btn-primary back">Terug</div>
            <div class="btn btn-primary">Indienen</div>
        </div>
    </form>
</section>



<!-- Static HTML -->

<!-- <section class="section appointment boxes tertiary-font">

    <div id="date-and-girl" class="appointment-form-page container flexbox">

        <div class="single mt-25">
            <h1 class="title-medium">Datum & Dame</h1>
            <p class="text-big secondary-font max-width-600">
                Kies onderstaand een dame uit op een van de beschikbare dagen.
            </p>
        </div>

        <div class="single horizontal-wrapper">

            <div class="calendar">

                <div class="month">
                    <i class="fas fa-angle-left prev"></i>
                    <div class="date">augustus 2025</div>
                    <i class="fas fa-angle-right next"></i>
                </div>

                <div class="days scrollable"></div>

            </div>

        </div>
        
        <div class="single">
            <p class="text-big secondary-font font-weight-700">
                Beschikbare dames op deze dag
            </p>
        </div>

        <div class="single horizontal-wrapper mt-25 selects">

            <div class="highlight select">
                <div class="tiny-img-mask"><img decoding="async" loading="lazy" src="assets/media/alysia.jpg" alt=""></div>
                <div class="vertical-wrapper">
                    <h1 class="text-big font-weight-600">Alysia</h1>
                </div>
            </div>

            <div class="highlight select">
                <div class="tiny-img-mask"><img decoding="async" loading="lazy" src="assets/media/anita.jpg" alt=""></div>
                <div class="vertical-wrapper">
                    <h1 class="text-big font-weight-600">Anita</h1>
                </div>
            </div>

            <div class="highlight select">
                <div class="tiny-img-mask"><img decoding="async" loading="lazy" src="assets/media/celli.jpg" alt=""></div>
                <div class="vertical-wrapper">
                    <h1 class="text-big font-weight-600">Celli</h1>
                </div>
            </div>

            <div class="highlight select">
                <div class="tiny-img-mask"><img decoding="async" loading="lazy" src="assets/media/mandy.jpg" alt=""></div>
                <div class="vertical-wrapper">
                    <h1 class="text-big font-weight-600">Mandy</h1>
                </div>
            </div>

        </div>

        <div class="single horizontal-wrapper mt-25">
            <div class="btn btn-primary forward">Verder</div>
        </div>
       
    </div>

    <div id="timeslot" class="appointment-form-page container flexbox">
        
        <div class="single mt-25">

            <h1 class="title-medium">Tijdslot & Duur</h1>
            <p class="text-big secondary-font max-width-600">
                Kies als laatst nog een tijdslot
            </p>
        </div>

        <div class="single horizontal-wrapper selects">

            <div class="column tiny select">
                <h1 class="text-medium">11:30-12:00</h1>
                <p class="text-small">30 minuten</p>
            </div>

            <div class="column tiny select">
                <h1 class="text-medium">12:30-13:00</h1>
                <p class="text-small">30 minuten</p>
            </div>

            <div class="column tiny select">
                <h1 class="text-medium">13:00-13:30</h1>
                <p class="text-small">30 minuten</p>
            </div>

            <div class="column tiny select">
                <h1 class="text-medium">13:30-14:00</h1>
                <p class="text-small">30 minuten</p>
            </div>

            <div class="column tiny select">
                <h1 class="text-medium">13:15-14:00</h1>
                <p class="text-small">45 minuten</p>
            </div>

            <div class="column tiny select">
                <h1 class="text-medium">12:30-13:15</h1>
                <p class="text-small">45 minuten</p>
            </div>

            <div class="column tiny select">
                <h1 class="text-medium">11:00-12:00</h1>
                <p class="text-small">60 minuten</p>
            </div>

            <div class="column tiny select">
                <h1 class="text-medium">12:00-13:00</h1>
                <p class="text-small">60 minuten</p>
            </div>

            <div class="column tiny select">
                <h1 class="text-medium">13:00-14:00</h1>
                <p class="text-small">60 minuten</p>
            </div>

            <div class="column tiny select">
                <h1 class="text-medium">10:30-12:00</h1>
                <p class="text-small">90 minuten</p>
            </div>

            <div class="column tiny select">
                <h1 class="text-medium">12:00-13:30</h1>
                <p class="text-small">90 minuten</p>
            </div>

        </div>

        <div class="horizontal-wrapper mt-25">
            <div class="btn btn-primary back">Terug</div>
            <div class="btn btn-primary forward">Verder</div>
        </div>
       
    </div>

    <form class="contact-form form-row appointment-form-page container flexbox">

        <div class="single mt-25">
            <h1 class="title-medium">Indienen</h1>
            <p class="text-big secondary-font max-width-600">
                Wij sturen je een bevestiging van de afspraak per mail
            </p>
        </div>

        <div class="form-field col x-50">
            <input id="name" class="input-text js-input" type="text" required>
            <label class="label" for="name">Name</label>
        </div>

        <div class="form-field col x-50">
            <input id="email" class="input-text js-input" type="email" required>
            <label class="label" for="email">E-mail</label>
        </div>

        <div class="form-field col x-100 text-center">
            <div class="btn btn-primary back">Terug</div>
            <div class="btn btn-primary">Indienen</div>
        </div>

    </form>

</section> -->