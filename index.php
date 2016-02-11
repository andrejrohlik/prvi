<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="prvi.css" />
    <meta charset="UTF-8">
    <title>Naslov</title>
</head>
<body>
<h1>Prvi</h1>

<p>
    <?php
    echo('Pozdrav iz PHP-a');
    echo('<br>');
    echo(date('d.m.Y.'));
    ?>
</p>

<p>
    <?php
    $dana_do_praznika = 45;
    echo('Do praznika je ostalo još: <b>' . $dana_do_praznika . '</b>');
    ?>
</p>
</body>
</html>
