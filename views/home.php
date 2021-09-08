<h1>Notícias</h1>

<?php foreach($posts as $post): ?>
<h3><?php echo $post['titulo']; ?></h3>
<?php echo $post['corpo']; ?>
<hr/>
<?php endforeach; ?>