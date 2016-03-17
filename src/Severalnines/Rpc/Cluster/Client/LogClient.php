<?php
namespace Severalnines\Rpc\Cluster\Client;

/**
 * Class LogClient
 *
 * @package Severalnines\Rpc\Cluster\Client
 */
class LogClient
    extends AbstractClient
{

    /**
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function get()
    {
        return $this->request(
            array(
                'operation' => 'list',
            )
        );
    }

    /**
     * @param     $hostname
     * @param     $filename
     * @param int $limit
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function contents($hostname, $filename, $limit = 5)
    {
        return $this->request(
            array(
                'operation' => 'contents',
                'hostname'  => $hostname,
                'filename'  => $filename,
                'limit'     => $limit,
            )
        );
    }

}