<?php

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/router/web.php";

routing($routes);


// echo "I'm index";

// echo "<pre>";
// print_r($_SERVER);

// echo $_SERVER["PATH_INFO"] ?? "/";

// if ($path === "/") {
//     require_once "./views/home.php";
// } elseif ($path === "/about-us") {
//     require_once "./views/about.php";
// } elseif ($path === "/services") {
//     require_once "./views/services.php";
// } else {
//     require_once "./views/not-found.php";
// };

// view($routes[$path] ?? "not-found");
