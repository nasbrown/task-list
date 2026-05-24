<?php

declare(strict_types=1);//Keeps our functions strict and know what we are returning

session_start();//Starts our session and keeps track of page actions

require_once '../bootstrap.php';

//Dispatch(REQUEST URI, REQUEST METHOD)