<?php

namespace App\Models;

use App\Scopes\ActiveScope;
use App\Scopes\BannerScope;
use App\Traits\FilterTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected static function boot()
    {
        self::addGlobalScope(new ActiveScope());
        self::addGlobalScope(new BannerScope());
        parent::boot();
    }

    /*****************************************
     * ************* START RELATIONS *********
     *****************************************/

    public function category()
    {
        return $this->belongsTo(Category::class , 'category_id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class , 'post_id');
    }

    /*****************************************
     * ************* END RELATIONS *********
     *****************************************/

}
