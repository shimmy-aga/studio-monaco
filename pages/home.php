<?php 
// START //////////////////////////////////////////////
///////////////////////////////////////////////////////


// HERO ////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
render_section('hero', [
    'title'    => 'Welkom bij Studio Monaco',
    'subtitle' => 'Ontdek dé plek voor een verfijnde erotische massage in een discrete, elegante setting. Bij Studio Monaco draait alles om aandacht, ontspanning en een beleving op maat.',
    'bg_img'   => 'assets/media/placeholder-4.jpg',
    'bg_img_alt' => 'Studio Monaco massagesalon',
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
    'title'    => 'Erotische Massage & Belevenissen',
    'items'    => [
        ['img' => 'assets/media/placeholder-5.webp','headline' => 'Erotische Massage',   'description' => 'Verwarm lichaam en geest met een aandachtige, intuïtieve massage vol zachte sensaties en rust.'],
        ['img' => 'assets/media/placeholder-1.jpg', 'headline' => 'Sensuele Duo-Massage','description' => 'Dubbele aandacht van twee masseuses voor een extra rijke, ontspannen beleving.'],
        ['img' => 'assets/media/placeholder-2.jpg', 'headline' => 'BDSM-beleving (licht)', 'description' => 'Kies voor gecontroleerde spanning en vertrouwen, afgestemd op jouw grenzen.'],
        ['img' => 'assets/media/placeholder-3.jpg', 'headline' => 'Rollenspel',          'description' => 'Stap in een fantasierol en laat je meenemen in een veilige, discrete setting.'],
        ['img' => 'assets/media/placeholder-4.jpg', 'headline' => 'Sensory Play',        'description' => 'Fluweelzachte aanrakingen, temperatuurspel en subtiele prikkels voor alle zintuigen.'],
        ['img' => 'assets/media/placeholder-6.avif','headline' => 'Kinky Workshops',     'description' => 'Leer speels en respectvol nieuwe technieken en voorkeuren ontdekken.'],
        ['img' => 'assets/media/placeholder-7.webp','headline' => 'Groepservaringen',    'description' => 'Deel een discrete, sensuele massage-ervaring met anderen.'],
        ['img' => 'assets/media/placeholder-8.jpg', 'headline' => 'Striptease Show',     'description' => 'Combineer een elegante show met een ontspannende massage-sessie.'],
        ['img' => 'assets/media/placeholder-9.jpg', 'headline' => 'Fantasy Rooms',       'description' => 'Themakamers waarin jouw massagebeleving tot leven komt.'],
    ],
    'cta_text' => 'Boek nu',
    'cta_href' => 'boek-nu',
]);


// SLIDES //////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
render_section('slides', [
    'title'    => 'Neem een kijkje in onze wereld van passie',
    'subtitle' => "Voor een korte ontsnapping of uitgebreide sessie — onze masseuses zorgen voor pure ontspanning met een sensuele touch.",
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
    'subtitle'       => "Al meer dan een decennium creëren we persoonlijke massage-ervaringen met maximale discretie en hoge hygiënenormen. Een professioneel team van masseuses ontvangt je warm, zodat jij je iedere keer welkom en ontspannen voelt.",
    'cta_text'       => 'Lees meer',
    'cta_href'       => 'contact',
    'usps'           => [
        ['value' => '12+',   'label' => 'Jaar actief'],
        ['value' => '20',    'label' => 'Dames'],
        ['value' => '6',    'label' => 'Kamers'],
        ['value' => '3,450+','label' => 'Tevreden klanten'],
    ],
]);


// END ////////////////////////////////////////////////
///////////////////////////////////////////////////////
?>