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

  public function getWithOptions($verify = false)
  {
    $response =  Http::withOptions(['verify' => $verify])
      ->withHeaders($this->headers)
      ->get($this->url . $this->endpoint);

    return $response->failed()
      ? $response->throw()
      : $response->object();
  }

  public function post($verify = false)
  {
    $client = new \GuzzleHttp\Client();

    $response = $client->request('POST', $this->url . $this->endpoint, [
      'form_params' => $this->body,
      'verify' => false,
      'headers' => $this->headers,
    ]);

    return json_decode($response->getBody());

    // $response = Http::withOptions(['verify' => $verify])
    //   ->withHeaders([
    //     'X-RapidAPI-Host' => 'text-translator2.p.rapidapi.com',
    //     'X-RapidAPI-Key' => 'd1a4c832a3msh4d34b0bb58f57b6p155c6cjsnc89200fdfb8a',
    //     'content-type' => 'application/x-www-form-urlencoded',
    //   ])->post('https://text-translator2.p.rapidapi.com/translate', [
    //     'test' => "asds"
    //     // 'source_language' => 'en',
    //     // 'target_language' => 'tl',
    //     // 'text' => 'What is your name?'
    //   ]);

    // return $response->failed()
    //   ? $response->throw()
    //   : $response->object();
  }
}
