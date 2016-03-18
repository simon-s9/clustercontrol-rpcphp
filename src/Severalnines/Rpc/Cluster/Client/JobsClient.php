<?php
namespace Severalnines\Rpc\Cluster\Client;

use Severalnines\Rpc\Net\Request;

/**
 * Class JobsClient
 *
 * @package Severalnines\Rpc\Cluster\Client
 */
class JobsClient
    extends AbstractClient
{

    /**
     * @param int $limit
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function get($limit = 5)
    {
        $request = new Request('getJobs');
        return $this->request($request->set('limit', $limit));
    }

    /**
     * @param       $ip
     * @param       $userName
     * @param       $userId
     * @param array $job
     *
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function create($ip, $userName, $userId, array $job)
    {
        $request = new Request('createJob');
        $this->request(
            $request
                ->set('ip', $ip)
                ->set('username', $userName)
                ->set('userId', $userId)
                ->set('job', $job)
        );
    }

    /**
     * @param $id
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function status($id)
    {
        $request = new Request('getStatus');
        return $this->request($request->set('jobId', $id));
    }

    /**
     * @param $id
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function messages($id)
    {
        $request = new Request('getJobMessages');
        return $this->request($request->set('jobId', $id));
    }

}