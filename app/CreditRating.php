<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditRating extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'tdr_credit_rating_id';
    protected $table = "tdr_credit_rating";
    protected $fillable = ['institute_id','year','short_term','long_term','source_name'];

}
