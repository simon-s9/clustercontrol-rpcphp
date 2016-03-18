Severalnines\Rpc\Net\Request
===============

Class Request




* Class name: Request
* Namespace: Severalnines\Rpc\Net
* This class implements: JsonSerializable, Serializable


Constants
----------


### KEY_OPERATION

    const KEY_OPERATION = 'operation'





### KEY_CLUSTER_ID

    const KEY_CLUSTER_ID = 'clusterid'





### KEY_TOKEN

    const KEY_TOKEN = 'token'





Properties
----------


### $_data

    private array $_data = array()

Data container



* Visibility: **private**


Methods
-------


### __construct

    mixed Severalnines\Rpc\Net\Request::__construct(string $operation)

Request constructor.



* Visibility: **public**


#### Arguments
* $operation **string**



### set

    \Severalnines\Rpc\Net\Request Severalnines\Rpc\Net\Request::set($name, $value)





* Visibility: **public**


#### Arguments
* $name **mixed**
* $value **mixed**



### get

    null Severalnines\Rpc\Net\Request::get($name)





* Visibility: **public**


#### Arguments
* $name **mixed**



### exists

    boolean Severalnines\Rpc\Net\Request::exists($name)





* Visibility: **public**


#### Arguments
* $name **mixed**



### remove

    \Severalnines\Rpc\Net\Request Severalnines\Rpc\Net\Request::remove($name)





* Visibility: **public**


#### Arguments
* $name **mixed**



### setClusterId

    \Severalnines\Rpc\Net\Request Severalnines\Rpc\Net\Request::setClusterId($clusterId)





* Visibility: **public**


#### Arguments
* $clusterId **mixed**



### setToken

    \Severalnines\Rpc\Net\Request Severalnines\Rpc\Net\Request::setToken($token)





* Visibility: **public**


#### Arguments
* $token **mixed**



### __set

    \Severalnines\Rpc\Net\Request Severalnines\Rpc\Net\Request::__set($name, $value)





* Visibility: **public**


#### Arguments
* $name **mixed**
* $value **mixed**



### __get

    null Severalnines\Rpc\Net\Request::__get($name)





* Visibility: **public**


#### Arguments
* $name **mixed**



### __isset

    boolean Severalnines\Rpc\Net\Request::__isset($name)





* Visibility: **public**


#### Arguments
* $name **mixed**



### __unset

    \Severalnines\Rpc\Net\Request Severalnines\Rpc\Net\Request::__unset($name)





* Visibility: **public**


#### Arguments
* $name **mixed**



### _operationDefined

    boolean Severalnines\Rpc\Net\Request::_operationDefined()





* Visibility: **private**




### _checkOperation

    mixed Severalnines\Rpc\Net\Request::_checkOperation()





* Visibility: **private**




### serialize

    string Severalnines\Rpc\Net\Request::serialize()

String representation of object



* Visibility: **public**




### unserialize

    void Severalnines\Rpc\Net\Request::unserialize(string $serialized)

Constructs the object



* Visibility: **public**


#### Arguments
* $serialized **string** - &lt;p&gt;
                          The string representation of the object.
                          &lt;/p&gt;



### jsonSerialize

    mixed Severalnines\Rpc\Net\Request::jsonSerialize()

Specify data which should be serialized to JSON



* Visibility: **public**



