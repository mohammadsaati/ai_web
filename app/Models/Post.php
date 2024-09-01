<?php

namespace App\Models;

use App\Filters\PostFilter;
use App\Scopes\ActiveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected static function boot()
    {
        self::addGlobalScope(new ActiveScope());
        parent::boot();
    }

    public function category()
    {
        return $this->belongsTo(Category::class , "category_id");
    }

    public function contentType()
    {
        return $this->belongsTo(ContentType::class , "content_type_id");
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    /************************************
     * *********** #Scope ***************
     ************** START ***************/

    public function scopeFilter($query , PostFilter $filter)
    {
        return $filter->apply($query);
    }

    /************************************
     * *********** #Scope ***************
     ************** END ***************/

}
