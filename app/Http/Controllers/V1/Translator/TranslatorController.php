<?php

namespace App\Http\Controllers\V1\Translator;

use App\Http\Controllers\Controller;
use App\Http\Requests\TranslatorRequest;
use App\Models\V1\Translator\TranslatorModel;

class TranslatorController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(TranslatorRequest $request)
  {
    try {
      $request->challenge();

      $response = (new TranslatorModel)
        ->sourceLanguage($request->source_language)
        ->targetLanguage($request->target_language)
        ->body($request->body)
        ->prepare()
        ->translated();

      return $this->responseData($response);
    } catch (\Throwable $throwable) {
      return $this->responseError($throwable->getMessage());
    }
  }
}
