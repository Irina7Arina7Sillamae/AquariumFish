<?php
ob_start();
?>

<br>
<?php
ViewOverProducts::ReadOverProducts($n);

echo "<br>";
Controller::Comments($_GET['id']);

echo "<br>";
ViewComments::CommentsForm();

$content = ob_get_clean();
include_once 'view/layout.php';
?>