<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Startsida",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "Blogg",
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
    ],
];
