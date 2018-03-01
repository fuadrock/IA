<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepositRate extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'deposit_rate_id';
    protected $table = "deposit_rate";
    protected $fillable = ['institute_id','3-month_rate','6-month_rate','12-month_rate','double-money_rate'];

}
