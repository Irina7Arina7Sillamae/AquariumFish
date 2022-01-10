<?php
class Plants {

    public static function getLast6Plants() {
        $query = "SELECT * FROM plants ORDER BY id DESC LIMIT 6";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getAllPlants() {
        $query = "SELECT * FROM plants ORDER BY id DESC";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getPlantsByCategoryID($id) {
        $query = "SELECT * FROM plants where category_id=".(string)$id." ORDER BY id DESC";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getPlantsByID($id) {
        $query = "SELECT * FROM plants where id=".(string)$id;
        $db = new database();
        $n = $db->getOne($query);
        return $n;
    }
}
?>