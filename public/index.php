<?php

declare(strict_types=1);//Keeps our functions strict and know what we are returning

require_once './../bootstrap.php';

session_start();//Starts our session and keeps track of page actions

//echo "Hello";

dispatch($_SERVER["REQUEST_URI"], $_SERVER["REQUEST_METHOD"]);