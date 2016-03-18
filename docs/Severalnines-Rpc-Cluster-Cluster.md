Severalnines\Rpc\Cluster\Cluster
===============

Class Cluster




* Class name: Cluster
* Namespace: Severalnines\Rpc\Cluster





Properties
----------


### $_id

    private integer $_id = null

Cluster id



* Visibility: **private**


### $_token

    private string $_token = null

Cluster token



* Visibility: **private**


### $_rpc

    private \Severalnines\Rpc $_rpc = null

Parent Rpc object



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

Returns cluster id



* Visibility: **public**




### getToken

    string Severalnines\Rpc\Cluster\Cluster::getToken()

Returns cluster token



* Visibility: **public**




### getRpc

    \Severalnines\Rpc Severalnines\Rpc\Cluster\Cluster::getRpc()

Returns parent Rpc object



* Visibility: **public**




### settings

    \Severalnines\Rpc\Cluster\Client\SettingsClient Severalnines\Rpc\Cluster\Cluster::settings()

Returns Settings api client



* Visibility: **public**




### processes

    \Severalnines\Rpc\Cluster\Client\ProcessesClient Severalnines\Rpc\Cluster\Cluster::processes()

Returns Processes api client



* Visibility: **public**




### operationalReports

    \Severalnines\Rpc\Cluster\Client\OperationalReportsClient Severalnines\Rpc\Cluster\Cluster::operationalReports()





* Visibility: **public**




### operationalReportsSchedules

    \Severalnines\Rpc\Cluster\Client\OperationalReportsSchedulesClient Severalnines\Rpc\Cluster\Cluster::operationalReportsSchedules()





* Visibility: **public**




### log

    \Severalnines\Rpc\Cluster\Client\LogClient Severalnines\Rpc\Cluster\Cluster::log()





* Visibility: **public**




### jobs

    \Severalnines\Rpc\Cluster\Client\JobsClient Severalnines\Rpc\Cluster\Cluster::jobs()





* Visibility: **public**




### stat

    \Severalnines\Rpc\Cluster\Client\StatsClient Severalnines\Rpc\Cluster\Cluster::stat()





* Visibility: **public**



