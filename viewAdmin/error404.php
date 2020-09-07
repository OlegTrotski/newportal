<?php ob_start() ?>
<h2>404 ошибки</h2>
<article>
	<h1>404 ошибка - что это такое?</h1>
	<p>По запрашиваемому url страница не найдена</p>
</article>
<?php $content = ob_get_clean(); ?>

<?php include "viewAdmin/templates/layout.php";