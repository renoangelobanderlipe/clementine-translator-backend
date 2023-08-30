<?php

namespace App\Models\V1\Languages;

use App\Contracts\LanguageContract;
use App\Helpers\HttpHelper;
use Illuminate\Database\Eloquent\Model;

class LanguagesModel extends Model implements LanguageContract
{
  protected $response;
  protected $languagesModel;

  /**
   * Set of languages return by the Http Helper
   *
   * @return void
   */
  public function prepare()
  {
    $this->response = (new HttpHelper)
      ->domain(config('services.rapidapi.domain'))
      ->key(config('services.rapidapi.key'))
      ->endpoint(config('constants.api_endpoint.getLanguage'))
      ->headers(config('services.rapidapi.headers'))
      ->getWithOptions();

    return $this;
  }

  /**
   * Data Model of Languages
   *
   * @return void
   */
  public function list()
  {
    return $this->response
      ->data
      ->languages;
  }
}
