<?php
namespace Severalnines\Rpc\Clusters;

use Curl\Curl;
use Severalnines\Rpc;
use Severalnines\Rpc\Exception\Exception;
use Severalnines\Rpc\Net\Request;
use Severalnines\Rpc\Net\Response;

class Clusters
{

    /**
     * @var null|Rpc
     */
    private $_rpc = null;

    /**
     * @var null|String
     */
    private $_token = null;

    /**
     * Clusters constructor.
     *
     * @param Rpc  $rpc
     * @param null $token
     */
    public function __construct(Rpc $rpc, $token = null)
    {
        $this->_rpc = $rpc;
        $this->_token = $token;
    }

    /**
     * @return null|Rpc
     */
    protected function getRpc()
    {
        return $this->_rpc;
    }

    /**
     * @return null|String
     */
    protected function getToken()
    {
        return $this->_token;
    }

    /**
     * @return Response
     * @throws Exception
     */
    protected function request()
    {
        $requestData = new Request();
        if (!is_null($this->getToken())) {
            $requestData->setToken($this->getToken());
        }
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
    protected function buildUrl()
    {
        $url = 'http';
        if ($this->getRpc()->isUseSSL()) {
            $url = 'https';
        }
        $url .= '://' . $this->getRpc()->getHost()
            . ':' . $this->getRpc()->getPort()
            . '/0/clusters';
        return $url;
    }

    /**
     * @return Response
     * @throws Exception
     */
    public function all()
    {
        return $this->request();
    }

}