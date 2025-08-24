<?php
// START //////////////////////////////////////////////
///////////////////////////////////////////////////////


// SPLIT //////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('split', [
    'title' => 'GALLERIJ',
    'gallery' => [
        ['src' => '/assets/media/placeholder-1.jpg', 'alt' => 'Mandy pose 1'],
        ['src' => '/assets/media/placeholder-2.jpg', 'alt' => 'Mandy pose 2'],
        ['src' => '/assets/media/placeholder-3.jpg', 'alt' => 'Mandy pose 3'],
        ['src' => '/assets/media/placeholder-4.jpg', 'alt' => 'Mandy pose 4'],
        ['src' => '/assets/media/placeholder-5.webp', 'alt' => 'Mandy portrait'],
        ['src' => '/assets/media/placeholder-6.avif', 'alt' => 'Mandy close-up'],
    ],
    'person' => [
        'label'        => 'DAME',
        'name'         => 'MANDY',
        'about'        => 'Mandy is spontaan, stijlvol en vol energie. Ze zorgt voor een warme sfeer en weet elke ontmoeting bijzonder te maken.',
        'looks'        => [
            ['label' => 'Leeftijd',  'value' => '26'],
            ['label' => 'Cupmaat',   'value' => 'C'],
            ['label' => 'Haarkleur', 'value' => 'Blond'],
            ['label' => 'Haarlengte','value' => 'Lang'],
            ['label' => 'Oogkleur',  'value' => 'Groen'],
            ['label' => 'Lengte',    'value' => '173cm'],
        ],
        'cta_href'     => '/boeken/mandy',
        'cta_text'     => 'Boek nu',
        'phone'        => '+31 6 12345678',
        'rate'         => '120 euro per half uur',
        'portrait_src' => '/assets/media/mandy.jpg',
        'portrait_alt' => 'Mandy',
    ],
]);


// END ////////////////////////////////////////////////
///////////////////////////////////////////////////////
?>