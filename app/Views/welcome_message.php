<?=$header?>

<h1>Noticias</h1>

<nav class="navbar navbar-inverse">
	<div class ="container">
		<ul class="nav navbar-nav">
			<li><a href="<?=base_url('noticias')?>">Noticias</a></li>
			<li><a href="<?=base_url('index.php')?>">Home</a></li>
		</ul>
	</div>
</nav>

<h2 class="text-center">Ultimas noticias</h2>

<?php foreach($noticias as $noticia): ?>
	<h3><?=$noticia['title']?></h3><br>
	<small>Posted on: <?=$noticia['publication_date']?></small>
	<small><?=$noticia['content']?></small><br><br>
<?php endforeach; ?>

<?=$footer?>
