<?php
class Comments {
    public static function insertComment($c, $id) {
    $query="INSERT INTO `comments` (`id`, `products_id`, `text`, `date`) VALUES (NULL, '".$id."', '".$c."',
    CURRENT_TIMESTAMP)";
    $db = new database();
    $q = $db->executeRun($query);
    return $q;
    }

    public static function getCommentByProductsID($id) {
    $query = "SELECT * FROM comments WHERE products_id=".(string)$id." ORDER BY id DESC";
    $db = new database();
    $arr = $db->getAll($query);
    return $arr;
    }

    public static function getCommentsCountByProductsID($id) {
    $query="SELECT count(id) as 'count' FROM comments WHERE products_id=".(string)$id;
    $db = new database();
    $c = $db->getOne($query);
    return $c;
    }
}