<?php
$request = $_SERVER['REQUEST_URI'];
$router = str_replace('/Folio', '', $request);

if ($router == '/') {
  include('home.php');
}
//for admin login
elseif ($router == '/admin/login') {
  include('./admin/login.php');
}
//for admin index
elseif ($router == '/admin/') {
  include('./admin/index.php');
}
else {
  include('404.php');
}
