<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //use HasFactory;
    protected $table="cliente";// hace referencia a la tabla cliente de la bd
    protected $primaryKey="id";
    protected $filiable=[
        'apellidos','nombre','documento','telefono','email','direccion'
    ];
    public $timestamps = false;
}
