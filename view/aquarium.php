<?php
ob_start();
?>

<h2>Page INFO</h2>
<h1>The magical world of the aquarium</h1>
<div class="container">
    <div class="row">
        <div class="col">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/h83HXQKNRQs?controls=0&amp;start=11" 
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
        encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>