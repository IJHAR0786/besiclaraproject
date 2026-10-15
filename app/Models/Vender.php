<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vender extends Model
{
    protected $table = 'venders';
    public $fillable = ["full_name", "email", "password"];
}
