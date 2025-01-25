<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_name',
        'description',
        'teacher_id'
    ];

    public function teacher():BelongsTo{
        return $this->belongsTo(teacher::class, 'teacher_id');
    }
}
