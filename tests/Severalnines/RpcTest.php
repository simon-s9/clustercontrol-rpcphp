<?php
namespace Severalnines\Tests;

use Severalnines\Rpc;
use Severalnines\Rpc\Exception\Exception;

/**
 * Class RpcTest
 *
 * @package Severalnines\Tests
 */
class RpcTest
    extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testInitialize()
    {
        $rpc = Rpc::init(array());
        $this->assertInstanceOf('Severalnines\\Rpc', $rpc);
    }

    /**
     *
     */
    public function testHost()
    {
        $rpc = Rpc::init(array());
        $this->assertEquals('127.0.0.1', $rpc->getHost());
        $rpc = Rpc::init(array(), '192.168.1.1');
        $this->assertEquals('192.168.1.1', $rpc->getHost());
    }

    /**
     *
     */
    public function testPort()
    {
        $rpc = Rpc::init(array());
        $this->assertEquals(9500, $rpc->getPort());
        $rpc = Rpc::init(array(), null, 9600);
        $this->assertEquals(9600, $rpc->getPort());
    }

    /**
     *
     */
    public function testSsl()
    {
        $rpc = Rpc::init(array());
        $this->assertEquals(false, $rpc->isUseSSL());
        $rpc = Rpc::init(array(), null, null, true);
        $this->assertEquals(true, $rpc->isUseSSL());
    }

    /**
     * @throws Exception
     */
    public function testCluster()
    {
        $rpc = Rpc::init(
            array(
                0 => 'abcdef',
                1 => 'ghijkl'
            )
        );
        $this->assertInstanceOf('Severalnines\\Rpc\\Cluster\\Cluster', $rpc->cluster(0));
        $this->assertInstanceOf('Severalnines\\Rpc\\Cluster\\Cluster', $rpc->cluster(1));
        $this->expectException(Exception::class);
        $rpc->cluster(2);
    }

}
