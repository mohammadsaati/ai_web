<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ActivePostScope implements Scope
{
    public function __construct(public int $active = 1)
    {
    }

    public function apply(Builder $builder, Model $model)
    {
        $builder->whereHas("category" , function ($query) {
           return $query->where("status" , $this->active);
        })
            ->where("status" , $this->active);
    }
}
