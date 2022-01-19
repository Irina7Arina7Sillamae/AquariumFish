<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host,'/');
$path = explode('/', $host)[$num];

if ($path == '' OR $path =='index.php')
{   //Главная страница -
    $response = controllerAdmin::formLoginSite();
}
    //---------Вход--------
elseif ($path == 'login')
{
    //Форма входа
    $response = controllerAdmin::loginAction();
}
elseif ($path == 'logout')
{
    // Выход
    $response = controllerAdmin::logoutAction();
}
//---------------------------------------listProducts, listOverProducts
elseif($path=='productsAdmin') {
    $response = controllerAdminProducts::ProductsList();
}
elseif($path=='overProductsAdmin') {
    $response = controllerAdminOverProducts::OverProductsList();
}
//---------------------------------------add products, overProducts
elseif($path=='productsAdd') {
    $response = controllerAdminProducts::productsAddForm();
}
elseif($path=='productsAddResult') {
    $response = controllerAdminProducts::productsAddResult();
}
elseif($path=='OverProductsAdd') {
    $response = controllerAdminOverProducts::overProductsAddForm();
}
elseif($path=='overProductsAddResult') {
    $response = controllerAdminOverProducts::overProductsAddResult();
}
//---------------------------------------edit products, overProducts
elseif($path=='productsEdit' && isset($_GET['id'])) {
    $response = controllerAdminProducts::productsEditForm($_GET['id']);
}
elseif($path=='productsEditResult' && isset($_GET['id'])) {
    $response = controllerAdminProducts::productsEditResult($_GET['id']);
}
elseif($path=='overproductsEdit' && isset($_GET['id'])) {
    $response = controllerAdminOverProducts::overProductsEditForm($_GET['id']);
}
elseif($path=='overProductsEditResult' && isset($_GET['id'])) {
    $response = controllerAdminOverProducts::overProductsEditResult($_GET['id']);
}
//-------------------------------------delete products, overProducts
elseif($path=='productsDel' && isset($_GET['id'])) {
    $response = controllerAdminProducts::productsDeleteForm($_GET['id']);
}
elseif($path=='productsDelResult' && isset($_GET['id'])) {
    $response = controllerAdminProducts::productsDeleteResult($_GET['id']);
}
elseif($path=='overproductsDel' && isset($_GET['id'])) {
    $response = controllerAdminOverProducts::overProductsDeleteForm($_GET['id']);
}
elseif($path=='overProductsDelResult' && isset($_GET['id'])) {
    $response = controllerAdminOverProducts::overProductsDeleteResult($_GET['id']);
}
else {   // Страница не существует
    $response = controllerAdmin::error404();
}