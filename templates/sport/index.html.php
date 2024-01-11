<h1>La page des sports</h1>

<h2><?= $information ?></h2>

<?php foreach ($sports as $sport): ?>

    <div class="sport border border-dark m-3">
        <h3><?= $sport->getName() ?></h3>
        <p><strong><?= $sport->getDescription() ?></strong></p>
        <p>Accessoire : <?= $sport->getAccessory() ?></p>
        <a href="?type=sport&action=show&id=<?= $sport->getId() ?>">Lien vers le <?=$sport->getName() ?></a>
    </div>

<?php endforeach; ?>

