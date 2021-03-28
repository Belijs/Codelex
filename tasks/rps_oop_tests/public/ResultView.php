<!doctype html>
<html lang="en">
<head>
    <title>R P S - Result</title>
</head>
<body>

<div align="center">
    <?= $game->detectWinner(); ?>
</div>

<div align="center">
    <form method="get">
        <input type="submit" value="New Game">
    </form>
</div>

</body>
</html>