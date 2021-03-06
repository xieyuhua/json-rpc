<?php

namespace Mix\JsonRpc\Factory;

use Mix\JsonRpc\Message\Error;
use Mix\JsonRpc\Message\Response;

/**
 * Class ResponseFactory
 * @package Mix\JsonRpc\Factory
 */
class ResponseFactory
{

    /**
     * Create result response
     * @param array $result
     * @param $id
     * @return Response
     */
    public static function createResult(array $result, $id)
    {
        $response          = new Response();
        $response->jsonrpc = '2.0';
        $response->result  = $result;
        $response->id      = $id;
        return $response;
    }

    /**
     * Create error response
     * @param int $code
     * @param string $message
     * @param $id
     * @return Response
     */
    public static function createError(int $code, string $message, $id)
    {
        $error             = new Error();
        $error->code       = $code;
        $error->message    = $message;
        $response          = new Response();
        $response->jsonrpc = '2.0';
        $response->error   = $error;
        $response->id      = $id;
        return $response;
    }

    /**
     * Create notification response
     * @param string $method
     * @param array $params
     * @return Response
     */
    public static function createNotification(string $method, array $params)
    {
        $response          = new Response();
        $response->jsonrpc = '2.0';
        $response->method  = $method;
        $response->params  = $params;
        $response->id      = null;
        return $response;
    }

}
