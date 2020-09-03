<?php
ob_start();
?>

<br>

<?php
ViewNews::ReadNews($n);

echo "<br>";
Controller::Comments($_GET['id']);

echo "<br>";
ViewComments::CommentsForm();

$content = ob_get_clean();
inlcude_once 'view/layout.php';
?>