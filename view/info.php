<?php
ob_start();
?>

<h2>Page INFO</h2>
<h1>Our location</h1>
<div class="container">
    <div class="row">
        <div class="col">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12533.250677353926!2d27.780687681636344!3d59.38800267790195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2see!4v1642181134743!5m2!1sru!2see" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>