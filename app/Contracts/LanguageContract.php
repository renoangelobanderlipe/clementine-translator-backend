<?php

namespace App\Contracts;

interface LanguageContract
{
  /**
   * Data preparation for HTTP Call
   *
   * @return void
   */
  public function prepare();

  /**
   * Data Preparation
   *
   * @return void
   */
  public function list();
}
