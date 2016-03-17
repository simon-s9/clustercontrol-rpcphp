<?php
namespace Severalnines\Rpc\Cluster;

use Severalnines\Rpc;
use Severalnines\Rpc\Cluster\Client\OperationalReportsClient;
use Severalnines\Rpc\Cluster\Client\OperationalReportsSchedulesClient;
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
     * Cluster id
     *
     * @var int
     */
    private $_id = null;

    /**
     * Cluster token
     *
     * @var string
     */
    private $_token = null;

    /**
     * Parent Rpc object
     *
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
     * Returns cluster id
     *
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Returns cluster token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->_token;
    }

    /**
     * Returns parent Rpc object
     *
     * @return Rpc
     */
    public function getRpc()
    {
        return $this->_rpc;
    }

    /**
     * Returns Settings api client
     *
     * @return SettingsClient
     */
    public function settings()
    {
        return (new SettingsClient($this, 'settings'));
    }

    /**
     * Returns Processes api client
     *
     * @return ProcessesClient
     */
    public function processes()
    {
        return (new ProcessesClient($this, 'proc'));
    }

    /**
     * @return OperationalReportsClient
     */
    public function operationalReports()
    {
        return (new OperationalReportsClient($this, 'reports'));
    }

    /**
     * @return OperationalReportsSchedulesClient
     */
    public function operationalReportsSchedules()
    {
        return (new OperationalReportsSchedulesClient($this, 'reports'));
    }

}