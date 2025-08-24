<?php 
// START //////////////////////////////////////////////
///////////////////////////////////////////////////////


// HERO ///////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('hero');


// SINGLE /////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('single', [
    'title' => 'Onze tarieven',
    'intro' => "Transparante prijzen, geen verrassingen. Kies de duur die past bij jouw tempo — jij bepaalt de invulling, wij verzorgen de rest.",
]);


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
        ['img' => 'assets/media/logo.png', 'headline' => 'Discretie als standaard',             'description' => 'Van reservering tot vertrek: jouw privacy staat voorop. We werken met stille ingang, neutrale communicatie en zorgvuldig protocol.'],
        ['img' => 'assets/media/logo.png', 'headline' => 'Hygiëne & comfort',                   'description' => 'Schoon en verzorgd tot in detail: frisse linnens, goed geventileerde ruimtes en professionele materialen.'],
        ['img' => 'assets/media/logo.png', 'headline' => 'Persoonlijke aandacht',               'description' => 'We luisteren naar jouw wensen en grenzen. Heldere afspraken vooraf zorgen voor rust en een fijne flow.'],
        ['img' => 'assets/media/logo.png', 'headline' => 'Veilig en eenvoudig betalen',         'description' => 'Betaal zoals jij wilt — contactloos of contant — en ontvang direct een bevestiging.'],
        ['img' => 'assets/media/logo.png', 'headline' => 'Flexibel plannen',                    'description' => 'Verzetten of annuleren? Dat kan tot 24 uur vooraf kosteloos. Samen zoeken we naar een passend moment.'],
        ['img' => 'assets/media/logo.png', 'headline' => 'Sfeervolle themakamers',              'description' => 'Kies een setting die past bij je stemming: van klassiek elegant tot speels en avontuurlijk.'],
    ],
    'cta_text' => 'Boek nu',
    'cta_href' => 'boek-nu',
]);




// END ////////////////////////////////////////////////
///////////////////////////////////////////////////////
?>