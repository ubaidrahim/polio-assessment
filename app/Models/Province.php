<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Division;

class Province extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function household()
    {
        return $this->hasMany(Division::class);
    }

    
}
