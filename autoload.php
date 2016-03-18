<?php
require_once(__DIR__ . '/vendor/autoload.php');
spl_autoload_register(
    function ($className) {
        $path = __DIR__ . '/src/';
        $testPath = __DIR__ . '/tests/';
        $file = str_replace('\\', '/', $className) . '.php';
        if (file_exists($path . $file)) {
            /** @noinspection PhpIncludeInspection */
            require_once($path . $file);
        }
        if (file_exists($testPath . $file)) {
            /** @noinspection PhpIncludeInspection */
            require_once($testPath . $file);
        }
    }
);