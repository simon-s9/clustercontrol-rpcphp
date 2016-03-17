<?php
namespace Severalnines\Rpc\Cluster;

use Severalnines\Rpc;
use Severalnines\Rpc\Cluster\Client\ProcessesClient;
use Severalnines\Rpc\Cluster\Client\SettingsClient;

/**
 * Class Cluster
 *
 * @package Severalnines\Rpc\Cluster
 */
class Cluster
{

    /**
     * @var int
     */
    private $_id = null;

    /**
     * @var string
     */
    private $_token = null;

    /**
     * @var Rpc
     */
    private $_rpc = null;

    /**
     * Cluster constructor.
     *
     * @param     $id
     * @param     $token
     * @param Rpc $rpc
     */
    public function __construct($id, $token, Rpc $rpc)
    {
        $this->_id = $id;
        $this->_token = $token;
        $this->_rpc = $rpc;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->_token;
    }

    /**
     * @return Rpc
     */
    public function getRpc()
    {
        return $this->_rpc;
    }

    /**
     * @return SettingsClient
     */
    public function settings()
    {
        return (new SettingsClient($this, 'settings'));
    }

    /**
     * @return ProcessesClient
     */
    public function processes()
    {
        return (new ProcessesClient($this, 'proc'));
    }

}