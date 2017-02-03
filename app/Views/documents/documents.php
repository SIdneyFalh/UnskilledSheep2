<div class="soustitrebleu">
	<?= $this->getCategory(); ?>
</div>
<div class="bleu">
		<?php foreach ($lesDocs as $leDoc): ?>
			<div class="panel panel-default">
  				<div class="panel-heading">
  					Titre: <?= Secu::xss($leDoc->titre); ?>
  				</div>
  				<div class="panel-body">
    				Lien: <a class="link" href="?page=documents.<?= $this->getCategory(); ?>.<?= $leDoc->id; ?>">
						voir plus
					</a>
  				</div>
  				<div class="panel-footer">
  					<a href="<?= Secu::xss($leDoc->site);?>" class="link"><?= Secu::xss($leDoc->login); ?></a>
  				</div>
			</div>
		<?php endforeach; ?>
</div>