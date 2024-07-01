<?php

$port = 8090;
$startingPath = "public";

exec("php -S localhost:$port -t $startingPath");
