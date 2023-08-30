<?php

namespace App\Http\Requests;

use App\Traits\FormValidator;
use Illuminate\Foundation\Http\FormRequest;

class TranslatorRequest extends FormRequest
{

  use FormValidator;

  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
   */
  // public function rules(): array
  // {
  //   return [
  //     'source_language' => 'required|string',
  //     'target_language' => 'required|string',
  //     'body' => 'required|string'
  //   ];
  // }

  public function translatorRules(): array
  {
    return [
      'source_language' => 'required|string|max:8',
      'target_language' => 'required|string|max:8',
      'body' => 'required|string|max:1000'
    ];
  }

  public function challenge()
  {
    return $this->beginValidation($this->all(), self::translatorRules());
  }
}
