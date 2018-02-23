<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'institute_id';
    protected $table = "institutes";
    protected $fillable = ['name','founding_year','type','mission','core_values','description','images','rating'];
}
