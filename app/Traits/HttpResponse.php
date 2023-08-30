<?php

namespace App\Traits;


trait HttpResponse
{
  protected function responseSuccess(string $message = 'Success')
  {
    return response()->json([
      'message' => $message
    ], 200);
  }

  protected function responseData(array $params,  $hasPrefix = false, int $statusCode = 200)
  {
    $data = $hasPrefix ?  [
      'data' => $params
    ] : $params;

    return response()->json($data, $statusCode);
  }

  protected function responseError(string | object | array $message, int $statusCode = 500)
  {
    return response()->json([
      'message' => $message
    ], $statusCode);
  }
}
