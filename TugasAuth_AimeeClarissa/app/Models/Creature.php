<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creature extends Model
{
    use HasFactory;

    protected $table = 'creature';
    protected $fillable = ['name','origin','power_level','element'];
}
