<?php
namespace Severalnines\Rpc\Net;

use Severalnines\Rpc\Exception\Exception;

class Response
{

    /**
     * @var string
     */
    private $_status = '';

    /**
     * @var array
     */
    private $_data = array();

    /**
     * @var array
     */
    private $_clusters = array();

    /**
     * @var int
     */
    private $_timestamp = null;

    /**
     * @var int
     */
    private $_total = 0;

    /**
     * Response constructor.
     *
     * @param array $rpcResponse
     *
     * @throws Exception
     */
    public function __construct(array $rpcResponse)
    {
        if (!is_array($rpcResponse)) {
            throw new Exception('Failed to parse RPC response');
        }
        if (array_key_exists('requestStatus', $rpcResponse)) {
            $this->_status = $rpcResponse['requestStatus'];
        }
        if (array_key_exists('data', $rpcResponse)) {
            $this->_data = $rpcResponse['data'];
        }
        if (array_key_exists('clusters', $rpcResponse)) {
            $this->_clusters = $rpcResponse['clusters'];
        }
        if (array_key_exists('cc_timestamp', $rpcResponse)) {
            $this->_timestamp = $rpcResponse['cc_timestamp'];
        }
        if (array_key_exists('total', $rpcResponse)) {
            $this->_total = $rpcResponse['total'];
        }
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * @return array
     */
    public function getClusters()
    {
        return $this->_clusters;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->_timestamp;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->_total;
    }

    /**
     * @return bool
     */
    public function ok()
    {
        return $this->getStatus() == 'ok';
    }

}