<?php
// Вычислить маршрут из адресной строки
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

//---------------------------------------------Start Site
if($path == '' OR $path == 'index' OR $path == 'index.php') {
    $response = Controller::StartSite();
}
//---------------------------------------------allProducts
elseif($path == 'all') {
    $response = Controller::AllProducts();
}
//----------------------------------------category products
elseif($path == 'category' and isset($_GET['id'])) {
    $response = Controller::ProductsByCatID($_GET['id']);
}
//-----------------------------------------products by ID
elseif($path == 'products' and isset($_GET['id'])) {
    $response = Controller::ProductsByID($_GET['id']);
}
//-------------------------------------------------coments
elseif($path == 'insertcomment' and isset($_GET['comment'],$_GET['id'])) {
    $response = Controller::InsertComment($_GET['comment'],$_GET['id']);
}
//------------------------------------------------Search
elseif($path == 'search' and isset($_GET['search'])) {
    $response = Controller::SearchProducts($_GET['search']);
}
//------------------------------------------------INFO
elseif($path == 'info') {
    $response = Controller::Info();
}
//---------------------------------------------Aquarium
elseif($path == 'aquarium') {
    $response = Controller::Aquarium();
}
//------------------------------------over products
elseif($path == 'OverProducts') {
    $response = Controller::AllOverProducts();
}
elseif($path == 'overProducts'and isset($_GET['id'])) {
    $response = Controller::OverProductsByID($_GET['id']);
}
//------------------------------------register user
elseif ($path == 'registerForm' )
{       // form register
    $response = Controller::registerForm();
}

elseif ($path == 'registerAnswer' )
{      // register user
    $response = Controller::registerUser();
}
       // error page
else {
    $response = Controller::error404();
}

?>