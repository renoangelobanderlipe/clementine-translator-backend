<?php

namespace Database\Seeders;

use App\Models\V1\Languages\LanguagesModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $countries = [
      [
        "code" => "af",
        "name" => "Afrikaans"
      ],
      [
        "code" => "sq",
        "name" => "Albanian"
      ],
      [
        "code" => "am",
        "name" => "Amharic"
      ],
      [
        "code" => "ar",
        "name" => "Arabic"
      ],
      [
        "code" => "hy",
        "name" => "Armenian"
      ],
      [
        "code" => "as",
        "name" => "Assamese"
      ],
      [
        "code" => "ay",
        "name" => "Aymara"
      ],
      [
        "code" => "az",
        "name" => "Azerbaijani"
      ],
      [
        "code" => "bm",
        "name" => "Bambara"
      ],
      [
        "code" => "eu",
        "name" => "Basque"
      ],
      [
        "code" => "be",
        "name" => "Belarusian"
      ],
      [
        "code" => "bn",
        "name" => "Bengali"
      ],
      [
        "code" => "bho",
        "name" => "Bhojpuri"
      ],
      [
        "code" => "bs",
        "name" => "Bosnian"
      ],
      [
        "code" => "bg",
        "name" => "Bulgarian"
      ],
      [
        "code" => "ca",
        "name" => "Catalan"
      ],
      [
        "code" => "ceb",
        "name" => "Cebuano"
      ],
      [
        "code" => "zh",
        "name" => "Chinese"
      ],
      [
        "code" => "zh-TW",
        "name" => "Chinese"
      ],
      [
        "code" => "co",
        "name" => "Corsican"
      ],
      [
        "code" => "hr",
        "name" => "Croatian"
      ],
      [
        "code" => "cs",
        "name" => "Czech"
      ],
      [
        "code" => "da",
        "name" => "Danish"
      ],
      [
        "code" => "dv",
        "name" => "Dhivehi"
      ],
      [
        "code" => "doi",
        "name" => "Dogri"
      ],
      [
        "code" => "nl",
        "name" => "Dutch"
      ],
      [
        "code" => "en",
        "name" => "English"
      ],
      [
        "code" => "eo",
        "name" => "Esperanto"
      ],
      [
        "code" => "et",
        "name" => "Estonian"
      ],
      [
        "code" => "ee",
        "name" => "Ewe"
      ],
      [
        "code" => "tl",
        "name" => "Filipino"
      ],
      [
        "code" => "fi",
        "name" => "Finnish"
      ],
      [
        "code" => "fr",
        "name" => "French"
      ],
      [
        "code" => "fy",
        "name" => "Frisian"
      ],
      [
        "code" => "gl",
        "name" => "Galician"
      ],
      [
        "code" => "ka",
        "name" => "Georgian"
      ],
      [
        "code" => "de",
        "name" => "German"
      ],
      [
        "code" => "el",
        "name" => "Greek"
      ],
      [
        "code" => "gn",
        "name" => "Guarani"
      ],
      [
        "code" => "gu",
        "name" => "Gujarati"
      ],
      [
        "code" => "ht",
        "name" => "Haitian"
      ],
      [
        "code" => "ha",
        "name" => "Hausa"
      ],
      [
        "code" => "haw",
        "name" => "Hawaiian"
      ],
      [
        "code" => "he",
        "name" => "Hebrew"
      ],
      [
        "code" => "hi",
        "name" => "Hindi"
      ],
      [
        "code" => "hmn",
        "name" => "Hmong"
      ],
      [
        "code" => "hu",
        "name" => "Hungarian"
      ],
      [
        "code" => "is",
        "name" => "Icelandic"
      ],
      [
        "code" => "ig",
        "name" => "Igbo"
      ],
      [
        "code" => "ilo",
        "name" => "Ilocano"
      ],
      [
        "code" => "id",
        "name" => "Indonesian"
      ],
      [
        "code" => "ga",
        "name" => "Irish"
      ],
      [
        "code" => "it",
        "name" => "Italian"
      ],
      [
        "code" => "ja",
        "name" => "Japanese"
      ],
      [
        "code" => "jv",
        "name" => "Javanese"
      ],
      [
        "code" => "kn",
        "name" => "Kannada"
      ],
      [
        "code" => "kk",
        "name" => "Kazakh"
      ],
      [
        "code" => "km",
        "name" => "Khmer"
      ],
      [
        "code" => "rw",
        "name" => "Kinyarwanda"
      ],
      [
        "code" => "gom",
        "name" => "Konkani"
      ],
      [
        "code" => "ko",
        "name" => "Korean"
      ],
      [
        "code" => "kri",
        "name" => "Krio"
      ],
      [
        "code" => "ku",
        "name" => "Kurdish"
      ],
      [
        "code" => "ckb",
        "name" => "Kurdish"
      ],
      [
        "code" => "ky",
        "name" => "Kyrgyz"
      ],
      [
        "code" => "lo",
        "name" => "Lao"
      ],
      [
        "code" => "la",
        "name" => "Latin"
      ],
      [
        "code" => "lv",
        "name" => "Latvian"
      ],
      [
        "code" => "ln",
        "name" => "Lingala"
      ],
      [
        "code" => "lt",
        "name" => "Lithuanian"
      ],
      [
        "code" => "lg",
        "name" => "Luganda"
      ],
      [
        "code" => "lb",
        "name" => "Luxembourgish"
      ],
      [
        "code" => "mk",
        "name" => "Macedonian"
      ],
      [
        "code" => "mai",
        "name" => "Maithili"
      ],
      [
        "code" => "mg",
        "name" => "Malagasy"
      ],
      [
        "code" => "ms",
        "name" => "Malay"
      ],
      [
        "code" => "ml",
        "name" => "Malayalam"
      ],
      [
        "code" => "mt",
        "name" => "Maltese"
      ],
      [
        "code" => "mi",
        "name" => "Maori"
      ],
      [
        "code" => "mr",
        "name" => "Marathi"
      ],
      [
        "code" => "mni-Mtei",
        "name" => "Meiteilon"
      ],
      [
        "code" => "lus",
        "name" => "Mizo"
      ],
      [
        "code" => "mn",
        "name" => "Mongolian"
      ],
      [
        "code" => "my",
        "name" => "Myanmar"
      ],
      [
        "code" => "ne",
        "name" => "Nepali"
      ],
      [
        "code" => "no",
        "name" => "Norwegian"
      ],
      [
        "code" => "ny",
        "name" => "Nyanja"
      ],
      [
        "code" => "or",
        "name" => "Odia"
      ],
      [
        "code" => "om",
        "name" => "Oromo"
      ],
      [
        "code" => "ps",
        "name" => "Pashto"
      ],
      [
        "code" => "fa",
        "name" => "Persian"
      ],
      [
        "code" => "pl",
        "name" => "Polish"
      ],
      [
        "code" => "pt",
        "name" => "Portuguese"
      ],
      [
        "code" => "pa",
        "name" => "Punjabi"
      ],
      [
        "code" => "qu",
        "name" => "Quechua"
      ],
      [
        "code" => "ro",
        "name" => "Romanian"
      ],
      [
        "code" => "ru",
        "name" => "Russian"
      ],
      [
        "code" => "sm",
        "name" => "Samoan"
      ],
      [
        "code" => "sa",
        "name" => "Sanskrit"
      ],
      [
        "code" => "gd",
        "name" => "Scots"
      ],
      [
        "code" => "nso",
        "name" => "Sepedi"
      ],
      [
        "code" => "sr",
        "name" => "Serbian"
      ],
      [
        "code" => "st",
        "name" => "Sesotho"
      ],
      [
        "code" => "sn",
        "name" => "Shona"
      ],
      [
        "code" => "sd",
        "name" => "Sindhi"
      ],
      [
        "code" => "si",
        "name" => "Sinhala"
      ],
      [
        "code" => "sk",
        "name" => "Slovak"
      ],
      [
        "code" => "sl",
        "name" => "Slovenian"
      ],
      [
        "code" => "so",
        "name" => "Somali"
      ],
      [
        "code" => "es",
        "name" => "Spanish"
      ],
      [
        "code" => "su",
        "name" => "Sundanese"
      ],
      [
        "code" => "sw",
        "name" => "Swahili"
      ],
      [
        "code" => "sv",
        "name" => "Swedish"
      ],
      [
        "code" => "tl",
        "name" => "Tagalog"
      ],
      [
        "code" => "tg",
        "name" => "Tajik"
      ],
      [
        "code" => "ta",
        "name" => "Tamil"
      ],
      [
        "code" => "tt",
        "name" => "Tatar"
      ],
      [
        "code" => "te",
        "name" => "Telugu"
      ],
      [
        "code" => "th",
        "name" => "Thai"
      ],
      [
        "code" => "ti",
        "name" => "Tigrinya"
      ],
      [
        "code" => "ts",
        "name" => "Tsonga"
      ],
      [
        "code" => "tr",
        "name" => "Turkish"
      ],
      [
        "code" => "tk",
        "name" => "Turkmen"
      ],
      [
        "code" => "ak",
        "name" => "Twi"
      ],
      [
        "code" => "uk",
        "name" => "Ukrainian"
      ],
      [
        "code" => "ur",
        "name" => "Urdu"
      ],
      [
        "code" => "ug",
        "name" => "Uyghur"
      ],
      [
        "code" => "uz",
        "name" => "Uzbek"
      ],
      [
        "code" => "vi",
        "name" => "Vietnamese"
      ],
      [
        "code" => "cy",
        "name" => "Welsh"
      ],
      [
        "code" => "xh",
        "name" => "Xhosa"
      ],
      [
        "code" => "yi",
        "name" => "Yiddish"
      ],
      [
        "code" => "yo",
        "name" => "Yoruba"
      ],
      [
        "code" => "zu",
        "name" => "Zulu"
      ]
    ];

    foreach ($countries as $country) {
      \DB::beginTransaction();
      LanguagesModel::create($country);
      \DB::commit();
    }
  }
}
