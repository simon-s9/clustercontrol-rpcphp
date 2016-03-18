<?php
namespace Severalnines\Rpc\Cluster\Client;

use Severalnines\Rpc\Net\Request;

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
        return $this->request(new Request('top'));
    }

    /**
     * @link http://54.248.83.112/cmon-docs/current/ccrpc.html#managedprocesses
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function managedProcesses()
    {
        return $this->request(new Request('managedProcesses'));
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
        $request = new Request('toggleManaged');
        return $this->request(
            $request
                ->set('hostname', $hostname)
                ->set('executable', $executable)
                ->set('managed', $managed)
        );
    }

}