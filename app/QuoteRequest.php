<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuoteRequest extends Model
{
    use SoftDeletes;
    protected $fillable = [
    'name',
    'email',
    'company',
    'telephone',
    'idea',
    'description',
    'budget',
    'time_done',
    'field_industry_id'];

}
