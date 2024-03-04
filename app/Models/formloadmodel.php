<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formloadmodel extends Model
{
    use HasFactory;
    
    protected $table = 'formcreate';

    protected $fillable = [
        'cargo_type',
        'cargo_describe',
        'weight',
        'ready_date',
        'load_place',
        'unload_place',
        'truck_type',
        'surname',
        'name',
        'patronymic',
        'phone',
    ];
}
