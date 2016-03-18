<?php
namespace Severalnines\Rpc\Cluster\Client;

use Severalnines\Rpc\Net\Request;

/**
 * Class Stats
 *
 * @package Severalnines\Rpc\Cluster\Client
 */
class StatsClient
    extends AbstractClient
{

    public function setHost($hostName, $port, array $properties = array())
    {
        $request = new Request('setHost');
        $this->request(
            $request
                ->set('hostname', $hostName)
                ->set('port', $port)
                ->set('properties', $properties)
        );
    }

    public function getHosts()
    {
        return $this->request(new Request('getHosts'));
    }

    public function cpuInfo($hostId)
    {
        $request = new Request('cpuinfo');
        return $this->request($request->set('hostId', $hostId));
    }

    public function getStatByName($name, $hostId = null, $startDate = null, $limit = null)
    {
        $request = new Request('getStatByName');
        $request->set('name', $name);
        if (!is_null($hostId)) {
            $request->set('hostId', $hostId);
        }
        if (!is_null($startDate)) {
            $request->set('startdate', $startDate);
        }
        if (!is_null($limit)) {
            $request->set('limit', $limit);
        }
        return $this->request($request);
    }

    public function memoryStatistics($hostId = null, $startDate = null, $limit = null)
    {
        return $this->getStatByName('memorystat', $hostId, $startDate, $limit);
    }

    public function distStatistics($hostId = null, $startDate = null, $limit = null)
    {
        return $this->getStatByName('diskstat', $hostId, $startDate, $limit);
    }

    public function cpuStatistics($hostId = null, $startDate = null, $limit = null)
    {
        return $this->getStatByName('cpustat', $hostId, $startDate, $limit);
    }

    public function networkStatistics($hostId = null, $startDate = null, $limit = null)
    {
        return $this->getStatByName('netstat', $hostId, $startDate, $limit);
    }

    public function tcpNetworkStatistics($hostId = null, $startDate = null, $limit = null)
    {
        return $this->getStatByName('tcpStat', $hostId, $startDate, $limit);
    }

    public function sqlServerStatistics($startDate = null, $limit = null)
    {
        return $this->getStatByName('sqlstat', null, $startDate, $limit);
    }

    public function databaseStatistics($startDate = null, $limit = null)
    {
        return $this->getStatByName('dbstat', null, $startDate, $limit);
    }

    public function processList()
    {
        return $this->request(new Request('processes'));
    }

    public function variables($hostId = null, array $variables = null)
    {
        $request = new Request('variables');
        if (!is_null($hostId)) {
            $request->set('hostId', $hostId);
        }
        if (!is_null($variables)) {
            $request->set('variables', $variables);
        }
        return $this->request($request);
    }

    public function statuses($hostId = null, array $keys = null)
    {
        $request = new Request('getdbstatus');
        if (!is_null($hostId)) {
            $request->set('hostId', $hostId);
        }
        if (!is_null($keys)) {
            $request->set('keys', $keys);
        }
        return $this->request($request);
    }

    public function deadlock($startDate = null, $endDate = null, $limit)
    {
        $request = new Request('txdeadlock');
        if (!is_null($startDate)) {
            $request->set('startdate', $startDate);
        }
        if (!is_null($endDate)) {
            $request->set('enddate', $endDate);
        }
        if (!is_null($limit)) {
            $request->set('limit', $limit);
        }
        return $this->request($request);
    }

    public function hostsStats()
    {
        return $this->request(new Request('hostsStats'));
    }

}