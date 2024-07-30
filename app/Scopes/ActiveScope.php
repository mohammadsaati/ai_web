<?php

namespace App\Scopes;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ActiveScope implements Scope
{
    public function __construct(public string $activeField = 'status' , public int $isActive = StatusEnum::ACTIVE->value)
    {
    }

    public function apply(Builder $builder, Model $model)
    {
        return $builder->where($this->activeField , '=' , $this->isActive);
    }
}
