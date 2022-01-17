<?php 
class modelAdminOverProducts {
    public static function getOverProductsList() {
    $query = "SELECT overproducts.*, category.name,users.username from overproducts,
    category,users WHERE overproducts.category_id=category.id AND
    overproducts.user_id = users.id ORDER BY `overproducts`.`id` DESC";
    $db = new database();
    $arr = $db->getAll($query);
    return $arr;
     }

//------------------------------------------------Add
public static function getOverProductsAdd(){
    $test = false;
    if(isset($_POST['save'])) {
        if(isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory'])) {

            $title = $_POST['title'];
            $text = $_POST['text'];
            $idCategory = $_POST['idCategory'];

//------------------------------------images type blob
                $image = addslashes (file_get_contents($_FILES['picture']['tmp_name']));
//----------------------------------------------------
            $sql = "INSERT INTO `overproducts` (`id`, `title`, `text`, `picture`, `category_id`,
            `user_id`) VALUES (NULL, '$title', '$text', '$image', '$idCategory', '1')";
                $db = new database();
                $item = $db->executeRun($sql);
            if($item == true) {
            $test = true;
            }
        }
    
    }
return $test;
}
//---------------------------------------products detail id
public static function getOverProductsDetail($id) {
    $query = "SELECT overproducts.*, category.name, users.username FROM overproducts, category, users 
    WHERE overproducts.category_id=category.id AND overproducts.user_id=users.id AND overproducts.id=".$id;
    $db = new database();
    $arr = $db->getOne($query);
    return $arr;
}
//--------------------------------------------products edit
public static function getOverProductsEdit($id) {
    $test = false;
    if(isset($_POST['save'])) {
        if(isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory'])) {
            $title = $_POST['title'];
            $text = $_POST['text'];
            $idCategory = $_POST['idCategory'];
//-------------------------------------images type blob
            $image = $_FILES['picture']['name'];
            if($image!="") {
                $image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));
/*
//--------------------------------------image type text 
                $uploaddir = '../images/';
                $uploadfile = $uploaddir . basename($_FILES['picture']['name']);
                copy($_FILES['picture']['tmp_name'], $uploadfile);   */
            }
//-----------------------------------------------------
                if($image=="") {
                    $sql = "UPDATE `overproducts` SET `title` = '$title', `text` = '$text',
                    `category_id` = '$idCategory' WHERE `overproducts`.`id` = ".$id;
                }
                else {
                    $sql = "UPDATE `overproducts` SET `title` = '$title', `text` = '$text', `picture` = '$image', 
                    `category_id` = '$idCategory' WHERE `overproducts`.`id` = ".$id;
                }
                        $db = new database();
                        $item = $db->executeRun($sql);
                        if($item == true) {
                            $test = true;
                        }
            }
        }
        return $test;
    }
//------------------------------------------products delete
    public static function getOverProductsDelete($id) {
        $test = false;
        if(isset($_POST['save'])) {
            $sql = "DELETE FROM `overproducts` WHERE `overproducts`.`id` = ".$id;

            $db = new database();
            $item = $db->executeRun($sql);
            if($item == true) {
                $test = true;
            }
        }
        return $test;
    }

} //class