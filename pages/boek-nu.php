<?php 
// START //////////////////////////////////////////////
///////////////////////////////////////////////////////


// FORM ///////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('appointment', [
    // Step 1: Date & Lady
    'month_label'     => 'augustus 2025',
    'intro_date_lady' => 'Kies onderstaand een dame uit op een van de beschikbare dagen.',
    'ladies_title'    => 'Beschikbare dames op deze dag',

    // Ladies (name + image)
    'ladies' => [
        ['name' => 'Alysia', 'img' => 'assets/media/alysia.jpg'],
        ['name' => 'Anita',  'img' => 'assets/media/anita.jpg'],
        ['name' => 'Celli',  'img' => 'assets/media/celli.jpg'],
        ['name' => 'Mandy',  'img' => 'assets/media/mandy.jpg'],
    ],

    // Step 2: Timeslots
    'timeslot_title'  => 'Tijdslot & Duur',
    'timeslot_intro'  => 'Kies als laatst nog een tijdslot',
    'timeslots'       => [
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
    ],

    // Step 3: Form copy
    'form_title' => 'Indienen',
    'form_intro' => 'Wij sturen je een bevestiging van de afspraak per mail',
]);


// END ////////////////////////////////////////////////
///////////////////////////////////////////////////////
?>