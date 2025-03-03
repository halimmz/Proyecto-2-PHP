<div class="container text-center">
    <h1 class="my-4">Próximas Películas Marvel</h1>
    
    <div class="mb-5">
        <img src="<?= $poster_url; ?>" class="img-fluid rounded mx-auto d-block" style="max-width: 300px;" alt="<?= $title ?>">
        
        <h3 class="mt-3"><?= $title ?></h3>
        <p><?= $until_message; ?></p>
        <p>Estreno: <?= $release_date; ?></p>
    </div>
    <hr>
    <?php if ($next_poster) : ?>
        
        <div class="mb-5">
            <img src="<?= $next_poster; ?>" class="img-fluid rounded mx-auto d-block" style="max-width: 300px;" alt="<?= $following_production ?>">
            
            <h3 class="mt-3"><?= $following_production ?></h3>
            <p>Estreno: <?= $next_release; ?></p>
            <?php if ($next_overview) : ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>