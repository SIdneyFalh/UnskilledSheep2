<div class="soustitrebleu">
	<?= Secu::xss($unTuto->titre); ?>
</div>
<div class="bleu">
	<dl>
		<img src="/image/<?=$this->getCategory();?>/<?= Secu::xss($unTuto->image);?>" class="img-responsive">
	</dl>
	<dl>
		<dt>Description: </dt>
		<dd><pre><?= Secu::xss($unTuto->description); ?></pre></dd>
	</dl>
	<dl>
		<dt>Contenu: </dt>
		<dd>
			<pre><code class="language-<?= Secu::xss($unTuto->libelle); ?>"><?= Secu::xss($unTuto->contenu); ?></code></pre>
		</dd>
	</dl>
	<dl>
		<dt>Auteur: </dt>
		<dd><?= Secu::xss($unTuto->login); ?></dd>
	</dl>
</div>