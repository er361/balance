<?php


namespace App\Exceptions;

use App\Http\Responses\JsonRpcResponse;
use Exception;

class JsonRpcException extends Exception
{
    const TYPE_PARSE_ERROR = -32700;

    public function report()
    {
        return false;
    }

    public function render()
    {
        return JsonRpcResponse::error([
                'code' => $this->code,
                'message' => $this->message
            ]
        );
    }
}
