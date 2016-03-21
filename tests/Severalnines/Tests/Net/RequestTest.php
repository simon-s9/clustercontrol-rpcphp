<?php
namespace Severalnines\Tests\Net;

use Severalnines\Tests\Test;
use Severalnines\Rpc\Net\Request;

/**
 * Class RequestTest
 *
 * @package Severalnines\Tests\Net
 */
class RequestTest
    extends Test
{

    /**
     *
     */
    public function testOperationSetterInConstructor()
    {
        $request = new Request('testOperation');
        $this->assertEquals('testOperation', $request->get(Request::KEY_OPERATION));
        $this->assertNotEquals('somethingElse', $request->get(Request::KEY_OPERATION));
    }

    /**
     *
     */
    public function testSettersAndGetters()
    {
        $request = new Request('testOperation');

        $request->set('someKey', 'someValue');
        $this->assertEquals($request->get('someKey'), 'someValue');
        $this->assertNotEquals($request->get('someKey'), 'anotherValue');

        $request->set('anotherKey', 'someValue');
        $this->assertEquals($request->get('anotherKey'), 'someValue');
        $this->assertNotEquals($request->get('anotherKey'), 'anotherValue');

        $request = new Request('testOperation');
        $request->__set('someKey', 'someValue');
        $this->assertEquals($request->__get('someKey'), 'someValue');
        $this->assertNotEquals($request->__get('someKey'), 'anotherValue');

        $request = new Request('testOperation');
        $request->__set('anotherKey', 'someValue');
        $this->assertEquals($request->__get('anotherKey'), 'someValue');
        $this->assertNotEquals($request->__get('anotherKey'), 'anotherKeyValue');

        $this->assertTrue($request->__isset('anotherKey'));
        $request->__unset('anotherKey');
        $this->assertNull($request->__get('anotherKey'));
    }

    /**
     *
     */
    public function testExistsMethod()
    {
        $request = new Request('testOperation');
        $this->assertEquals($request->get('existingValue'), null);
        $request->set('existingValue', 'exists');
        $this->assertEquals($request->get('existingValue'), 'exists');
    }

    /**
     *
     */
    public function testRemove()
    {
        $request = new Request('testOperation');
        $request->set('existingValue', 'exists');
        $this->assertEquals($request->get('existingValue'), 'exists');
        $request->remove('existingValue');
        $this->assertEquals($request->get('existingValue'), null);
    }

    /**
     *
     */
    public function testSetClusterId()
    {
        $request = new Request('testOperation');
        $this->assertEquals($request->get(Request::KEY_CLUSTER_ID), null);
        $request->setClusterId(123);
        $this->assertEquals($request->get(Request::KEY_CLUSTER_ID), 123);
    }

    /**
     *
     */
    public function testSetToken()
    {
        $request = new Request('testOperation');
        $this->assertEquals($request->get(Request::KEY_TOKEN), null);
        $request->setToken('abc');
        $this->assertEquals($request->get(Request::KEY_TOKEN), 'abc');
    }

    /**
     *
     */
    public function testOperationDefined()
    {
        $request = new Request('testOperation');
        $this->assertEquals(
            $this->invokeMethod($request, '_operationDefined'),
            true
        );
        $request->remove(Request::KEY_OPERATION);
        $this->assertEquals(
            $this->invokeMethod($request, '_operationDefined'),
            false
        );
    }

    /**
     * @expectedException \Severalnines\Rpc\Exception\Exception
     */
    public function testCheckOperation()
    {
        $request = new Request();
        $this->invokeMethod($request, '_checkOperation');
    }

    /**
     *
     */
    public function testCheckSerializer()
    {
        $request = new Request('testOperation');
        $serialized = $request->serialize();
        $this->assertEquals($serialized, 'a:1:{s:9:"operation";s:13:"testOperation";}');
        $newRequest = new Request();
        $newRequest->unserialize($serialized);
        $this->assertEquals($newRequest->get(Request::KEY_OPERATION), 'testOperation');
    }

    public function testCheckJsonSerializer()
    {
        $request = new Request('testOperation');
        $serialized = $request->toJson();
        $this->assertEquals($serialized, '{"operation":"testOperation"}');
    }

}
