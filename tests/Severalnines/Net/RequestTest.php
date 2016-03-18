<?php
namespace Severalnines\Tests\Net;

use Severalnines\Rpc\Net\Request;

/**
 * Class RequestTest
 *
 * @package Severalnines\Tests\Net
 */
class RequestTest extends
    \PHPUnit_Framework_TestCase
{

    public function testOperation()
    {
        $request = new Request('testOperation');
        $this->assertEquals('testOperation', $request->get(Request::KEY_OPERATION));
        $this->assertNotEquals('somethingElse', $request->get(Request::KEY_OPERATION));
    }

    public function testSetGet()
    {
        $request = new Request('testOperation');
        $request->set('someKey', 'someValue');
        $this->assertEquals($request->get('someKey'), 'someValue');
        $this->assertEquals($request->someKey, 'someValue');
        $this->assertNotEquals($request->get('someKey'), 'anotherValue');
        $this->assertNotEquals($request->someKey, 'anotherValue');
        $request->set('anotherKey', 'someValue');
        $this->assertEquals($request->get('anotherKey'), 'someValue');
        $this->assertEquals($request->anotherKey, 'someValue');
        $this->assertNotEquals($request->get('anotherKey'), 'anotherValue');
        $this->assertNotEquals($request->anotherKey, 'anotherKeyValue');
    }

    public function testExists()
    {
        $request = new Request('testOperation');
        $this->assertEquals($request->get('existingValue'), null);
        $request->set('existingValue', 'exists');
        $this->assertEquals($request->get('existingValue'), 'exists');
    }

    public function testRemove()
    {
        $request = new Request('testOperation');
        $request->set('existingValue', 'exists');
        $this->assertEquals($request->get('existingValue'), 'exists');
        $request->remove('existingValue');
        $this->assertEquals($request->get('existingValue'), null);
    }

    public function testSetClusterId()
    {
        $request = new Request('testOperation');
        $this->assertEquals($request->get(Request::KEY_CLUSTER_ID), null);
        $request->setClusterId(123);
        $this->assertEquals($request->get(Request::KEY_CLUSTER_ID), 123);
    }

    public function testSetToken()
    {
        $request = new Request('testOperation');
        $this->assertEquals($request->get(Request::KEY_TOKEN), null);
        $request->setToken('abc');
        $this->assertEquals($request->get(Request::KEY_TOKEN), 'abc');
    }

}
