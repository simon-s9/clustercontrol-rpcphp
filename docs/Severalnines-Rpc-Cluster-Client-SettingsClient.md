Severalnines\Rpc\Cluster\Client\SettingsClient
===============

Class SettingsClient




* Class name: SettingsClient
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


### get

    \Severalnines\Rpc\Net\Response Severalnines\Rpc\Cluster\Client\SettingsClient::get()





* Visibility: **public**




### set

    \Severalnines\Rpc\Net\Response Severalnines\Rpc\Cluster\Client\SettingsClient::set($key, $value)





* Visibility: **public**


#### Arguments
* $key **mixed**
* $value **mixed**



### setLicense

    \Severalnines\Rpc\Net\Response Severalnines\Rpc\Cluster\Client\SettingsClient::setLicense($email, $company, $expires, $key)





* Visibility: **public**


#### Arguments
* $email **mixed**
* $company **mixed**
* $expires **mixed**
* $key **mixed**



### generateToken

    \Severalnines\Rpc\Net\Response Severalnines\Rpc\Cluster\Client\SettingsClient::generateToken()





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



