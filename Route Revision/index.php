<?php

require_once "./functions.php";
require_once "./router/web.php";


// php function
// ---------------------
// function run(){
//     echo "this is run";
// };
// call_user_func(run());

// echo "This is index";
// echo "<pre>";

// echo $_SERVER["PATH_INFO"] ?? "/";

// path base routing
// -----------------------------
// "/" => views/home.php
// "/about-us" => views/about.php
// "/contact" => views/contact.php
// "/blog" => views/blog.php

// simple way for routing
// -----------------------------

// $path = $_SERVER["PATH_INFO"] ?? "/";
// if($path === "/"){
//     $file = "./views/home.php";
// }elseif($path === "/blog"){
//     $file = "./views/blog.php";
// }elseif($path === "/about-us"){
//     $file = "./views/about.php";
// }elseif($path === "/contact"){
//     $file = "./views/contact.php";
// }else{
//     $file = "./views/not-found.php";
// };
// require_once $file;

// function view(string $file): bool
// {
//     require_once __DIR__."/views/".$file.".php";
//     return true;
// };

// $path = $_SERVER["PATH_INFO"] ?? "/";
// $routes = [
//     "/" => "home",
//     "/about-us" => "about",
//     "/blog" => "blog",
//     "/contact" => "contact",
// ];
// require_once $routes[$path] ?? "./views/not-found.php";

// view($routes[$path] ?? "not-found");

$current = $routes[$path] ?? false;

if($current){
$arr = explode("@",$current);
$controllerFile = $arr[0];
$controllerFunction = $arr[1];

require_once __DIR__."/controller/".$controllerFile.".php";
call_user_func($controllerFunction);
}else{
    view("not-found");
};
