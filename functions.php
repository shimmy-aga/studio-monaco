<?php


// Project directory variable
define('ROOT_DIR', __DIR__);


// Rendering sections dynamically
function render_section($component, $data = []) {
    extract($data);
    include __DIR__ . "/components/sections/{$component}.php";
}


// Rendering layout dynamically
function render_layout($component, $data = []) {
    extract($data);
    include __DIR__ . "/components/layout/{$component}.php";
}


?>
