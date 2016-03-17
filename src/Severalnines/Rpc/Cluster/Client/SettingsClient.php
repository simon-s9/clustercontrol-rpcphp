<?php
namespace Severalnines\Rpc\Cluster\Client;

/**
 * Class SettingsClient
 *
 * @package Severalnines\Rpc
 */
class SettingsClient
    extends AbstractClient
{

    /**
     * @link http://54.248.83.112/cmon-docs/current/ccrpc.html#list
     *
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
     * @link http://54.248.83.112/cmon-docs/current/ccrpc.html#set
     *
     * @param $key
     * @param $value
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function set($key, $value)
    {
        return $this->request(
            array(
                'operation' => 'set',
                'key'       => $key,
                'value'     => $value,
            )
        );
    }

    /**
     * @link http://54.248.83.112/cmon-docs/current/ccrpc.html#setlicense
     *
     * @param $email
     * @param $company
     * @param $expires
     * @param $key
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function setLicense($email, $company, $expires, $key)
    {
        return $this->request(
            array(
                'operation' => 'setLicense',
                'email'     => $email,
                'company'   => $company,
                'exp_date'  => $expires,
                'lickey'    => $key,
            )
        );
    }

    /**
     * @link http://54.248.83.112/cmon-docs/current/ccrpc.html#setlicense
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function generateToken()
    {
        return $this->request(
            array(
                'operation' => 'generateToken',
            )
        );
    }

}
