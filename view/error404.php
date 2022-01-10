<?php
ob_start();
?>
<div class = "bgc">
    <h1>Error 404</h1>
</div>



<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>