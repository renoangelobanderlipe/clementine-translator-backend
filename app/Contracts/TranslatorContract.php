<?php

namespace App\Contracts;


interface TranslatorContract
{
  /**
   * Set source language
   *
   * @param string $language
   * @return void
   */
  public function sourceLanguage(string $language);

  /**
   * Set target language
   *
   * @param string $language
   * @return void
   */
  public function targetLanguage(string $language);

  /**
   * Takes user input
   *
   * @param string $body
   * @return void
   */
  public function body(string $body);

  /**
   * Format form_params
   *
   * @return array
   */
  public function formParams(): array;

  /**
   * HTTP Headers
   *
   * @return array
   */
  public function headers(): array;

  /**
   * Prepare HTTP Call data
   *
   * @return void
   */
  public function prepare();

  /**
   * Returns data from API response
   *
   * @return void
   */
  public function translated();
}
