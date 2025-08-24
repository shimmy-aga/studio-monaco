<?php 
// START //////////////////////////////////////////////
///////////////////////////////////////////////////////


// HERO ///////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('hero');


// CARDS/GALLERY //////////////////////////////////////
///////////////////////////////////////////////////////
render_section('cards', [
    'title' => 'Ontmoet onze dames',
    'subtitle' => 'Elke vrouw bij Studio Monaco heeft haar eigen stijl en energie. Van zacht en romantisch tot speels en gedurfd: blader door de profielen, bekijk voorkeuren en beschikbaarheid, en kies wie het beste bij jou past.',
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
    'title'          => 'Gevonden wie je zoekt?',
    'subtitle'       => "Plan je afspraak in de agenda en ontvang meteen een bevestiging.",
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