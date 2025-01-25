<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'second_last_name',
        'date_of_birth',
        'email',
        'phone',
        'state',
        'town',
        'tutor_id'
    ];

    public function tutor():BelongsTo{
        return $this->belongsTo(tutor::class, 'tutor_id');
    }
}
