<?php 
// START //////////////////////////////////////////////
///////////////////////////////////////////////////////


// HERO ///////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('hero');


// CARDS/GALLERY //////////////////////////////////////
///////////////////////////////////////////////////////
render_section('cards', [
    'title' => 'OVERZICHT VAN ONZE DAMES',
    'subtitle' => 'Hieronder zie je een overzicht van onze dames en welke op het moment beschikbaar zijn',
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


// BANNER /////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('banner', [
    'first_img_src'  => 'assets/media/placeholder-9.jpg',
    'first_img_alt'  => '',
    'second_img_src' => 'assets/media/placeholder-8.jpg',
    'second_img_alt' => '',
    'title'          => 'Studio Monaco',
    'subtitle'       => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non eros leo. Duis luctus eget ligula eget interdum. Suspendisse vitae tortor interdum.",
    'cta_text'       => 'Boek nu',
    'cta_href'       => 'boek-nu',
    'usps'           => [
        ['value' => '12+',   'label' => 'Jaar actief'],
        ['value' => '17',    'label' => 'Dames'],
        ['value' => '20',    'label' => 'Kamers'],
        ['value' => '3,450+','label' => 'Tevreden klanten'],
    ]
])


// END ////////////////////////////////////////////////
///////////////////////////////////////////////////////
?>