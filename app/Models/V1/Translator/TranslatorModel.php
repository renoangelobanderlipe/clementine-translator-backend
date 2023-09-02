<?php

namespace App\Models\V1\Translator;

use App\Contracts\TranslatorContract;
use App\Helpers\HttpHelper;
use Illuminate\Database\Eloquent\Model;

class TranslatorModel extends Model implements TranslatorContract
{

  protected $sourceLanguage;
  protected $targetLanguage;
  protected $response;
  protected $body;

  public function sourceLanguage(string $language)
  {
    $this->sourceLanguage = $language;

    return $this;
  }

  public function targetLanguage(string $language)
  {
    $this->targetLanguage = $language;

    return $this;
  }

  public function body(string $body)
  {
    $this->body = $body;

    return $this;
  }

  public function formParams(): array
  {
    return [
      'source' => $this->sourceLanguage,
      'target' => $this->targetLanguage,
      'q' => $this->body
    ];
  }

  public function headers(): array
  {
    return config('services.google_translate.headers_post');
  }

  public function prepare()
  {
    $this->response = (new HttpHelper)
      ->domain(config('services.rapidapi.domain'))
      ->key(config('services.rapidapi.key'))
      ->headers(self::headers())
      ->body(self::formParams() ?? [])
      ->post();

    return $this;
  }

  public function translated()
  {
    return (array)$this->response->data->translations;
  }
}
