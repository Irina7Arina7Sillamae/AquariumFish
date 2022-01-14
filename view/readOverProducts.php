<?php
ob_start();
?>

<h1 >ONE Over Product</h1>

<br>
<?php
ViewOverProducts::ReadOverProducts($n);



$content = ob_get_clean();
include_once 'view/layout.php';
?>