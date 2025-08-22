<?php 
// START //////////////////////////////////////////////
///////////////////////////////////////////////////////


// HERO ///////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('hero');


// COLUMNS ////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('columns', [
  'about_title'   => 'over ons',
  'about_text'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non eros leo. Duis luctus eget ligula eget interdum. Suspendisse vitae tortor interdum.',
  'contact_title' => 'contact & info',
  'contact_items' => [
    ['text' => 'Langs de werf 6'],
    ['text' => '1185 XT Amstelveen'],
    ['text' => 'Vergunningnummer: Z23-028565'],
    ['text' => '+31 (0)20–7520594', 'href' => 'tel:+31207520594', 'li_class' => 'primary-color'],
    ['text' => 'info@studio-monaco.nl', 'href' => 'mailto:info@studio-monaco.nl', 'li_class' => 'primary-color'],
  ],
]);


// FORM ///////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('form', [
  'title'       => 'Neem contact op',
  'form_action' => '',
  'form_method' => '',
  'submit_text' => 'Versturen',
  'fields' => [
    ['id'=>'name','type'=>'text','label'=>'Naam','required'=>true,'col'=>'x-50','autocomplete'=>'name'],
    ['id'=>'email','type'=>'email','label'=>'E-mail','required'=>true,'col'=>'x-50','autocomplete'=>'email'],
    ['id'=>'message','type'=>'textarea','label'=>'Bericht','required'=>true,'col'=>'x-100'],
  ],
]);


// SINGLE /////////////////////////////////////////////
///////////////////////////////////////////////////////
render_section('single', [
    'title' => 'Werken bij Studio Monaco',
    'intro' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non eros leo. Duis luctus eget ligula eget interdum.",
]);


// END ////////////////////////////////////////////////
///////////////////////////////////////////////////////
?>