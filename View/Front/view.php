<h1>Home Page</h1>
<?php
foreach ($veras as $article) :
    ?>
    <div>
        <h2><?= $article->getTitle(); ?></h2>
        <p><?= substr($article->getContent(), 0, 200); ?></p>
        <a hre="/article/<?= $article->getID(); ?>">Lire plus</a>
    </div>
<?php endforeach; ?>