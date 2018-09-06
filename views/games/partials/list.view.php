<div class="productos-container">
    <div class="productos">
    <?php foreach($games as $game) : ?>
        <div class="producto">
        <h3 class="producto__title"><?=$game->name?></h3>
            <a href="<?= PUBLIC_PATH . '/producto?id=' .$game->id?>">
            <img src="<?= PUBLIC_PATH . '/img/ ' . $game->image ?>" class="producto__img"/></a>
        <p class="producto__price icon-lupa">
            <a href="<?= PUBLIC_PATH . '/producto?id=' .$game->id?>">Ver detalles</a>
        </p>
        </div>
    <?php endforeach; ?>
    </div>
</div>