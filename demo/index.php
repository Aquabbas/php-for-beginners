<!DOCTYPE html>
<html lang="en">

<head>
    <title>Demo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <h1>List of People</h1>

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

    /*
    function filter($items, $fn)
    {
        $filteredItems = [];

        foreach ($items as $item) {
            if ($fn($item)) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    }
        */

    /*
    $filteredBirths = filter($people, function ($person) {
        return $person['birthDate'] < 1975;
    });
        */
    $filteredBirths = array_filter($people, function ($person) {
        return ($person['birthDate'] === 1975 && $person['profession'] === "Long Distance Runner");
    });

    ?>



    <ul>
        <?php foreach ($filteredBirths as $person) : ?>
            <li>
                <a href="<?= $person['website'] ?>" target="_blank">

                    <?= $person['name']; ?>,
                    (<?= $person['profession']; ?>),
                    Date of Birth: <?= $person['birthDate']; ?>

                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
