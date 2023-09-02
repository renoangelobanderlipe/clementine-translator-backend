<?php

namespace App\Http\Controllers\V1\Languages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\V1\Languages\LanguagesModel;

class LanguagesController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    try {
      $languages = (new LanguagesModel)
        ->list();

      return $this->responseData($languages);
    } catch (\Throwable $throwable) {
      return $this->responseError($throwable->getMessage());
    }
  }
}
