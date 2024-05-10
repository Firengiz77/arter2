<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use Spatie\Translatable\HasTranslations;


class MainInformation extends Model
{
    use HasFactory,HasSEO,HasTranslations;

    protected $table = 'maininformation';

    protected $fillable = [
    'header_logo',
'footer_logo',
'phone',

    ];

    public $translatable = [

            
    ];

}
