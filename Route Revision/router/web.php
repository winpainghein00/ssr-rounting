<?php

$path = $_SERVER["PATH_INFO"] ?? "/";
$routes = [
    "/" => "page@home",
    "/about-us" => "page@about",
    "/blog" => "page@blog",
    "/contact" => "page@contact",
    "/course" => "courses@index"
];