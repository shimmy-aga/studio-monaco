<?php 
// START //////////////////////////////////////////////
///////////////////////////////////////////////////////


// FORM ///////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('appointment', [
    'month_label'     => 'augustus 2025',
    'intro_date_lady' => 'Kies eerst een datum en selecteer vervolgens de dame van je voorkeur.',
    'ladies_title'    => 'Beschikbare dames op deze dag',

    'ladies' => [
        ['name' => 'Alysia', 'img' => 'assets/media/alysia.jpg'],
        ['name' => 'Anita',  'img' => 'assets/media/anita.jpg'],
        ['name' => 'Celli',  'img' => 'assets/media/celli.jpg'],
        ['name' => 'Mandy',  'img' => 'assets/media/mandy.jpg'],
    ],

    'timeslot_title'  => 'Tijd & duur',
    'timeslot_intro'  => 'Kies een beschikbaar tijdslot en de gewenste duur.',
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

    'form_title' => 'Jouw gegevens',
    'form_intro' => 'Na het verzenden ontvang je direct een bevestiging per e-mail. Je gegevens blijven strikt vertrouwelijk.',
]);


// END ////////////////////////////////////////////////
///////////////////////////////////////////////////////
?>