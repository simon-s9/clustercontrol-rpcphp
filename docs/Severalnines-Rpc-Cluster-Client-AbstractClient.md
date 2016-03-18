Severalnines\Rpc\Cluster\Client\AbstractClient
===============

Class AbstractClient




* Class name: AbstractClient
* Namespace: Severalnines\Rpc\Cluster\Client
* This is an **abstract** class





Properties
----------


### $_cluster

    private \Severalnines\Rpc\Cluster\Cluster $_cluster = null





* Visibility: **private**


### $_path

    private string $_path = null





* Visibility: **private**


Methods
-------


### __construct

    mixed Severalnines\Rpc\Cluster\Client\AbstractClient::__construct(\Severalnines\Rpc\Cluster\Cluster $cluster, $path)

AbstractClient constructor.



* Visibility: **public**


#### Arguments
* $cluster **[Severalnines\Rpc\Cluster\Cluster](Severalnines-Rpc-Cluster-Cluster.md)**
* $path **mixed**



### getCluster

    \Severalnines\Rpc\Cluster\Cluster Severalnines\Rpc\Cluster\Client\AbstractClient::getCluster()





* Visibility: **protected**




### getRpc

    \Severalnines\Rpc Severalnines\Rpc\Cluster\Client\AbstractClient::getRpc()





* Visibility: **protected**




### getPath

    string Severalnines\Rpc\Cluster\Client\AbstractClient::getPath()





* Visibility: **protected**




### request

    \Severalnines\Rpc\Net\Response Severalnines\Rpc\Cluster\Client\AbstractClient::request(\Severalnines\Rpc\Net\Request $requestData)





* Visibility: **protected**


#### Arguments
* $requestData **[Severalnines\Rpc\Net\Request](Severalnines-Rpc-Net-Request.md)**



### buildUrl

    string Severalnines\Rpc\Cluster\Client\AbstractClient::buildUrl()





* Visibility: **private**



