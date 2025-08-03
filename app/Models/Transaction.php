<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';
    protected $fillable = ['seller_gstin','trans_date','invoice','product_name','total'];
}
