<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartOfAccount extends Model
{
     // Laravel Mass Assignment
     protected $guarded = [];

     public function chart_of_accounts_cartegory()
     {
         return $this->belongsTo(ChartOfAccountsCartegory::class);
     }
}
