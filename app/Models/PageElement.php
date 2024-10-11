<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PageElement extends Model
{
    use HasTranslations;
    public $translatable = ['title', 'content'];

    protected $fillable = ['title', 'content','page_id','image','type'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
