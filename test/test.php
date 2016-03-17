<?php
require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../autoload.php');

$rpc = \Severalnines\Rpc::init(
    array(
        0 => 'wZPkJaOccOEYCVxr',
        1 => 'cRiuu4YfhET4SLuo'
    ),
    '52.17.44.14'
);

var_dump(
    $rpc
        ->cluster(1)
        ->processes()
        ->top()
);