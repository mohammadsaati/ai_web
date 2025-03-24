<?php

namespace App\Models;

use App\Scopes\ActiveScope;
use App\Scopes\OrderScope;
use App\Traits\FilterTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Section extends Model
{
    use HasFactory , FilterTrait;
    protected $fillable = [
        'name'              ,   'slug'      ,
        'bg_color'          ,   'bg_image'  ,
        'status'
    ];

    protected static function boot()
    {
        self::addGlobalScope(new ActiveScope);
        self::addGlobalScope(new OrderScope);
        parent::boot();
    }

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class , 'section_posts' , 'section_id' , 'post_id')->withTimestamps();
    }

}
