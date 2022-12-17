<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendonor extends Model
{
    use HasFactory;

    public $guarded = ['id'];
    protected $table = 'pendonor';
}
