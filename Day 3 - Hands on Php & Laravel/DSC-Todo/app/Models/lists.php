<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lists extends Model
{
    use HasFactory;
    protected $table='lists';
    protected $primaryKey = 'id';
}