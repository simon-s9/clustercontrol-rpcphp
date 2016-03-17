Severalnines\Rpc\Cluster\Cluster
===============

Class Cluster




* Class name: Cluster
* Namespace: Severalnines\Rpc\Cluster





Properties
----------


### $_id

    private integer $_id = null





* Visibility: **private**


### $_token

    private string $_token = null





* Visibility: **private**


### $_rpc

    private \Severalnines\Rpc $_rpc = null





* Visibility: **private**


Methods
-------


### __construct

    mixed Severalnines\Rpc\Cluster\Cluster::__construct($id, $token, \Severalnines\Rpc $rpc)

Cluster constructor.



* Visibility: **public**


#### Arguments
* $id **mixed**
* $token **mixed**
* $rpc **[Severalnines\Rpc](Severalnines-Rpc.md)**



### getId

    integer Severalnines\Rpc\Cluster\Cluster::getId()





* Visibility: **public**




### getToken

    string Severalnines\Rpc\Cluster\Cluster::getToken()





* Visibility: **public**




### getRpc

    \Severalnines\Rpc Severalnines\Rpc\Cluster\Cluster::getRpc()





* Visibility: **public**




### settings

    \Severalnines\Rpc\Cluster\Client\SettingsClient Severalnines\Rpc\Cluster\Cluster::settings()





* Visibility: **public**




### processes

    \Severalnines\Rpc\Cluster\Client\ProcessesClient Severalnines\Rpc\Cluster\Cluster::processes()





* Visibility: **public**



