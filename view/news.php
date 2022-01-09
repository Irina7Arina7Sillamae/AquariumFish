<?php
class ViewNews {

    public static function NewsByCategory ($arr) {
        echo '<div class="container">';
        echo '<div class="row">';

        foreach ($arr as $value) {
            echo '<div class="col">';
            echo '<div class="zoom">';
            echo '<img src="data:image/jpeg;base64,'.base64_encode($value['picture']).'"width=200 height=150 /><br>';
            echo "<h3>".$value['title']."</h3>";
            echo '</div>';
            Controller::CommentsCount($value['id']);
            echo "<a href='news?id=".$value['id']."'>Next</a><br>";
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }
    public static function AllNews ($arr) {
        foreach ($arr as $value) {
            echo "<li>".$value['title'];
            Controller::CommentsCount($value['id']);
            echo "<a href='news?id=".$value['id']."'>Next</a></li><br>";
        }
    }
    public static function ReadNews ($n) {
        echo "<h2>".$n['title']."</h2>";
        Controller::CommentsCountWithAncor($n['id']);   
        echo '<br><img class = "zoom" src="data:image/ipeg;base64,'.base64_encode($n['picture']).'"
        width=250 height=200/><br>';   

        echo "<p><br>".$n['text']."</p>";
        }
    //Добавить методы для других видов представления новостей
    }//end class
    