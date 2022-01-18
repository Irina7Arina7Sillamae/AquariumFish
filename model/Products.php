<?php
class Products {

    public static function getLast6Products() {
        $query = "SELECT * FROM products ORDER BY id DESC LIMIT 6";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }
    public static function getAllProducts() {
        $query = "SELECT * FROM products ORDER BY id DESC";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }
    public static function getProductsByCategoryID($id) {
        $query = "SELECT * FROM products where category_id=".(string)$id." ORDER BY id DESC";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }
    public static function getProductsByID($id) {
        $query = "SELECT * FROM products where id=".(string)$id;
        $db = new database();
        $n = $db->getOne($query);
        return $n;
    }
    public static function getSearchProducts($s) {
        $query = 'SELECT * FROM products where title like "%'.$s.'%" or text like "%'.$s.'%"';     
        $db = new database();
        $n = $db->getAll($query);
        return $n;
    }
}
?>
