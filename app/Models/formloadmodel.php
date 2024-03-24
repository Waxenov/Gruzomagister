<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formloadmodel extends Model
{
    use HasFactory;
    
    protected $table = 'formcreate'; //таблица в базе данных

    protected $fillable = [
        'cargo_type',       //тип груза
        'cargo_describe',   //описание груза
        'weight',           //вес груза
        'ready_date',       //дата готовности
        'load_place',       //место загрузки
        'unload_place',     //место разгрузки
        'truck_type',       //тип кузова
        'surname',          //фамилия
        'name',             //имя
        'patronymic',       //отчество
        'phone',            //телефон
        'id',               //номер пользователя
    ];
}