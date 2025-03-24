<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class OrderScope implements Scope
{
    public function __construct(public string $orderBy = 'id', public string $direction = 'DESC')
    {
    }

    public function apply(Builder $builder, Model $model)
    {
        $builder->orderBy(column: $this->orderBy, direction: $this->direction);
    }
}
