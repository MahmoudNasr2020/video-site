<?php
namespace App\scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class publish implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('status', '=', 1);
    }
}
