<?php
class ViewPlants {

    public static function AllPlants ($arr) {
        echo '<div class="container">';
        echo '<div class="row">';

        foreach ($arr as $value) {
            echo '<div class="col">';
            echo '<div class="thumbnail">';
            echo '<div class="zoom">';
            echo '<img src="data:image/jpeg;base64,'.base64_encode($value['picture']).'"width=198 height=150 /><br>';
            echo '</div>';
            echo "<h3>".$value['title']."</h3>";
            echo '</div>';
            //Controller::CommentsCount($value['id']);
            echo "<a class='next' href='news?id=".$value['id']."'>Next</a><br>";
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }
}