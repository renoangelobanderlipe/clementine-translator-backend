<?php


namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use App\Contracts\HttpHelperContract;

class HttpHelper implements HttpHelperContract
{
  protected $url;
  protected $key;
  protected $endpoint;
  protected $headers;
  protected $body;

  public function domain(string $url)
  {
    $this->url = $url;

    return $this;
  }

  public function key(string $key)
  {
    $this->key = $key;

    return $this;
  }

  public function endpoint(string $endpoint)
  {
    $this->endpoint = $endpoint;

    return $this;
  }

  public function headers(array $headers)
  {
    $this->headers = $headers;

    return $this;
  }

  public function body(array $body)
  {
    $this->body = $body;

    return $this;
  }

  public function post($verify = false)
  {
    $client = new \GuzzleHttp\Client();

    $response = $client->request('POST', $this->url, [
      'form_params' => $this->body,
      'verify' => $verify,
      'headers' => $this->headers,
    ]);

    return json_decode($response->getBody());
  }
}
