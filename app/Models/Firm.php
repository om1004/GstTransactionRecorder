<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{   
    protected $table = "firm";
    protected $fillable = ['username','gstin'];
}
