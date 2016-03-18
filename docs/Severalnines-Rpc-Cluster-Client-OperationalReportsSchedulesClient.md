Severalnines\Rpc\Cluster\Client\OperationalReportsSchedulesClient
===============

Class OperationalReportsClient




* Class name: OperationalReportsSchedulesClient
* Namespace: Severalnines\Rpc\Cluster\Client
* Parent class: [Severalnines\Rpc\Cluster\Client\AbstractClient](Severalnines-Rpc-Cluster-Client-AbstractClient.md)



Constants
----------


### REPORT_DEFAULT

    const REPORT_DEFAULT = 'default'





### REPORT_AVAILABILITY

    const REPORT_AVAILABILITY = 'availability'





### REPORT_BACKUP

    const REPORT_BACKUP = 'backup'





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

    \Severalnines\Rpc\Net\Response Severalnines\Rpc\Cluster\Client\OperationalReportsSchedulesClient::get()





* Visibility: **public**




### schedule

    \Severalnines\Rpc\Net\Response Severalnines\Rpc\Cluster\Client\OperationalReportsSchedulesClient::schedule(string $reportType, $userName, $schedule, array $recipients)





* Visibility: **public**


#### Arguments
* $reportType **string**
* $userName **mixed**
* $schedule **mixed**
* $recipients **array**



### delete

    \Severalnines\Rpc\Net\Response Severalnines\Rpc\Cluster\Client\OperationalReportsSchedulesClient::delete($reportId)





* Visibility: **public**


#### Arguments
* $reportId **mixed**



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



