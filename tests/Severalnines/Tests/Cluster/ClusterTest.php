<?php
namespace Severalnines\Tests\Cluster;

use Severalnines\Rpc;
use Severalnines\Rpc\Cluster\Cluster;
use Severalnines\Tests\Test;

/**
 * Class ClusterTest
 *
 * @package Severalnines\Tests\Cluster
 */
class ClusterTest
    extends Test
{

    /**
     * @return Cluster
     */
    protected function getObject()
    {
        return new Cluster(1, 'asdasdasd', Rpc::init(array()));
    }

    /**
     *
     */
    public function testConstructor()
    {
        $this->assertInstanceOf('Severalnines\\Rpc\\Cluster\\Cluster', $this->getObject());
    }

    /**
     *
     */
    public function testGetId()
    {
        $this->assertEquals(1, $this->getObject()->getId());
        $this->assertNotEquals(0, $this->getObject()->getId());
    }

    /**
     *
     */
    public function testGetToken()
    {
        $this->assertEquals('asdasdasd', $this->getObject()->getToken());
        $this->assertNotEquals('other value', $this->getObject()->getToken());
    }

    /**
     *
     */
    public function testGetRpc()
    {
        $this->assertInstanceOf('Severalnines\\Rpc', $this->getObject()->getRpc());
    }

    /**
     *
     */
    public function testClientObjectInstances()
    {
        $this->assertInstanceOf(
            'Severalnines\\Rpc\\Cluster\\Client\\SettingsClient',
            $this->getObject()->settings()
        );
        $this->assertInstanceOf(
            'Severalnines\\Rpc\\Cluster\\Client\\ProcessesClient',
            $this->getObject()->processes()
        );
        $this->assertInstanceOf(
            'Severalnines\\Rpc\\Cluster\\Client\\OperationalReportsClient',
            $this->getObject()->operationalReports()
        );
        $this->assertInstanceOf(
            'Severalnines\\Rpc\\Cluster\\Client\\OperationalReportsSchedulesClient',
            $this->getObject()->operationalReportsSchedules()
        );
        $this->assertInstanceOf(
            'Severalnines\\Rpc\\Cluster\\Client\\LogClient',
            $this->getObject()->log()
        );
        $this->assertInstanceOf(
            'Severalnines\\Rpc\\Cluster\\Client\\JobsClient',
            $this->getObject()->jobs()
        );
        $this->assertInstanceOf(
            'Severalnines\\Rpc\\Cluster\\Client\\StatsClient',
            $this->getObject()->stat()
        );
    }

}
