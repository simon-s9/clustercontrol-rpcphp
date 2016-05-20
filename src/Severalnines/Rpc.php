<?php
namespace Severalnines;

use Severalnines\Rpc\Cluster\Cluster;
use Severalnines\Rpc\Clusters\Clusters;
use Severalnines\Rpc\Exception\Exception;

/**
 * Class Rpc
 *
 * @package Severalnines
 */
class Rpc
{

    const DEFAULT_HOST = '127.0.0.1';
    const DEFAULT_PORT = 9500;
    const DEFAULT_USE_SSL = false;

    /**
     * @var Rpc\Cluster\Cluster[]
     */
    private $_clusters = array();

    /**
     * @var string
     */
    private $_host = self::DEFAULT_HOST;

    /**
     * @var int
     */
    private $_port = self::DEFAULT_PORT;

    /**
     * @var bool
     */
    private $_useSSL = self::DEFAULT_USE_SSL;

    /**
     * Rpc constructor.
     *
     * @param array $clusters
     * @param       string [$host]
     * @param       int    [$port]
     * @param        [$useSSL]
     */
    private function __construct(array $clusters, $host, $port, $useSSL)
    {
        if (!is_null($host)) {
            $this->_host = $host;
        }
        if (!is_null($port)) {
            $this->_port = $port;
        }
        if (!is_null($useSSL)) {
            $this->_useSSL = $useSSL;
        }
        foreach ($clusters as $id => $token) {
            $this->_clusters[$id] = new Cluster($id, $token, $this);
        }
    }

    /**
     * Initialize a new Rpc class
     *
     * @param array $clusters
     * @param       string [$host]
     * @param       int    [$port]
     * @param       bool   [$useSSL]
     *
     * @return Rpc
     */
    public static function init(array $clusters, $host = null, $port = null, $useSSL = null)
    {
        return new static($clusters, $host, $port, $useSSL);
    }

    /**
     * @param int $clusterId
     *
     * @return Cluster
     * @throws Exception
     */
    public function cluster($clusterId)
    {
        if (!array_key_exists($clusterId, $this->_clusters)) {
            throw new Exception("Cluster {$clusterId} is not defined");
        }
        return $this->_clusters[$clusterId];
    }

    /**
     * @return Clusters
     */
    public function clusters()
    {
        $token = null;
        if (array_key_exists(0, $this->_clusters)) {
            $token = $this->_clusters[0]->getToken();
        }
        return new Clusters($this, $token);
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->_host;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->_port;
    }

    /**
     * @return boolean
     */
    public function isUseSSL()
    {
        return $this->_useSSL;
    }

}
