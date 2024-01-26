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
            "website" => "https://www.scoobysworkshop.com"
        ],
        [
            "name" => "David Goggins",
            "profession" => "Long Distance Runnner",
            "website" => "https://davidgoggins.com"

        ],
        [
            "name" => "Andrew Huberman",
            "profession" => "neuroscientist",
            "website" => "https://www.hubermanlab.com"
        ]
    ]
    ?>
    <ul>
        <?php foreach ($people as $person) : ?>
            <li>
                <a href="<?= $person['website'] ?>" target="_blank">
                    <?= $person['name']; ?> (<?= $person['profession']; ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
