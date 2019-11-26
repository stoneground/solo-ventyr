<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle; ?>H & G</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <p>
            <?= $story['body'] ?>
        </p>

        <ul>
            <?php foreach ($links as $link): ?>
                <li>
                    <a href="?id=<?= $link ['target_id']?>">

                    <?= $link['description'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </main>
    <p class="back">
   <a href="start.html">Tillbaka</a>
</p>
</body>
</html>