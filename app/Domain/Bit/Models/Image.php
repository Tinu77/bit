<?php

namespace App\Domain\Bit\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['disk', 'filename'];


    public function analyst(): HasOne
    {
        return $this->hasOne(Analyst::class);
    }
}
