<?php
namespace Severalnines\Rpc\Cluster\Client;

use Severalnines\Rpc\Net\Request;

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
        return $this->request(new Request('list'));
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
        $request = new Request('set');
        return $this->request(
            $request
                ->set('key', $key)
                ->set('value', $value)
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
        $request = new Request('setLicense');
        return $this->request(
            $request
                ->set('email', $email)
                ->set('company', $company)
                ->set('exp_date', $expires)
                ->set('lickey', $key)
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
        return $this->request(new Request('generateToken'));
    }

}
