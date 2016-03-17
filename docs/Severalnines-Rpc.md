Severalnines\Rpc
===============

Class Rpc




* Class name: Rpc
* Namespace: Severalnines



Constants
----------


### DEFAULT_HOST

    const DEFAULT_HOST = '127.0.0.1'





### DEFAULT_PORT

    const DEFAULT_PORT = 9500





### DEFAULT_USE_SSL

    const DEFAULT_USE_SSL = false





Properties
----------


### $_clusters

    private array<mixed,\Severalnines\Rpc\Cluster\Cluster> $_clusters = array()





* Visibility: **private**


### $_host

    private string $_host = self::DEFAULT_HOST





* Visibility: **private**


### $_port

    private integer $_port = self::DEFAULT_PORT





* Visibility: **private**


### $_useSSL

    private boolean $_useSSL = self::DEFAULT_USE_SSL





* Visibility: **private**


Methods
-------


### __construct

    mixed Severalnines\Rpc::__construct(array $clusters, $host, $port, $useSSL)

Rpc constructor.



* Visibility: **private**


#### Arguments
* $clusters **array**
* $host **mixed**
* $port **mixed**
* $useSSL **mixed**



### init

    \Severalnines\Rpc Severalnines\Rpc::init(array $clusters, $host, $port, $useSSL)

Initialize a new Rpc class



* Visibility: **public**
* This method is **static**.


#### Arguments
* $clusters **array**
* $host **mixed**
* $port **mixed**
* $useSSL **mixed**



### cluster

    \Severalnines\Rpc\Cluster\Cluster Severalnines\Rpc::cluster(integer $clusterId)





* Visibility: **public**


#### Arguments
* $clusterId **integer**



### getHost

    string Severalnines\Rpc::getHost()





* Visibility: **public**




### getPort

    integer Severalnines\Rpc::getPort()





* Visibility: **public**




### isUseSSL

    boolean Severalnines\Rpc::isUseSSL()





* Visibility: **public**



