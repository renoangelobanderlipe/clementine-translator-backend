<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;

trait FormValidator
{
  protected function beginValidation(array $params, array $rules, array $message = null)
  {
    $validator = Validator::make($params, $rules);

    throw_if($validator->stopOnFirstFailure()->fails(), \Exception::class, $validator->errors()->first());

    return $validator->validated();
  }
}
