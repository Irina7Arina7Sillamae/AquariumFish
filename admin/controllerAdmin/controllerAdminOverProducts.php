<?php
class controllerAdminOverProducts {
//------------------------------------------list OverProducts
    public static function OverProductsList() {
        $arr = modelAdminOverProducts::getOverProductsList();
        include_once ('viewAdmin/overProductsList.php');
    }
//-------------------------------------------------add
    public static function overProductsAddForm() {
        $arr = modelAdminCategory::getCategoryList();
        include_once('viewAdmin/overProductsAddForm.php');
    }
    
    public static function overProductsAddResult() {
        $test = modelAdminOverProducts::getOverProductsAdd();
        include_once('viewAdmin/overProductsAddForm.php');
    }
//-------------------------------------------------edit
    public static function overProductsEditForm($id) {
        $arr = modelAdminCategory::getCategoryList();
        $detail = modelAdminOverProducts::getOverProductsDetail($id);
        include_once('viewAdmin/overProductsEditForm.php');
    }

    public static function overProductsEditResult($id) {
        $test = modelAdminOverProducts::getOverProductsEdit($id);
        include_once('viewAdmin/overProductsEditForm.php');
    }
//------------------------------------------------delete
    public static function overProductsDeleteForm($id) {
        $arr = modelAdminCategory::getCategoryList();
        $detail = modelAdminOverProducts::getOverProductsDetail($id);
        include_once('viewAdmin/overProductsDeleteForm.php');
    }

    public static function overProductsDeleteResult($id) {
        $test = modelAdminOverProducts::getOverProductsDelete($id);
        include_once('viewAdmin/overProductsDeleteForm.php');
    }

}// class
?>