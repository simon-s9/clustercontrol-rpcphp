<?php
namespace Severalnines\Rpc\Cluster\Client;

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
        return $this->request(
            array(
                'operation' => 'getJobs',
                'limit'     => $limit,
            )
        );
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
        $this->request(
            array(
                'operation' => 'createJob',
                'ip'        => $ip,
                'username'  => $userName,
                'userId'    => $userId,
                'job'       => $job,
            )
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
        return $this->request(
            array(
                'operation' => 'getStatus',
                'jobId'     => $id,
            )
        );
    }

    /**
     * @param $id
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function messages($id)
    {
        return $this->request(
            array(
                'operation' => 'getJobMessages',
                'jobId'     => $id,
            )
        );
    }

}