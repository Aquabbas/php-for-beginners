<?php

$people = [
    [
        "name" => "Scooby Werkstatt",
        "profession" => "Software Engineer & Bodybuilder",
        "birthDate" => 1961,
        "website" => "https://www.scoobysworkshop.com"
    ],
    [
        "name" => "David Goggins",
        "profession" => "Long Distance Runner",
        "birthDate" => 1975,
        "website" => "https://davidgoggins.com"

    ],
    [
        "name" => "Andrew Huberman",
        "profession" => "Neuroscientist",
        "birthDate" => 1975,
        "website" => "https://www.hubermanlab.com"
    ]
];

$filteredBirths = array_filter($people, function ($person) {
    return ($person['birthDate'] === 1975 && $person['profession'] === "Long Distance Runner");
});

require "index.view.php";
