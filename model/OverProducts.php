<?php
class OverProducts {

    public static function getLast6OverProducts() {
        $query = "SELECT * FROM overproducts ORDER BY id DESC LIMIT 6";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getAllOverProducts() {
        $query = "SELECT * FROM overproducts ORDER BY id DESC";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getOverProductsByCategoryID($id) {
        $query = "SELECT * FROM overproducts where category_id=".(string)$id." ORDER BY id DESC";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getOverProductsByID($id) {
        $query = "SELECT * FROM overproducts where id=".(string)$id;
        $db = new database();
        $n = $db->getOne($query);
        return $n;
    }
}
?>