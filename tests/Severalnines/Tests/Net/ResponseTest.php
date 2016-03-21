<?php
namespace Severalnines\Tests\Net;

use Severalnines\Rpc\Net\Response;
use Severalnines\Tests\Test;

/**
 * Class ResponseTest
 *
 * @package Severalnines\Tests\Net
 */
class ResponseTest
    extends Test
{

    /**
     * @var string
     */
    protected $goodJson
        = <<<JSON
{
    "cc_timestamp": 1458546481,
    "data": [
    {
        "clusterid": 1,
        "cmdline": "/usr/bin/garbd --cfg /etc/garbd.cnf  --daemon",
        "distribution":
        {
            "codename": "trusty",
            "name": "Ubuntu",
            "release": "14.04"
        },
        "hostId": 12,
        "hostname": "10.0.0.212",
        "hoststatus": "CmonHostRecovery",
        "ip": "10.0.0.212",
        "lastseen": 1458546424,
        "nodetype": "garbd",
        "pid": 2851,
        "pingstatus": 1,
        "pingtime": 22,
        "port": 4567,
        "sshfailcount": 0,
        "status": 12,
        "timestamp": 1458546427,
        "wallclock": 1458546427,
        "wallclocktimestamp": 1458546427
    },
    {
        "clusterid": 1,
        "configfile": [ "/etc/mysql/my.cnf" ],
        "connected": true,
        "datadir": "/var/lib/mysql/",
        "description": "",
        "distribution":
        {
            "codename": "trusty",
            "name": "Ubuntu",
            "release": "14.04"
        },
        "elapsedtime": 0,
        "errorcode": 0,
        "errormsg": "",
        "galera":
        {
            "certsdepsdistance": 10.9304,
            "clustername": "my_wsrep_cluster",
            "clustersize": 2,
            "flowctrlpaused": 0,
            "flowctrlrecv": 0,
            "flowctrlsent": 0,
            "galerastatus": "Primary",
            "inactivetimeout": 15,
            "lastcommitted": 152808,
            "localrecvqueueavg": 0.001643,
            "localsendqueueavg": 0.011721,
            "localstatus": 4,
            "localstatusstr": "Synced",
            "ready": "ON",
            "segmentid": 0,
            "socketssl": false
        },
        "hostId": 9,
        "hostname": "10.0.0.211",
        "hoststatus": "CmonHostOnline",
        "ip": "10.0.0.211",
        "isgalera": true,
        "lastseen": 1458546481,
        "logfile": "/var/log/mysqld.log",
        "message": "Up and running.",
        "mysqlstatus": 0,
        "nodeid": 9,
        "nodetype": "galera",
        "performance_schema": true,
        "pid": 1917,
        "pingstatus": 1,
        "pingtime": 293,
        "port": 3306,
        "readonly": false,
        "replication_slave":
        {
            "linkstatus": 7
        },
        "role": "none",
        "serverid": 0,
        "slaves": [  ],
        "sshfailcount": 0,
        "status": 0,
        "timestamp": 1458546481,
        "uptime": 11193700,
        "version": "5.6.25-73.1-56",
        "wallclock": 1458546427,
        "wallclocktimestamp": 1458546427
    },
    {
        "clusterid": 1,
        "configfile": "/etc/cmon.d/cmon_1.cnf",
        "connected": true,
        "distribution":
        {
            "codename": "trusty",
            "name": "Ubuntu",
            "release": "14.04"
        },
        "hostId": 12,
        "hostname": "10.0.0.212",
        "hoststatus": "CmonHostRecovery",
        "ip": "10.0.0.212",
        "lastseen": 1458546424,
        "logfile": "/var/log/cmon_1.log",
        "nodetype": "controller",
        "pid": 1637,
        "pingstatus": 1,
        "pingtime": 22,
        "port": -1,
        "role": "controller",
        "sshfailcount": 0,
        "status": 12,
        "timestamp": 1458546427,
        "version": "1.3.0.1179",
        "wallclock": 1458546427,
        "wallclocktimestamp": 1458546427
    } ],
    "requestStatus": "ok",
    "total": 3
}
JSON;
    /**
     * @var string
     */
    protected $badJson
        = <<<JSON
{
    "cc_timestamp": 1458546481,
    "data": [ ],
    "requestStatus": "error",
    "errorString": "Bad request",
    "total": 0
}
JSON;

    protected $clustersJson
        = <<<JSON
{
    "cc_timestamp": 1458547657,
    "clusters": [
    {
        "clusterAutorecovery": true,
        "configFile": "/etc/cmon.d/cmon_1.cnf",
        "id": 1,
        "logFile": "/var/log/cmon_1.log",
        "name": "cluster_1",
        "nodeAutorecovery": true,
        "running": true,
        "status": 2,
        "statusText": "Cluster started.",
        "type": "galera"
    },
    {
        "clusterAutorecovery": true,
        "configFile": "/etc/cmon.d/cmon_2.cnf",
        "id": 2,
        "logFile": "/var/log/cmon_2.log",
        "name": "cluster_2",
        "nodeAutorecovery": true,
        "running": true,
        "status": 2,
        "statusText": "Cluster started.",
        "type": "replication"
    },
    {
        "clusterAutorecovery": true,
        "configFile": "/etc/cmon.d/cmon_3.cnf",
        "id": 3,
        "logFile": "/var/log/cmon_3.log",
        "name": "cluster_3",
        "nodeAutorecovery": true,
        "running": true,
        "status": 4,
        "statusText": "Cluster degraded.",
        "type": "mongodb"
    },
    {
        "clusterAutorecovery": true,
        "configFile": "/etc/cmon.d/cmon_4.cnf",
        "id": 4,
        "logFile": "/var/log/cmon_4.log",
        "name": "cluster_4",
        "nodeAutorecovery": true,
        "running": true,
        "status": 2,
        "statusText": "Cluster started.",
        "type": "postgresql_single"
    },
    {
        "clusterAutorecovery": true,
        "configFile": "/etc/cmon.d/cmon_5.cnf",
        "id": 5,
        "logFile": "/var/log/cmon_5.log",
        "name": "cluster_5",
        "nodeAutorecovery": true,
        "running": true,
        "status": 2,
        "statusText": "Cluster started.",
        "type": "mysql_single"
    } ],
    "info":
    {
        "hasLicense": true,
        "licenseExpires": 1745,
        "licenseStatus": "License found.",
        "version": "1.3.0.1179"
    },
    "requestStatus": "ok"
}
JSON;


    /**
     * @return array|null
     */
    protected function getGoodResponseData()
    {
        return json_decode($this->goodJson, true);
    }

    /**
     * @return array|null
     */
    protected function getBadResponseData()
    {
        return json_decode($this->badJson, true);
    }

    protected function getClustersResponseData()
    {
        return json_decode($this->clustersJson, true);
    }

    /**
     * @expectedException \Severalnines\Rpc\Exception\Exception
     */
    public function testConstructor()
    {
        $response = new Response();
        $response = new Response(array());
    }

    /**
     *
     */
    public function testGetStatus()
    {
        $response = new Response($this->getGoodResponseData());
        $this->assertEquals($response->getStatus(), 'ok');
        $response = new Response($this->getBadResponseData());
        $this->assertEquals($response->getStatus(), 'error');
    }

    /**
     *
     */
    public function testGetData()
    {
        $response = new Response($this->getGoodResponseData());
        $this->assertNotEmpty($response->getData());
        $response = new Response($this->getBadResponseData());
        $this->assertEmpty($response->getData());
    }

    /**
     *
     */
    public function testGetClusters()
    {
        $response = new Response($this->getClustersResponseData());
        $this->assertTrue($response->ok());
        $this->assertNotEmpty($response->getClusters());
    }

    /**
     *
     */
    public function testGetTimestamp()
    {
        $response = new Response($this->getGoodResponseData());
        $this->assertEquals($response->getTimestamp(), 1458546481);
    }

    /**
     *
     */
    public function testGetTotal()
    {
        $response = new Response($this->getGoodResponseData());
        $this->assertEquals($response->getTotal(), 3);
    }

    /**
     *
     */
    public function testGetError()
    {
        $response = new Response($this->getGoodResponseData());
        $this->assertTrue($response->ok());
        $this->assertNull($response->getError());
        $response = new Response($this->getBadResponseData());
        $this->assertFalse($response->ok());
        $this->assertNotNull($response->getError());
    }

}