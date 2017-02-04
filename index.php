<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/Frame/loader.php';
spl_autoload_register('\\Frame\\Loader::autoload');

// $db = Frame\Factory::createDatabase();

Frame\Register::get('db1');
