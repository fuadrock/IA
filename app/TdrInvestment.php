<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TdrInvestment extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'tdr_investment_id';
    protected $table = "tdr_investment";
    protected $fillable = ['institute_id','deposit_fund','loan_fund','non_performing_ratio','credit_deposit_ratio','current_ratio','capital_adequacy_ratio','return_of_equity','authorized_capital','paid_up_capital'];

}
