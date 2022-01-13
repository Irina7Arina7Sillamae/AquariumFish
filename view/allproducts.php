<?php
ob_start();
?>
<div class="bgAllProd">
    <h1>All Products</h1>
    <br>
</div>
<?php
ViewProducts::AllProducts($arr);
$content = ob_get_clean();
include_once 'view/layout.php';
?>