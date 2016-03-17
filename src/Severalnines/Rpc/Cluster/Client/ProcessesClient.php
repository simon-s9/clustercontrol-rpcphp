<?php
namespace Severalnines\Rpc\Cluster\Client;

/**
 * Class ProcessesClient
 *
 * @package Severalnines\Rpc\Cluster\Client
 */
class ProcessesClient
    extends AbstractClient
{

    /**
     * @link http://54.248.83.112/cmon-docs/current/ccrpc.html#top
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function top()
    {
        return $this->request(
            array(
                'operation' => 'top',
            )
        );
    }

    /**
     * @link http://54.248.83.112/cmon-docs/current/ccrpc.html#managedprocesses
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function managedProcesses()
    {
        return $this->request(
            array(
                'operation' => 'managedProcesses',
            )
        );
    }

    /**
     * @link http://54.248.83.112/cmon-docs/current/ccrpc.html#toggleManaged
     *
     * @param $hostname
     * @param $executable
     * @param $managed
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function toggleManaged($hostname, $executable, $managed)
    {
        return $this->request(
            array(
                'operation'  => 'toggleManaged',
                'hostname'   => $hostname,
                'executable' => $executable,
                'managed'    => $managed,
            )
        );
    }

}