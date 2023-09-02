<?php

namespace App\Models\V1\Languages;

use App\Contracts\LanguageContract;
use Illuminate\Database\Eloquent\Model;

class LanguagesModel extends Model implements LanguageContract
{
  protected $table = 'languages';
  protected $guarded = [];
  protected $hidden = [
    'id',
    'created_at',
    'updated_at'
  ];

  protected $response;
  protected $languagesModel;

  public function scopeLanguages()
  {
    return self::all();
  }

  public function list(): array
  {
    return self::languages()->toArray();
  }
}
