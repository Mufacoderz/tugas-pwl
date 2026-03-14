<?php

require_once __DIR__ . '/config/config.php';
require_once BASE_PATH . '/app/Core/Router.php';
require_once BASE_PATH . '/app/Routes/web.php';

Router::run();