<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ListOfDictationFilter extends AbstractFilter
{
    public const TITLE = 'title';

    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'name'],
            
        ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }



}