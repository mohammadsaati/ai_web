<?php

namespace App\Scopes;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class BannerScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        return $builder->orwhereRelation('post' , 'status' , StatusEnum::ACTIVE->value)
                        ->orWhereRelation('category' , 'status' , StatusEnum::ACTIVE->value);
    }
}
