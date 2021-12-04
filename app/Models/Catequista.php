<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catequista extends Model
{
    use HasFactory;

    protected $table = "catequistas";
    protected $fillable = ['nombre', 'celular', 'correo', 'parroquia', 'grupo'];
    protected $hidden = ['id'];

    public function obtenerCatequistas()
    {
        return Catequista::All();
    }
    public function obtenerCatequistaPorId($id)
    {
        return Catequista::find($id);
    }
}
