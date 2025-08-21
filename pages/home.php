<?php 
// START //////////////////////////////////////////////
///////////////////////////////////////////////////////


// HERO ////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
render_section('hero', [
    'title'    => 'WELKOM BIJ STUDIO MONACO',
    'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non eros leo. Duis luctus eget ligula eget interdum. Suspendisse vitae tortor interdum.',
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
        ['img' => 'assets/media/placeholder-1.jpg', 'headline' => 'Girlfriend Fantasy', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
        ['img' => 'assets/media/placeholder-2.jpg', 'headline' => 'BDSM-ervaring',      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
        ['img' => 'assets/media/placeholder-3.jpg', 'headline' => 'Rollenspel',          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
        ['img' => 'assets/media/placeholder-4.jpg', 'headline' => 'Sensory Play',        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
        ['img' => 'assets/media/placeholder-5.webp','headline' => 'Erotische Massage',   'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
        ['img' => 'assets/media/placeholder-6.avif','headline' => 'Kinky Workshops',     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
        ['img' => 'assets/media/placeholder-7.webp','headline' => 'Groepservaringen',    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
        ['img' => 'assets/media/placeholder-8.jpg', 'headline' => 'Striptease Show',     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
        ['img' => 'assets/media/placeholder-9.jpg', 'headline' => 'Fantasy Rooms',       'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing'],
    ],
    'cta_text' => 'Boek nu',
    'cta_href' => 'boek-nu',
]);


// SLIDES //////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
render_section('slides', [
    'title'    => 'Neem een kijkje in onze wereld van passie',
    'subtitle' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non eros leo. Duis luctus eget ligula eget interdum. Suspendisse vitae tortor interdum.",
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
    'subtitle'       => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non eros leo. Duis luctus eget ligula eget interdum. Suspendisse vitae tortor interdum.",
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