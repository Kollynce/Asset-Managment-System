<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartOfAccountsCartegory extends Model
{
    // Laravel Mass Assignment
    protected $guarded = [];


    public function chart_of_accounts()
    {
        return $this->hasMany(ChartOfAccount::class);
    }
}
