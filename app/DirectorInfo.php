<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DirectorInfo extends Model

{
    public $timestamps = false;
    protected $primaryKey = 'institute_director_id';
    protected $table = "institute_director";
    protected $fillable = ['institute_id','description','name','position','picture'];

}
