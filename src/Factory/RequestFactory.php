<?php

namespace Mix\JsonRpc\Factory;

use Mix\JsonRpc\Message\Request;

/**
 * Class RequestFactory
 * @package Mix\JsonRpc\Factory
 */
class RequestFactory
{

    /**
     * Create Request
     * @param string $method
     * @param array $params
     * @param $id
     * @return Request
     */
    public static function create(string $method, array $params, $id)
    {
        $request          = new Request();
        $request->jsonrpc = '2.0';
        $request->method  = $method;
        $request->params  = $params;
        $request->id      = $id;
        return $request;
    }

}
