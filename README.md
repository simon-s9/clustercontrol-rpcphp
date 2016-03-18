ClusterControl RPC SDK for PHP
==============================

[![Build Status](https://travis-ci.org/simon-s9/clustercontrol-rpcphp.svg?branch=master)](https://travis-ci.org/simon-s9/clustercontrol-rpcphp) [![Dependency Status](https://gemnasium.com/simon-s9/clustercontrol-rpcphp.svg)](https://gemnasium.com/simon-s9/clustercontrol-rpcphp) [![codecov.io](https://codecov.io/github/simon-s9/clustercontrol-rpcphp/coverage.svg?branch=master)](https://codecov.io/github/simon-s9/clustercontrol-rpcphp?branch=master) 

* [Settings Api](docs/Severalnines-Rpc-Cluster-Client-SettingsClient.md)
* [Jobs Api](docs/Severalnines-Rpc-Cluster-Client-JobsClient.md)
* [Log Api](docs/Severalnines-Rpc-Cluster-Client-LogClient.md)
* [Operational reports Api](docs/Severalnines-Rpc-Cluster-Client-OperationalReportsClient.md)
* [Operational reports schedules Api](docs/Severalnines-Rpc-Cluster-Client-OperationalReportsSchedulesClient.md)
* [Processes Api](docs/Severalnines-Rpc-Cluster-Client-ProcessesClient.md)
* [Settings Api](docs/Severalnines-Rpc-Cluster-Client-SettingsClient.md)
* [Stats Api](docs/Severalnines-Rpc-Cluster-Client-StatsClient.md)

### Usage example
#### Installation
```
$ composer require severalnines/rpcphp
```
#### test.php
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$rpc = \Severalnines\Rpc::init(
    array(
        0 => 'wZPkJaOccOEYCVxr',
        1 => 'cRiuu4YfhET4SLuo'
    ),
    '127.0.0.1'
);

$hostsResponse = $rpc
    ->cluster(1)
    ->stat()
    ->getHosts();

if (!$hostsResponse->ok()) {
    die($hostsResponse->getError());
}

var_dump($hostsResponse->getData());
```