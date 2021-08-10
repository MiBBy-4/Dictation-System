<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class DictationFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const DESCRIPTION = 'email';

    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'name'],
            self::DESCRIPTION => [$this, 'description'],
        ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }

    public function description(Builder $builder, $value)
    {
        $builder->where('description', 'like', "%{$value}%");
    }

}