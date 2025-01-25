<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class inscription extends Model
{
    use HasFactory;

    protected $primaryKey = 'inscription_id'; // Cambia 'inscription_id' por el nombre real de tu clave primaria
    public $incrementing = true; // Si la clave primaria no es incremental, cámbialo a false
    protected $keyType = 'int'; // Cambia a 'string' si la clave primaria es un string


    protected $fillable = [
        'student_id',
        'subject_id',
        'date'
    ];

    protected $dates = ['date'];


    public function student():BelongsTo{
        return $this->belongsTo(student::class, 'student_id');
    }

    public function subject():BelongsTo{
        return $this->belongsTo(subject::class, 'subject_id');
    }
}
