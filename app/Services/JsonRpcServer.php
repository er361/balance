<?php


namespace App\Services;


use App\Exceptions\JsonRpcException;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\Controller;
use App\Http\Responses\JsonRpcResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JsonRpcServer
{
    public function handle(Request $request, Controller $controller)
    {
        $content = json_decode($request->getContent(), true);

        if (empty($content)) {
            throw new JsonRpcException('Parse error', JsonRpcException::TYPE_PARSE_ERROR);
        }

        $method = $this->getMethod($content);

        $result = $controller->{$method}(...[$content['params']]);

        return JsonRpcResponse::success($result, $content['id']);

    }

    private function getMethod($content)
    {
        $methodName = explode('.', $content['method']);
        return $methodName[1];
    }

}
