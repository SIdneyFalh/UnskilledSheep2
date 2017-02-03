<div class="soustitrebleu">
	<?= Secu::xss($unTuto->titre); ?>
</div>
<div class="bleu">
	<dl>
		<img src="/image/<?=$this->getCategory();?>/<?= Secu::xss($unTuto->image);?>" class="img-responsive center-block">
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
		<dd><a href="<?= Secu::xss($unTuto->site);?>" class="link"><?= Secu::xss($unTuto->login); ?></a></dd>
	</dl>
	<dl>
		<a href="http://twitter.com/share" class="twitter-share-button" 
  		data-count="vertical" data-via="BugRecovery">Tweet</a>
		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	</dl>
</div>