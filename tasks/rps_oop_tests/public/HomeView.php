<!doctype html>
<html lang="en">
<head>
    <title>R P S</title>
</head>
<body>


<div align="center">

    <?php foreach ($game->getElementOptions()->getElement() as $pattern){ ?>

    <form method="post">
        <input type="image"
            <?php if (file_exists('public/images/' . $pattern->getName() . '.jpg')) { ?>
                src="public/images/<?= $pattern->getName(); ?>.jpg"
            <?php } ?>

               alt="submit" name= <?= $pattern->getName(); ?>
               class="button" width="190" height="190">
        <?php } ?>

    </form>


</div>


</body>
</html>