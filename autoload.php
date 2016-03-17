<?php
spl_autoload_register(
    function ($className) {
        $path = __DIR__ . '/src/';
        $file = str_replace('\\', '/', $className) . '.php';
        /** @noinspection PhpIncludeInspection */
        require_once($path . $file);
    }
);