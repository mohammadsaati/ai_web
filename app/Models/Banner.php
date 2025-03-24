<?php

namespace App\Models;

use App\Scopes\ActiveScope;
use App\Scopes\BannerScope;
use App\Traits\FilterTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    /*****************************************
     * ************* END RELATIONS *********
     *****************************************/

    public function scopeGetLink(): string
    {
        if ($this->type == \App\Enums\BannerEnum::CATEGORY->value) {

            return route('category.show', $this->category->slug);

        } elseif ($this->type == \App\Enums\BannerEnum::PRODUCT->value) {

            return route('post.show', $this->post->slug);

        } else {
            return $this->link;
        }
    }
}
