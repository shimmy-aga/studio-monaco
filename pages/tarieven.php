<?php 
// START //////////////////////////////////////////////
///////////////////////////////////////////////////////


// HERO ///////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('hero');


// SINGLE /////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('single');


// BOXES //////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('boxes', [
    'boxes' => [
        ['price' => '€120', 'duration' => '30 minuten'],
        ['price' => '€140', 'duration' => '45 minuten'],
        ['price' => '€160', 'duration' => '60 minuten'],
        ['price' => '€200', 'duration' => '90 minuten'],
    ]    
]);


// HIGHLIGHTS /////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('highlights', [
    'title'    => 'Inbegrepen',
    'items'    => [
        ['img' => 'assets/media/logo.png', 'headline' => 'Eerste USP',      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
        ['img' => 'assets/media/logo.png', 'headline' => 'Tweede USP',      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
        ['img' => 'assets/media/logo.png', 'headline' => 'Derde USP',       'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
        ['img' => 'assets/media/logo.png', 'headline' => 'Eerste USP',      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
        ['img' => 'assets/media/logo.png', 'headline' => 'Tweede USP',      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
        ['img' => 'assets/media/logo.png', 'headline' => 'Derde USP',       'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
    ],
    'cta_text' => 'Boek nu',
    'cta_href' => 'boek-nu',
]);




// END ////////////////////////////////////////////////
///////////////////////////////////////////////////////
?>