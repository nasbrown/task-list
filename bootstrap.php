<?php

const INCLUDES_DIR = __DIR__ . "/includes";

const DB_DIR = __DIR__ . "/db";

const TEMPLATES_DIR = __DIR__ . "/templates";

const ROUTES_DIR = __DIR__ . "/routes";


require_once(INCLUDES_DIR . '/router.php');
require_once(INCLUDES_DIR . '/db.php');
require_once(INCLUDES_DIR . '/view.php');
