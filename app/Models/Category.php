<?php

namespace App\Models;

use App\Filters\CategoryFilter;
use App\Scopes\ActiveScope;
use App\Traits\FilterTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    use FilterTrait;

    protected static function boot()
    {
        self::addGlobalScope(new ActiveScope());
        parent::boot();
    }

    protected $filtering_class = CategoryFilter::class;

    public function posts()
    {
        return $this->hasMany(Post::class , 'category_id');
    }

    /************************************
     * *********** #STATIC **************
     ************** START ***************/

    public static function GetParents()
    {
        return self::query()->whereNull("parent_id");
    }

    public static function GetCategoryForPosts()
    {
        return self::query()
            ->where("status" , "=" , 1)
            ->whereNotNull("parent_id");
    }

    /************************************
     * *********** #STATIC **************
     ************** END ***************/

    public static function GetParent()
    {
        return self::query()->whereNull('parent_id');
    }

    public static function GetSubCategories($categoryID)
    {
        return self::query()->where('parent_id' , '=' , $categoryID);
    }
    /************************************
     * *********** #Scope ***************
     ************** START ***************/


    /************************************
     * *********** #Scope ***************
     *************** END ****************/

             

}
