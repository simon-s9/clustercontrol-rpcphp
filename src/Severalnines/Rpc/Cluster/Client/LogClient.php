<?php
namespace Severalnines\Rpc\Cluster\Client;

use Severalnines\Rpc\Net\Request;

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
        return $this->request(new Request('list'));
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
        $request = new Request('contents');
        return $this->request(
            $request
                ->set('hostname', $hostname)
                ->set('filename', $filename)
                ->set('limit', $limit)
        );
    }

}