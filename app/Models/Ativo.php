<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ativo extends Model
{
    use HasFactory;

    public function timeframesFirst()
    {
        return $this->hasMany(Timeframe::class, 'ativo', 'name')->orderBy('id', 'desc')->take(1);
    }
}
