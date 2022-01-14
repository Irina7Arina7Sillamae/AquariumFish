<?php
// Вычислить маршрут из адресной строки
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if($path == '' OR $path == 'index' OR $path == 'index.php') {
    $response = Controller::StartSite();
}

elseif($path == 'all') {
    $response = Controller::AllProducts();
}
elseif($path == 'category' and isset($_GET['id'])) {
    $response = Controller::ProductsByCatID($_GET['id']);
}
elseif($path == 'products' and isset($_GET['id'])) {
    $response = Controller::ProductsByID($_GET['id']);
}
elseif($path == 'insertcomment' and isset($_GET['comment'],$_GET['id'])) {
    $response = Controller::InsertComment($_GET['comment'],$_GET['id']);
}
elseif($path == 'info') {
    $response = Controller::Info();
}
//------------------------------------plants
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