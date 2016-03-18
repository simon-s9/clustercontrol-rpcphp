Severalnines\Rpc\Cluster\Clien\OperationalReportsClient
===============

Class OperationalReportsClient




* Class name: OperationalReportsClient
* Namespace: Severalnines\Rpc\Cluster\Clien
* Parent class: Severalnines\Rpc\Cluster\Clien\AbstractClient



Constants
----------


### REPORT_DEFAULT

    const REPORT_DEFAULT = 'default'





### REPORT_AVAILABILITY

    const REPORT_AVAILABILITY = 'availability'





### REPORT_BACKUP

    const REPORT_BACKUP = 'backup'







Methods
-------


### get

    \Severalnines\Rpc\Net\Response Severalnines\Rpc\Cluster\Clien\OperationalReportsClient::get()





* Visibility: **public**




### generate

    \Severalnines\Rpc\Net\Response Severalnines\Rpc\Cluster\Clien\OperationalReportsClient::generate(string $reportType, $userName, array $recipients)





* Visibility: **public**


#### Arguments
* $reportType **string**
* $userName **mixed**
* $recipients **array**



### delete

    \Severalnines\Rpc\Net\Response Severalnines\Rpc\Cluster\Clien\OperationalReportsClient::delete($reportId)





* Visibility: **public**


#### Arguments
* $reportId **mixed**


