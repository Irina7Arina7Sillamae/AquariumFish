<?php
ob_start();
?>

<h1>All Over Products</h1>
<br>

<?php
ViewOverProducts::AllOverProducts($arr);
$content = ob_get_clean();
include_once 'view/layout.php';
?>