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
            "profession" => "Long Distance Runnner",
            "birthDate" => 1975,
            "website" => "https://davidgoggins.com"

        ],
        [
            "name" => "Andrew Huberman",
            "profession" => "neuroscientist",
            "birthDate" => 1975,
            "website" => "https://www.hubermanlab.com"
        ]
    ];

    function filterByBirthDate($people, $birthDate)
    {
        $filteredPerson = [];

        foreach ($people as $person) {
            if ($person['birthDate'] === $birthDate) {
                $filteredPerson[] = $person;
            }
        }
        return $filteredPerson;
    }
    ?>
    <ul>
        <?php foreach (filterByBirthDate($people, 1961) as $person) : ?>
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
