<?php

class Controller {
    public static function StartSite() {
        $arr = Products::getLast6Products();
        include_once 'view/start.php';
    }
    public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }
    public static function AllProducts() {
        $arr = Products::getAllProducts();
        include_once 'view/allProducts.php';
    }
    public static function ProductsByCatID($id) {
        $arr = Products::getProductsByCategoryID($id);
        include_once 'view/catProducts.php';
    }
    public static function ProductsByID($id) {
        $n = Products::getProductsByID($id);
        include_once 'view/readProducts.php';
    }
     //-----------------------------------OverProducts
   public static function AllOverProducts() {
        $arr = OverProducts::getAllOverProducts();
        include_once 'view/startOverProducts.php';
   }

    public static function OverProductsByID($id) {
        $n = OverProducts::getOverProductsByID($id);
        include_once 'view/readOverProducts.php';
    }
    //-----------------------------------------error
    public static function error404() {
        include_once 'view/error404.php';
    }
    //----------------------------------------search
    public static function SearchProducts($search) {
        $arr = Products::getSearchProducts($search);
        include_once 'view/searchview.php';
   }
    //------------------------------------------Info
    public static function info() {
        include_once 'view/info.php';
    }
    //------------------------------------------Info
    public static function aquarium() {
        include_once 'view/aquarium.php';
    }
//---------------------------------------------Comment
    public static function InsertComment($c, $id) {
    Comments::InsertComment($c, $id);
    // self::ProductsById(id);
    header('Location:products?id='.$id.'#ctable');
    }

    //список комментариев
    public static function Comments($productsid) {
        $arr = Comments::getCommentByProductsID($productsid);
        ViewComments::CommentsByProducts($arr);
    }

    //количество комментариев к Products
    public static function CommentsCount($productsid) {
        $arr = Comments::getCommentsCountByProductsID($productsid);
         ViewComments::CommentsCount($arr);
    }

    //ссылка - переход к списку коментариев
    public static function CommentsCountWithAncor($productsid) {
        $arr = Comments::getCommentsCountByProductsID($productsid);
        ViewComments::CommentsCountWithAncor($arr);
    }
    //--------------------------------- РЕГИСТРАЦИЯ
   public static function registerForm(){   
       include_once('view/formRegister.php');
   } 

   public static function registerUser(){   
       $result = Register::registerUser();
       include_once('view/answerRegister.php');
   }
  
}
// end class
// $c - текст комментария
//  id - номер product