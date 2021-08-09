<?php

namespace App\Domain\Bit\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Analyst extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname', 'lastname', 'email', 'og_number', 'whatsapp_number', 'gender', 'dob', 'grade_level', 'grade_step',
        'department', 'cadre', 'competence_level', 'area_of_interests', 'unit', 'rank',
    ];


    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }


    protected static function booted()
    {
        static::creating(function($analyst) {
            $analyst->uuid = Str::uuid();
        });

        static::saving(function($analyst) {
           empty($analyst->uuid) ? $analyst->uuid = Str::uuid() : null ;
        });
    }
}
