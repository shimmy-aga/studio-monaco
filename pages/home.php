<?php 
// START //////////////////////////////////////////////
///////////////////////////////////////////////////////


// HERO ////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
render_section('hero', [
    'title'    => 'Welkom bij Studio Monaco',
    'subtitle' => 'Bij Studio Monaco ontdek je meer dan alleen service. Het is een plek waar discretie, elegantie en op maat gemaakte beleving samenkomen.',
    'bg_img'   => 'assets/media/placeholder-4.jpg',
    'bg_img_alt' => 'Studio Monaco sfeerbeeld',
    'cards'    => [
        [
            'name'           => 'Alysia',
            'time_available' => '11:00-15:00',
            'available'      => 'Beschikbaar',
            'img_src'        => 'assets/media/alysia.jpg',
            'img_alt'        => 'Alysia',
            'status'         => 'online',
            'link_dame'      => 'dame',
        ],
        [
            'name'           => 'Anita',
            'time_available' => '11:00-15:00',
            'available'      => 'Beschikbaar',
            'img_src'        => 'assets/media/anita.jpg',
            'img_alt'        => 'Anita',
            'status'         => 'online',
            'link_dame'      => 'dame',
        ],
        [
            'name'           => 'Celli',
            'time_available' => 'Morgen',
            'available'      => 'Later beschikbaar',
            'img_src'        => 'assets/media/celli.jpg',
            'img_alt'        => 'Celli',
            'status'         => 'sleep',
            'link_dame'      => 'dame',
        ],
        [
            'name'           => 'Mandy',
            'time_available' => '15:00-19:00',
            'available'      => 'Later beschikbaar',
            'img_src'        => 'assets/media/mandy.jpg',
            'img_alt'        => 'Mandy',
            'status'         => 'sleep',
            'link_dame'      => 'dame',
        ],
    ],
]);


// HIGHLIGHTS //////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
render_section('highlights', [
    'title'    => 'Belevenissen',
    'items'    => [
        ['img' => 'assets/media/placeholder-1.jpg', 'headline' => 'Girlfriend Fantasy', 'description' => 'Beleef de warmte en aandacht van een persoonlijke vriendin.'],
        ['img' => 'assets/media/placeholder-2.jpg', 'headline' => 'BDSM-ervaring',      'description' => 'Vertrouw, leid en laat je leiden in gecontroleerde spanning.'],
        ['img' => 'assets/media/placeholder-3.jpg', 'headline' => 'Rollenspel',          'description' => 'Stap in een andere rol en laat je fantasie leiden.'],
        ['img' => 'assets/media/placeholder-4.jpg', 'headline' => 'Sensory Play',        'description' => 'Ontspan met subtiele sensaties die al je zintuigen prikkelen.'],
        ['img' => 'assets/media/placeholder-5.webp','headline' => 'Erotische Massage',   'description' => 'Laad je op met een massage die lichaam en geest verwarmt.'],
        ['img' => 'assets/media/placeholder-6.avif','headline' => 'Kinky Workshops',     'description' => 'Ontdek en leer samen nieuwe kanten van erotiek.'],
        ['img' => 'assets/media/placeholder-7.webp','headline' => 'Groepservaringen',    'description' => 'Deel intieme momenten met anderen in vertrouwen.'],
        ['img' => 'assets/media/placeholder-8.jpg', 'headline' => 'Striptease Show',     'description' => 'Laat je verleiden door een gracieuze en sensuele show.'],
        ['img' => 'assets/media/placeholder-9.jpg', 'headline' => 'Fantasy Rooms',       'description' => 'Duik in diverse themawerelden die jouw verbeelding tot leven brengen.'],
    ],
    'cta_text' => 'Boek nu',
    'cta_href' => 'boek-nu',
]);


// SLIDES //////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
render_section('slides', [
    'title'    => 'Neem een kijkje in onze wereld van passie',
    'subtitle' => "Of je nu komt voor een korte ontsnapping of een uitgebreide sessie: je bent in goede handen.",
    'images'   => [
        ['src' => 'assets/media/placeholder-3.jpg', 'alt' => 'Slide 1'],
        ['src' => 'assets/media/placeholder-6.avif', 'alt' => 'Slide 2'],
        ['src' => 'assets/media/placeholder-7.webp', 'alt' => 'Slide 3'],
    ],
    'cta_text' => 'Dames bekijken',
    'cta_href' => 'onze-dames',
]);


// BANNER /////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('banner', [
    'first_img_src'  => 'assets/media/placeholder-9.jpg',
    'first_img_alt'  => '',
    'second_img_src' => 'assets/media/placeholder-8.jpg',
    'second_img_alt' => '',
    'title'          => 'Studio Monaco',
    'subtitle'       => "Al meer dan een decennium creëren we bijzondere, persoonlijke ervaringen. Met een professioneel team, hoge hygiënenormen en maximale discretie zorgen we dat jij je welkom en ontspannen voelt — iedere keer weer.",
    'cta_text'       => 'Lees meer',
    'cta_href'       => 'contact',
    'usps'           => [
        ['value' => '12+',   'label' => 'Jaar actief'],
        ['value' => '17',    'label' => 'Dames'],
        ['value' => '20',    'label' => 'Kamers'],
        ['value' => '3,450+','label' => 'Tevreden klanten'],
    ],
]);


// END ////////////////////////////////////////////////
///////////////////////////////////////////////////////
?>