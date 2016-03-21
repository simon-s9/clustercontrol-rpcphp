<?php
namespace Severalnines\Rpc\Net;

use JsonSerializable;
use Serializable;
use Severalnines\Rpc\Exception\Exception;

/**
 * Class Request
 *
 * @package Severalnines\Rpc\Net
 */
class Request
    implements Serializable
{

    const KEY_OPERATION = 'operation';
    const KEY_CLUSTER_ID = 'clusterid';
    const KEY_TOKEN = 'token';

    /**
     * Data container
     *
     * @var array
     */
    private $_data = array();

    /**
     * Request constructor.
     *
     * @param string $operation
     */
    public function __construct($operation = null)
    {
        $this->_data[static::KEY_OPERATION] = $operation;
    }

    /**
     * @param $name
     * @param $value
     *
     * @return Request
     */
    public function set($name, $value)
    {
        $this->_data[$name] = $value;
        return $this;
    }

    /**
     * @param $name
     *
     * @return null
     */
    public function get($name)
    {
        if ($this->exists($name)) {
            return $this->_data[$name];
        }
        return null;
    }

    /**
     * @param $name
     *
     * @return bool
     */
    public function exists($name)
    {
        return array_key_exists($name, $this->_data);
    }

    /**
     * @param $name
     *
     * @return Request
     */
    public function remove($name)
    {
        if ($this->exists($name)) {
            unset($this->_data[$name]);
        }
        return $this;
    }

    /**
     * @param $clusterId
     *
     * @return Request
     */
    public function setClusterId($clusterId)
    {
        return $this->set(static::KEY_CLUSTER_ID, $clusterId);
    }

    /**
     * @param $token
     *
     * @return Request
     */
    public function setToken($token)
    {
        return $this->set(static::KEY_TOKEN, $token);
    }

    /**
     * @param $name
     * @param $value
     *
     * @return Request
     */
    public function __set($name, $value)
    {
        return $this->set($name, $value);
    }

    /**
     * @param $name
     *
     * @return null
     */
    public function __get($name)
    {
        return $this->get($name);
    }

    /**
     * @param $name
     *
     * @return bool
     */
    public function __isset($name)
    {
        return $this->exists($name);
    }

    /**
     * @param $name
     *
     * @return Request
     */
    public function __unset($name)
    {
        return $this->remove($name);
    }

    /**
     * @return bool
     */
    private function _operationDefined()
    {
        return array_key_exists(static::KEY_OPERATION, $this->_data);
    }

    /**
     * @throws Exception
     */
    private function _checkOperation()
    {
        if (!$this->_operationDefined() || is_null($this->_data[static::KEY_OPERATION])) {
            throw new Exception(static::KEY_OPERATION . ' is not defined');
        }
    }

    /**
     * String representation of object
     *
     * @link  http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @throws Exception
     * @since 5.1.0
     */
    public function serialize()
    {
        $this->_checkOperation();
        return serialize($this->_data);
    }

    /**
     * Constructs the object
     *
     * @link  http://php.net/manual/en/serializable.unserialize.php
     *
     * @param string $serialized <p>
     *                           The string representation of the object.
     *                           </p>
     *
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
        $this->_data = unserialize($serialized);
    }

    /**
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->_data);
    }

}