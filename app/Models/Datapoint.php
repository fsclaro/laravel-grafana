<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datapoint extends Model
{
    protected $fillable = ['name', 'value', 'cast'];
}
