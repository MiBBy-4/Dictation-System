<?php

namespace App\Http\Filters;

use App\Http\Filters\QueryFilter;

class ResultFilter extends QueryFilter{

    public function search_field($search_string = ''){
        return $this->builder
            ->where('title', 'LIKE', '%'.$search_string.'%')
            ->orWhere('content', 'LIKE', '%'.$search_string.'%')
            ->orWhere('created_at', 'LIKE', '%'.$search_string.'%');
    }
}