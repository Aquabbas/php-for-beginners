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
