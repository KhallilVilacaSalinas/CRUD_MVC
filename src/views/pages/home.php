<?php $render('header'); ?>

<h3>Meu nome é: <?php echo $nome; ?></h3>
<h3>Minha idade é: <?php echo $idade; ?></h3>

<hr>

<?php foreach ($posts as $post) : ?>
    <h4><?php echo $post['titulo']; ?></h4>
    <h5><?php echo $post['corpo']; ?></h5>
    <hr>
<?php endforeach ?>