<?php

namespace App\Scopes;

use Illuminate\database\Eloquent\Scope;
use Illuminate\database\Eloquent\Model;
use Illuminate\database\Eloquent\Builder;

class ScopePerson implements Scope
{
	public function apply(Builder $builder, Model $model)
	{
		$builder->where('age', '>', 20);
	}
}
