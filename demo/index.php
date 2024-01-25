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
        "Scooby Werkstatt",
        "David Goggins",
        "Andrew Huberman"
    ]
    ?>
    <ul>
        <?php foreach ($people as $person) : ?>
            <li><?= $person ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
