<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complainment extends Model
{
    // use HasFactory;
    protected $table = 'complainmrnt';
    protected $fillable = [
        'name',
        'address',
        'number_telp',
        'date',
        'complain'
    ];
    public $timestamps = false;
}
