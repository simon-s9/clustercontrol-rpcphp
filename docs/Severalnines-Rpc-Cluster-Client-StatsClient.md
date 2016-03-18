Severalnines\Rpc\Cluster\Client\StatsClient
===============

Class Stats




* Class name: StatsClient
* Namespace: Severalnines\Rpc\Cluster\Client
* Parent class: [Severalnines\Rpc\Cluster\Client\AbstractClient](Severalnines-Rpc-Cluster-Client-AbstractClient.md)





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


### setHost

    mixed Severalnines\Rpc\Cluster\Client\StatsClient::setHost($hostName, $port, array $properties)





* Visibility: **public**


#### Arguments
* $hostName **mixed**
* $port **mixed**
* $properties **array**



### getHosts

    mixed Severalnines\Rpc\Cluster\Client\StatsClient::getHosts()





* Visibility: **public**




### cpuInfo

    mixed Severalnines\Rpc\Cluster\Client\StatsClient::cpuInfo($hostId)





* Visibility: **public**


#### Arguments
* $hostId **mixed**



### getStatByName

    mixed Severalnines\Rpc\Cluster\Client\StatsClient::getStatByName($name, $hostId, $startDate, $limit)





* Visibility: **public**


#### Arguments
* $name **mixed**
* $hostId **mixed**
* $startDate **mixed**
* $limit **mixed**



### memoryStatistics

    mixed Severalnines\Rpc\Cluster\Client\StatsClient::memoryStatistics($hostId, $startDate, $limit)





* Visibility: **public**


#### Arguments
* $hostId **mixed**
* $startDate **mixed**
* $limit **mixed**



### distStatistics

    mixed Severalnines\Rpc\Cluster\Client\StatsClient::distStatistics($hostId, $startDate, $limit)





* Visibility: **public**


#### Arguments
* $hostId **mixed**
* $startDate **mixed**
* $limit **mixed**



### cpuStatistics

    mixed Severalnines\Rpc\Cluster\Client\StatsClient::cpuStatistics($hostId, $startDate, $limit)





* Visibility: **public**


#### Arguments
* $hostId **mixed**
* $startDate **mixed**
* $limit **mixed**



### networkStatistics

    mixed Severalnines\Rpc\Cluster\Client\StatsClient::networkStatistics($hostId, $startDate, $limit)





* Visibility: **public**


#### Arguments
* $hostId **mixed**
* $startDate **mixed**
* $limit **mixed**



### tcpNetworkStatistics

    mixed Severalnines\Rpc\Cluster\Client\StatsClient::tcpNetworkStatistics($hostId, $startDate, $limit)





* Visibility: **public**


#### Arguments
* $hostId **mixed**
* $startDate **mixed**
* $limit **mixed**



### sqlServerStatistics

    mixed Severalnines\Rpc\Cluster\Client\StatsClient::sqlServerStatistics($startDate, $limit)





* Visibility: **public**


#### Arguments
* $startDate **mixed**
* $limit **mixed**



### databaseStatistics

    mixed Severalnines\Rpc\Cluster\Client\StatsClient::databaseStatistics($startDate, $limit)





* Visibility: **public**


#### Arguments
* $startDate **mixed**
* $limit **mixed**



### processList

    mixed Severalnines\Rpc\Cluster\Client\StatsClient::processList()





* Visibility: **public**




### variables

    mixed Severalnines\Rpc\Cluster\Client\StatsClient::variables($hostId, array $variables)





* Visibility: **public**


#### Arguments
* $hostId **mixed**
* $variables **array**



### statuses

    mixed Severalnines\Rpc\Cluster\Client\StatsClient::statuses($hostId, array $keys)





* Visibility: **public**


#### Arguments
* $hostId **mixed**
* $keys **array**



### deadlock

    mixed Severalnines\Rpc\Cluster\Client\StatsClient::deadlock($startDate, $endDate, $limit)





* Visibility: **public**


#### Arguments
* $startDate **mixed**
* $endDate **mixed**
* $limit **mixed**



### hostsStats

    mixed Severalnines\Rpc\Cluster\Client\StatsClient::hostsStats()





* Visibility: **public**




### __construct

    mixed Severalnines\Rpc\Cluster\Client\AbstractClient::__construct(\Severalnines\Rpc\Cluster\Cluster $cluster, $path)

AbstractClient constructor.



* Visibility: **public**
* This method is defined by [Severalnines\Rpc\Cluster\Client\AbstractClient](Severalnines-Rpc-Cluster-Client-AbstractClient.md)


#### Arguments
* $cluster **[Severalnines\Rpc\Cluster\Cluster](Severalnines-Rpc-Cluster-Cluster.md)**
* $path **mixed**



### getCluster

    \Severalnines\Rpc\Cluster\Cluster Severalnines\Rpc\Cluster\Client\AbstractClient::getCluster()





* Visibility: **protected**
* This method is defined by [Severalnines\Rpc\Cluster\Client\AbstractClient](Severalnines-Rpc-Cluster-Client-AbstractClient.md)




### getRpc

    \Severalnines\Rpc Severalnines\Rpc\Cluster\Client\AbstractClient::getRpc()





* Visibility: **protected**
* This method is defined by [Severalnines\Rpc\Cluster\Client\AbstractClient](Severalnines-Rpc-Cluster-Client-AbstractClient.md)




### getPath

    string Severalnines\Rpc\Cluster\Client\AbstractClient::getPath()





* Visibility: **protected**
* This method is defined by [Severalnines\Rpc\Cluster\Client\AbstractClient](Severalnines-Rpc-Cluster-Client-AbstractClient.md)




### request

    \Severalnines\Rpc\Net\Response Severalnines\Rpc\Cluster\Client\AbstractClient::request(\Severalnines\Rpc\Net\Request $requestData)





* Visibility: **protected**
* This method is defined by [Severalnines\Rpc\Cluster\Client\AbstractClient](Severalnines-Rpc-Cluster-Client-AbstractClient.md)


#### Arguments
* $requestData **[Severalnines\Rpc\Net\Request](Severalnines-Rpc-Net-Request.md)**



### buildUrl

    string Severalnines\Rpc\Cluster\Client\AbstractClient::buildUrl()





* Visibility: **private**
* This method is defined by [Severalnines\Rpc\Cluster\Client\AbstractClient](Severalnines-Rpc-Cluster-Client-AbstractClient.md)



