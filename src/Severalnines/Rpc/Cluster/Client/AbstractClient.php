<?php
namespace Severalnines\Rpc\Cluster\Client;

use Curl\Curl;

use Severalnines\Rpc\Cluster\Cluster;
use Severalnines\Rpc\Net\Request;
use Severalnines\Rpc\Net\Response;
use Severalnines\Rpc\Exception\Exception;

/**
 * Class AbstractClient
 *
 * @package Severalnines\Rpc
 */
abstract class AbstractClient
{

    /**
     * @var Cluster
     */
    private $_cluster = null;

    /**
     * @var string
     */
    private $_path = null;

    /**
     * AbstractClient constructor.
     *
     * @param Cluster $cluster
     * @param         $path
     */
    public function __construct(Cluster $cluster, $path)
    {
        $this->_cluster = $cluster;
        $this->_path = $path;
    }

    /**
     * @return Cluster
     */
    protected function getCluster()
    {
        return $this->_cluster;
    }

    /**
     * @return \Severalnines\Rpc
     */
    protected function getRpc(){
        return $this->getCluster()->getRpc();
    }

    /**
     * @return string
     */
    protected function getPath()
    {
        return $this->_path;
    }

    /**
     * @param Request $requestData
     *
     * @return Response
     * @throws Exception
     */
    protected function request(Request $requestData)
    {
        $requestData
            ->setClusterId($this->getCluster()->getId())
            ->setToken($this->getCluster()->getToken());
        $request = new Curl();
        $request->setHeader('Content-Type', 'application/json');
        $request->post($this->buildUrl(), $requestData->toJson());
        if ($request->curl_error) {
            throw new Exception('Failed to fetch data: ' . $request->curl_error_message, $request->curl_error_code);
        }
        return new Response(json_decode($request->response, true));
    }

    /**
     * @return string
     */
    private function buildUrl()
    {
        $url = 'http';
        if ($this->getRpc()->isUseSSL()) {
            $url = 'https';
        }
        $url .= '://' . $this->getRpc()->getHost()
            . ':' . $this->getRpc()->getPort()
            . '/' . $this->getCluster()->getId()
            . '/' . $this->getPath();
        return $url;
    }

}
