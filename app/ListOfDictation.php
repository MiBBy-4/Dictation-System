<?php

namespace App;

use App\Filters\searchFilter\QueryFilter;
use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListOfDictation extends Model
{
    use SoftDeletes;
    use Filterable;
    protected $table = 'List_of_dictations';
    protected $guarded = [];
}
