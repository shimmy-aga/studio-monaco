<?php 
// START //////////////////////////////////////////////
///////////////////////////////////////////////////////


// HERO ///////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('hero'); 


// SINGLE /////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('single', [
    'title' => 'Beschikbaarheid',
    'intro' => "Check snel wie wanneer beschikbaar is en plan je perfecte moment. Of je nu op zoek bent naar rust, spanning of avontuur — jouw ideale ervaring wacht op jou",
]);


// CALENDAR ///////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('calendar', [
    'events' => [
        ['title' => 'Anita',  'time_start' => '09:00', 'time_end' => '11:00'],
        ['title' => 'Celli',  'time_start' => '11:30', 'time_end' => '12:30'],
        ['title' => 'Soraya', 'time_start' => '13:00', 'time_end' => '15:00'],
    ],
]);


// BANNER /////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('banner', [
    'first_img_src'  => 'assets/media/placeholder-9.jpg',
    'first_img_alt'  => '',
    'second_img_src' => 'assets/media/placeholder-8.jpg',
    'second_img_alt' => '',
    'title'          => 'Klaar om te plannen?',
    'subtitle'       => "Kies je moment en boek nu — snel, discreet en eenvoudig.",
    'cta_text'       => 'Boek nu',
    'cta_href'       => 'boek-nu',
    'usps'           => [
        ['value' => '12+',   'label' => 'Jaar actief'],
        ['value' => '17',    'label' => 'Dames'],
        ['value' => '20',    'label' => 'Kamers'],
        ['value' => '3,450+','label' => 'Tevreden klanten'],
    ],
])


// END ////////////////////////////////////////////////
///////////////////////////////////////////////////////
?>