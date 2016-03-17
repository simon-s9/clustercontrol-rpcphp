Severalnines\Rpc\Net\Response
===============






* Class name: Response
* Namespace: Severalnines\Rpc\Net





Properties
----------


### $_status

    private string $_status = ''





* Visibility: **private**


### $_data

    private array $_data = array()





* Visibility: **private**


### $_clusters

    private array $_clusters = array()





* Visibility: **private**


### $_timestamp

    private integer $_timestamp = null





* Visibility: **private**


### $_total

    private integer $_total





* Visibility: **private**


Methods
-------


### __construct

    mixed Severalnines\Rpc\Net\Response::__construct(array $rpcResponse)

Response constructor.



* Visibility: **public**


#### Arguments
* $rpcResponse **array**



### getStatus

    string Severalnines\Rpc\Net\Response::getStatus()





* Visibility: **public**




### getData

    array Severalnines\Rpc\Net\Response::getData()





* Visibility: **public**




### getClusters

    array Severalnines\Rpc\Net\Response::getClusters()





* Visibility: **public**




### getTimestamp

    integer Severalnines\Rpc\Net\Response::getTimestamp()





* Visibility: **public**




### getTotal

    integer Severalnines\Rpc\Net\Response::getTotal()





* Visibility: **public**




### ok

    boolean Severalnines\Rpc\Net\Response::ok()





* Visibility: **public**



