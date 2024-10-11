<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasTranslations;

    public $translatable = ['title', 'content'];
    protected $fillable = ['title', 'content','image'];

    public function elements()
    {
        return $this->hasMany(PageElement::class);
    }
}
