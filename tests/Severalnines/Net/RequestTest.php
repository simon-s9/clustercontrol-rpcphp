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

}
